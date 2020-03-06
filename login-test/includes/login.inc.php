<?php
include "classAutoloader.inc.php";

    if (isset($_POST["login-submit"])) {
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        $usersView = new UsersView();

        if (empty($uid) || empty($pwd)) {
            header("Location: ../index.php?login=emptyFields");
            exit;
        } elseif ($usersView->checkUidAndPwd($uid, $pwd)) {
            $usersView->login($uid, $pwd);

            header("Location: ../index.php?login=succes");
            exit;
        } elseif($usersView->checkUidOrPwd("", $pwd)) {
            header("Location: ../index.php?login=invalidUid");
            exit;
        } elseif ($usersView->checkUidOrPwd($uid, "")) {
            header("Location: ../index.php?login=invalidPwd&uid=$uid");
            exit;
        } else {
            header("Location: ../index.php?login=invalidUidAndPwd");
            exit;
        }
    } else {
        header("Location: ../index.php");
        exit;
    }

?>