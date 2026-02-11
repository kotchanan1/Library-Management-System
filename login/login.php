<?php
session_start();
include "config/db.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Member WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['memberid'] = $row['memberid'];
        $_SESSION['fullname'] = $row['fullname'];
        header("Location: index.php");
    } else {
        $error = "Username หรือ Password ไม่ถูกต้อง";
    }
}
?>

<form method="post">
    <h2>Login ห้องสมุด</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button name="login">Login</button>
    <p style="color:red;"><?php echo $error ?? ''; ?></p>
</form>
