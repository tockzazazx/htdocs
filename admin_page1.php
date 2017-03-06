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
            <input type="submit" value="INSERT" name="insert">
        </form>
        <table align="center" border="1">
            <tr>
                <th>ID</th><th>NAME</th><th>SURNAME</th><th>EDIT</th><th>DELETE</th>
            </tr>
<?php
$i=1;
$users = get_users($con);
for($j=0;$j<count($users);$j++){
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $users[$j]['name'] ?></td>
                <td><?php echo $users[$j]['surname'] ?></td>
                <td>
                    <form action="admin_edit.php" method="post">
                        <input type="hidden" value="<?php echo $users[$j]['id']; ?>" name="id">
                        <input type="submit" value="แก้ไขข้อมูล" name="edit">
                    </form>
                </td>
                <td>
                    <form action="manage.php" method="post">
                        <input type="hidden" value="<?php echo $users[$j]['id']; ?>" name="id">
                        <input type="submit" value="ลบ" name="delete">
                    </form>
                </td>
            </tr>
            <?php
    $i++;
}
?>
        </table>
    </body>
    </html>