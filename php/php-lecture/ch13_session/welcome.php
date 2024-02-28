<?php
    session_start();
    $Username = $_GET['Username'];
    if ($Username == $_SESSION['Username']) {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "session";
        $conn = mysqli_connect($hostname, $username, $password);
        if (!$conn) die ("ไม่สามารถติดต่อกับ MySQL ได้");
        mysqli_select_db($conn, $dbname) or die ("ไม่สามารถเลือกฐานข้อมูล $dbname ได้");
        $sqltxt = "SELECT * FROM login WHERE username = '$Username'";
        $result = mysqli_query($conn, $sqltxt);
        $rs = mysqli_fetch_array($result);
        echo "<table border=1 align=center bgcolor=#ffcccc width=400>
                <tr><td colspan=2 bgcolor=#ff99cc><B> แสดงรายละเอียดผู้ใช้ </B></td></tr>
                <tr><td> Username: </td><td>". $rs['username'] . "</td></tr>
                <tr><td> Password: </td><td>". $rs['password'] . "</td></tr>
                <tr><td> Status: </td><td>". $rs['status'] . "</td></tr>
               </table>
               <br><a href='logout.php?Username=$Username'>Logout</a>";
    } else {
        echo "You are not logged in
              <br><a href='login.php'>Back to login page</a>";
    }
?>