<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";
    $conn = mysqli_connect($hostname,$username,$password);
    if (!$conn) die("ไม่สามารถติดต่อกับ mySQL ได้");
    mysqli_select_db($conn, $dbname) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");

    $sql = "SELECT bookID, BookName, TypeName, StatusName, Publish, UnitPrice, UnitRent, 
    DayAmount, Picture, Publish FROM book INNER JOIN typebook ON book.TypeID = typebook.TypeID
    INNER JOIN statusbook ON book.StatusID = statusbook.StatusID WHERE DayAmount >= 5 ORDER BY BookID";

    $dbQuery = mysqli_query($conn, $sql);
    if (!$dbQuery) die("ไม่สามารถดึงข้อมูลหนังสือจาก table book ได้".mysqli_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookDetail1.php</title>
    <style>
        /* Google Fonts - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Mitr", sans-serif;
        }
        body{
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        h3{
            font-size: 30px;
            font-weight: 500;
        }
        th{
            font-size: 18px;
            font-weight: 500;
        }
        .data{
            padding: 0px 5px;
        }
</style>
</head>
<body>
    <?php
        echo "
        <h3>หนังสือที่มีจำนวนวันให้เช่าตั้งแต่ 5 วัน</h3>
        <br>
        <table border='1'>
        <tr bgcolor=''>
        <th class='data'>ลำดับ</th>
        <th class='data'>รหัสหนังสือ</th>
        <th class='data'>ชื่อหนังสือ</th>
        <th class='data'>ประเภทหนังสือ</th>
        <th class='data'>สถานะหนังสือ</th>
        <th class='data'>สำนักพิมพ์</th>
        <th class='data'>ราคา(บาท)/หน่วย</th>
        <th class='data'>ราคาให้เช่า(บาท)/หน่วย</th>
        <th class='data'>จำนวนวันให้เช่า</th>
        <th class='data'>ชื่อไฟล์รูปภาพ</th>
        ";
        $row = 1;
        while ($rs = mysqli_fetch_object($dbQuery)){
            echo "<tr align='center' bgcolor=''>
                    <td class='data'>$row</td>
                    <td class='data'>$rs->bookID</td>
                    <td class='data'>$rs->BookName</td>
                    <td class='data'>$rs->TypeName</td>
                    <td class='data'>$rs->StatusName</td>
                    <td class='data'>$rs->Publish</td>
                    <td class='data'>$rs->UnitPrice</td>
                    <td class='data'>$rs->UnitRent</td>
                    <td class='data'>$rs->DayAmount</td>
                    <td class='data'>$rs->Picture</td>";
            $row++;
        }
        echo '</table>';
        mysqli_close($conn);
        echo "<br><br><a href='menu1.php'>Back to menu</a>";
    ?>
</body>
</html>