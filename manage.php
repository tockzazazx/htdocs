<?php
include "connect.php";
include_once "db_user.inc.php";
session_start();
if($_SESSION["type"] != "admin"){
    header("location:index.php");
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(update_user($con,$id,$name,$surname,$username,$password)) {
        header("location:admin_page1.php");
    }
}

if (isset($_POST['insert1'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $chk = insert_user($con,$name,$surname,$username,$password);
    if($chk) {
        header("location:admin_page1.php");
    }
}

if (isset($_POST['edit'])){
    $id = $_POST['id'];
    $user = get_user($con,$id);
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $chk = delete_user($con,$id);
    if($chk){
        header("location:admin_page1.php");
    }
}echo "123555";
echo "git test";
?>