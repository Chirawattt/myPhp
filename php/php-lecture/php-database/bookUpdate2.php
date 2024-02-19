<?php
    $bookId = $_POST['bookID'];
    $bookName = $_POST['bookName'];
    $typeId = $_POST['typeID'];
    $statusId = $_POST['statusID'];
    $publish = $_POST['publish'];
    $unitPrice = $_POST['unitPrice'];
    $unitRent = $_POST['unitRent'];
    $dayAmount = $_POST['dayAmount'];
    $picture = $_POST['picture'];
    if (isset($_POST['deleteImg'])) {
        $picture = '-';
    }


    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";
    $conn = mysqli_connect($hostname, $username, $password);
    echo '<center>';
    if (!$conn) die("ไม่สามารถติดต่อกับ mySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_client=utf8mb4");
    mysqli_query($conn,"set character_set_results=utf8mb4");
    $sql = "UPDATE book SET
        BookName = '$bookName',
        TypeID = $typeId,
        StatusID = $statusId,
        Publish = '$publish',
        UnitPrice = $unitPrice,
        UnitRent = $unitRent,
        DayAmount = $dayAmount,
        Picture = '$picture'
        WHERE BookID = $bookId";
    
    mysqli_query($conn, $sql) or die("update ลงตาราง book มีข้อผิดพลาดเกิดขึ้น".mysqli_error());
    echo '<br><br><h2>อัปเดตข้อมูลหนังสือรหัส '.$bookId.' เรียบร้อย</h2>';
    echo '<br><br><a href="bookList1.php">กลับหน้า bookList1.php</a>';
    mysqli_close($conn);
    echo '</center>';
?>