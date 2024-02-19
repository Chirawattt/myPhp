<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookList1.php</title>
    <style>
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
    </style>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "bookstore";
        $conn = mysqli_connect($hostname,$username,$password);
        if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
        mysqli_select_db($conn,$dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookstore ได้");
        mysqli_query($conn, "set character_set_connection=utf8mb4");
        mysqli_query($conn, "set character_set_client=utf8mb4");
        mysqli_query($conn, "set character_set_results=utf8mb4");
        $sql = "select * from book order by bookID";
        $result = mysqli_query($conn, $sql);
        echo "<center>
                <h3>รายชื่อหนังสือ</h3>
                <br>
                <table width='500' border='0'>
                <tr>
                    <td align='center'><a href='bookInsert1.php'>เพิ่มรายการหนังสือ</a></td>
                </tr>
                </table>
                <table with='500' border='1'>
                <tr bgcolor=''>
                <th width='50'>ลำดับ</th>
                <th width='100'>รหัสหนังสือ</th>
                <th width='200'>ชื่อหนังสือ</th>
                <th width='80'>แก้ไข</th>
                <th width='80'>ลบ</th>
            ";
        $row = 1;
        while ($rs = mysqli_fetch_array($result)){
            echo "<tr align='center' bgcolor=''>
                    <td>$row</td>
                    <td><a href='bookDetail1.php?bookID=$rs[0]'>$rs[0]</a></td>
                    <td align='center'>$rs[1]</td>
                    <td><a href='bookUpdate1.php?bookID=$rs[0]'>[แก้ไข]</a></td>";
            echo '<td><a href="bookDelete1.php?bookID='.$rs[0].'" onclick="return confirm(\' ยืนยันการลบข้อมูลหนังสือ '.$rs[1].'\')">[ลบ]</a></td>'
                .'</tr>';
            $row++;
        }
        echo '</table>';
        mysqli_close($conn);
        echo "<br><br><a href='menu1.php'>Back to menu</a>
            </center>";
    ?>
</body>
</html>