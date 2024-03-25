<?php
function emptyInputSignup($name, $email, $pwd, $pwdRepeat, $username) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $username);
    mysqli_stmt_execute($stmt);

    $resultsData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultsData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }



    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $newId = mysqli_insert_id($conn);
    $sql = "INSERT INTO profileimg (userid, status) VALUES ('$newId', 1)";
    mysqli_query($conn, $sql);

    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }


    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userfullname"] = $uidExists["usersName"];
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];

        header("location: ../index.php");
        exit();
    }
}

function search($conn ,$text)
{
    $sql = "SELECT * FROM users WHERE usersUid LIKE '%" . mysqli_real_escape_string($conn, $text) . "%' OR usersName LIKE '%". mysqli_real_escape_string($conn, $text) ."%'";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        $id = $row["usersId"];
        echo "<div style='width: 50vw; height: 100px; background-color: rgba(255,255,255,0.53); border-radius: 10px;margin: 20px 0 0 0; display: flex; align-items: center; padding-left: 40px'>";
        $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
        $resultImg = mysqli_query($conn, $sqlImg);
        while ($rowImg = mysqli_fetch_assoc($resultImg)) {
            echo "<div>";
            if ($rowImg["status"] == 0) {
                $pfp = 'data/profile'.$id.'.jpg?'.mt_rand();
            }
            else {
                $pfp = 'images/nopfp.png';
            }
            echo "</div>";
        }
        echo "<img src='". $pfp ."' style='width: 80px; height: 80px; z-index: 999; border-radius: 50%; object-fit: cover'>";
        echo "<a href='profile.php?id=". $row["usersId"] ."' style='padding-left: 20px'>". $row["usersName"] . "</a><button style='margin-left: 20px; background-color: #8705f1; color: white; border-radius: 20px'>Add as a friend</button></div>";
    }
}
