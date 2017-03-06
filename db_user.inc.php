<?php
function get_users($con){
    $res = $con->query("SELECT * FROM member WHERE `type`='user'");
    while($row = $res->fetch(PDO::FETCH_BOTH)){
        $users[] = array( "id" => $row['id'] ,
            "name" => $row['name'] ,
            "surname" => $row['surname'] ,
            "username" => $row['username'] ,
            "passwd" => $row['passwd'] );
    }
    return $users;
}
function get_user($con,$id){
    $res = $con->query("SELECT * FROM member WHERE id='$id'");
    while($row = $res->fetch(PDO::FETCH_BOTH)){
        $user1 = array( "id" => $row['id'] ,
                        "name" => $row['name'] ,
                        "surname" => $row['surname'] ,
                        "username" => $row['username'] ,
                        "passwd" => $row['passwd'] );
    }
    return $user1;
}

function insert_user($con,$name,$surname,$username,$password){
    $res = $con->exec("INSERT INTO `member`(`id`,`name`, `surname`, `username`, `passwd`, `type`) VALUES (NULL,'$name','$surname','$username','$password','user')");
    return $res;
}

function update_user($con,$id,$name,$surname,$username,$passwd){
    $res = $con->exec("UPDATE `member` SET `name`='$name',`surname`='$surname',`username`='$username',`passwd`='$passwd' WHERE id='$id'");
    return $res;
}

function delete_user($con,$id){
    $res = $con->exec("DELETE FROM `member` WHERE id='$id'");
    return $res;
}
?>