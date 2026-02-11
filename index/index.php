<?php
session_start();
if (!isset($_SESSION['memberid'])) {
    header("Location: ../login/login.php");
    exit();
}
?>

<h2>ยินดีต้อนรับ <?php echo $_SESSION['fullname']; ?></h2>

<ul>
    <li><a href="../book_list/book_list.php">📚 ดูหนังสือ</a></li>
    <li><a href="../borrow/borrow.php">📖 ยืมหนังสือ</a></li>
    <li><a href="../logout/logout.php">🚪 Logout</a></li>
</ul>
