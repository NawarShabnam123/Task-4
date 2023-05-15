<?php
    $conn = mysqli_connect("localhost", "root", "", "task4_validation");

    $uemail = $_COOKIE['lgEmail'];
    $upass = $_COOKIE['lgPass'];

    $chk = "SELECT * FROM user_info WHERE uEmail = '$uemail' AND uPass = '$upass'";
    $chkRun = $conn->query($chk);

    $chkCount = mysqli_num_rows($chkRun);
    if($chkCount == 1){
        $conn->close();
        header("Location: ./home.php");
        die();
    }
    else{
        $conn->close();
        ?>
        <script>
            alert("Incorrent Credentials");
            window.location = "./";
        </script>
        <?php
    }
?>