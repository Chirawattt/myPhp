<?php
    session_start();
    echo "ชื่อผู้ใช้ของคุณยังคนเป็น " . $_SESSION['username'];
    echo "<br>รหัสผ่านของคุณยังคงเป็น " . $_SESSION['password'];
?>
<br><a href="session_file1.php">คลิกตรงนี้เพื่อกลับไปยังไฟล์ session_file1.php</a>