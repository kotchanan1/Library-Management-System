<?php
include("../config/db.php");

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>

<h2>📚 รายการหนังสือ</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>ชื่อหนังสือ</th>
        <th>ผู้แต่ง</th>
        <th>หมวด</th>
        <th>จำนวน</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['book_id'] ?></td>
        <td><?= $row['book_name'] ?></td>
        <td><?= $row['author'] ?></td>
        <td><?= $row['category'] ?></td>
        <td><?= $row['quantity'] ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
