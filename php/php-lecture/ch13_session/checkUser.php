<?php
    session_start();
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
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
    if ($rs) {
        if ($rs['password'] == $Password) {
            $_SESSION['Username'] = $Username;
            header("Location: welcome.php?Username=$Username");
        } else {
            echo "<br>Password not match";
            echo "<br><a href='login.php'>Back to login page</a>";
        }
    }else {
        echo "<br>Username: $Username is not found";
        echo "<br><a href='login.php'>Back to login page</a>";
    }
?>

<!-- Assignment รายงาน
    ส่งรายงานอาจารย์วันที่ 11 มีนาคม 2567 ส่งบ่ายโมงตรง
    จัดลำดับกลุ่มกันมาเอง ใครส่งก่อนหลัง เลียงลำดับกับเพื่อนกันมาเอง
    และเตรียมงานที่จะมา present ด้วย
    กลุ่มนึง present ไม่ควรเกินครึ่งชั่วโมง
    ในรายงานต้องมี ชื่อระบบ ชื่อสมาชิกในกลุ่ม รหัสนักศึกษา ชื่อ อยู่ห้องอะไร
    วัตถุประสงค์การของทำ assignment นี้ ขอบเขต database เขียน er-diagram มาด้วย
    ใน database มี table ใดบ้างแล้วใน table นั้นมี structure เป็นอะไร fk pk
    ยกตัวอย่างข้อมูลใน table
    capture หน้าจอมาว่าทำอะไรไว้บ้าง insert update delete แก้ไขอะไรได้บ้าง
    หน้าจอนี้เพิ่ม หน้าจอนี้แก้ไขข้อมูล
    ตัวงานก็ต้องสามารถ เพิ่มลบแก้ไขข้อมูลได้จริงๆ
    อาจารย์ต้องมีเล่มรายงานก่อน present เพราะอาจารย์จะดูตัวรายงานไปพร้อมกับการ present
    เราต้อง present ส่วนที่เราทำทั้งหมด ส่วนไหนเราทำก็ present ให้เขาเห็นให้ครบ
-->