<?php
    include "connection.php";
    session_start();
    $otp_db = $_SESSION['otp'];
    $email = $_SESSION['emails'];
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];

    if($password === $repassword){
        $pass = password_hash($password,PASSWORD_DEFAULT);
        $repass = password_hash($repassword,PASSWORD_DEFAULT);

       $sql = "UPDATE signup SET password = '$pass' WHERE email_id = '$email' AND otp = '$otp_db'";
       $result = mysqli_query($conn,$sql) or die("query is failed");
       if($result){
        $_SESSION['msg'] = "Password is updated successfully.";
        header("Location: http://localhost/DE/wayfinding-master/login.php");
       }
       else{
        $_SESSION['msg'] = "Password is not updated.";
        header("Location: http://localhost/DE/wayfinding-master/login.php");
       }
    }
    else{
        echo "password is not matched.";
    }


?>