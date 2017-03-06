<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=aaa;charset=utf8', 'tock', '1234');
}
catch (PDOException $exception){
    echo 'Connection failed : ' . $exception->getMessage();
}
?>