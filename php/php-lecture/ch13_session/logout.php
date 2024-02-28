<?php
    session_start();
    session_destroy();
    $Username = $_GET['Username'];
    echo "User: $Username has been logged out<br>";
    echo "<a href='login.php'>Back to login page</a>";
?>