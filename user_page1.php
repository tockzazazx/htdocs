<?php
include 'connect.php';
session_start();
if($_SESSION["type"] != "user"){
    header("location:index.php");
}
$username = $_SESSION['username'];
$res = $con->query("SELECT * FROM member WHERE username='$username'");
$row = $res->fetch(PDO::FETCH_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
    <title>MVC</title>
</head>
<body>
    <table align="center" border="1">
        <tr>
            <th width="90">Name</th>
            <td width="90" align="center"><?php echo $row['name'] ?></td>
        </tr>
        <tr>
            <th>Surname</th>
            <td align="center"><?php echo $row['surname'] ?></td>
        </tr>
    </table>
</body>
</html>
