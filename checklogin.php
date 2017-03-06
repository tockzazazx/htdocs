<?php
include 'connect.php';
session_start();
if (isset($_POST['butsign'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($res = $con->query("SELECT * FROM member WHERE username='$username' AND passwd='$password'")){
        if ($row = $res->fetch(PDO::FETCH_BOTH)){
            if($row['type'] == "admin"){
                $_SESSION['type'] = "admin";
                $_SESSION["username"] = $row['username'];
                header("location:admin_page1.php");
            }
            else{
                $_SESSION['type'] = "user";
                $_SESSION["username"] = $row['username'];
                header("location:user_page1.php");
            }
        }
        else{
            echo "<body onload=\"window.alert('Username หรือ Password ผิดพลาด กรุณาลองใหม่อีกครั้ง');return history.go(-1)\">";
            echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
        }
    }
}
?>