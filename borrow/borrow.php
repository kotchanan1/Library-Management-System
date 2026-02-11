<?php
session_start();
include "config/db.php";

if (isset($_POST['borrow'])) {
    $bookid = $_POST['bookid'];
    $memberid = $_SESSION['memberid'];

    $sql = "INSERT INTO Borrow 
    (borrowstatus, borrowDate, bookid, memberid)
    VALUES ('borrowed', NOW(), '$bookid', '$memberid')";

    mysqli_query($conn, $sql);

    mysqli_query($conn,
        "UPDATE Book SET booStatus='borrowed' WHERE bookid='$bookid'"
    );

    echo "ยืมหนังสือสำเร็จ ✅";
}
?>

<form method="post">
    <h2>ยืมหนังสือ</h2>
    <input type="number" name="bookid" placeholder="Book ID" required>
    <button name="borrow">ยืม</button>
</form>
