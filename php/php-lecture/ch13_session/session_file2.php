<?php
    session_start();
    $_SESSION['username'] = $_GET['username']; // save the username in session $_SESSION means global variable
    $_SESSION['password'] = $_GET['password']; // save the password in session
?>
<?php
    echo "<label>ชื่อผู้ใช้ของคุณคือ " . $_SESSION['username'] . "</label><br>
    <label>รหัสผ่านของคุณคือ " . $_SESSION['password'] . "</label>";
?>
<!-- didn't send any data to session_file3.php but it still can access the session data -->
<br><a href="session_file3.php">คลิกตรงนี้เพื่อไปยังไฟล์ session_file3.php</a> 