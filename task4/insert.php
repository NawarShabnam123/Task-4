<?php
    $conn = mysqli_connect("localhost", "root", "", "task4_validation");

    $uname = $_COOKIE['uname'];
    $uemail = $_COOKIE['uemail'];
    $upass = $_COOKIE['upass'];

    $insertQ = "INSERT INTO user_info(uName, uEmail, uPass) VALUES('$uname', '$uemail', '$upass')";
    $insertQRun = $conn->query($insertQ);
    $conn->close();

    header("Location: ./");
    exit();
?>