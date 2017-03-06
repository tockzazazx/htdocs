<?php
include_once "manage.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>MVC</title>
</head>
<body>
<form action="admin_page1.php" method="post">
    <div align="center">
    <table align="center" border="1">
        <tr>
            <th>ID</th>
            <td><?php echo $user['id']; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><input name="name" value="<?php echo $user['name']; ?>" type="text"></td>
        </tr>
        <tr>
            <th>Surname</th>
            <td><input name="surname" value="<?php echo $user['surname']; ?>" type="text"></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><input name="username" value="<?php echo $user['username']; ?>" type="text"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input name="password" value="<?php echo $user['passwd']; ?>" type="text"></td>
        </tr>
    </table>
        <br>
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <input type="submit" name="update" value="UPDATE">
    </div>
</form>
</body>
</html>