<?php
include_once "manage.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>MVC</title>
</head>
<body>
<form action="admin_insert.php" method="post">
<div align="center">
    <table border="1" align="center">
        <tr>
            <th>NAME</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Surname</th>
            <td><input type="text" name="surname"></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="text" name="password"></td>
        </tr>
    </table>
    <br>
    <input type="submit" name="insert1" value="INSERT">
</div>
</form>
</body>
</html>