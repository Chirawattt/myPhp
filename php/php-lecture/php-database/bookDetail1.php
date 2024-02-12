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

    $bookID = $_REQUEST['bookID'];
    $sql = "select * from book where bookID=$bookID";
    $dbQuery = mysqli_query($conn, $sql);
    if (!$dbQuery) die("ไม่สามารถดึงข้อมูลหนังสือจาก table book ได้".mysqli_error());

    function getTypeName($typeID){
        global $conn;
        $sql = "select TypeName from typebook where TypeID=$typeID";
        $dbQuery = mysqli_query($conn, $sql);
        if(!$dbQuery) die("(functionDB:getTypeSelect) select TypeName มีข้อผิดพลาด".mysqli_error());
        return mysqli_fetch_object($dbQuery)->TypeName;
    }

    function getStatusName($statusID){
        global $conn;
        $sql = "select StatusName from statusbook where StatusID=$statusID";
        $dbQuery = mysqli_query($conn, $sql);
        if(!$dbQuery) die("(functionDB:getStatusName) select StatusName มีข้อผิดพลาด".mysqli_error());
        return mysqli_fetch_object($dbQuery)->StatusName;
    }
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
        .no-border {
            border: none;
        }
        /* Style for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px; /* Adjust margin as needed */
        }
        /* Style for the table cells */
        td {
            padding: 8px;
            border: 1px solid #ddd; /* Border style */
        }
        /* Style for the table header */
        th {
            padding: 8px;
            border: 1px solid #ddd; /* Border style */
            background-color: #f2f2f2; /* Header background color */
            font-size: 20px;
        }
        /* Style for the image */
        .book-image {
            max-width: 200px; /* Adjust image size as needed */
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

</style>
</head>
<body>
    <table border='1'>
        <tr><th colspan='2' class='no-border'>แสดงรายละเอียดหนังสือ</th></tr>
        <?php
            while ($rs=mysqli_fetch_object($dbQuery)) {
                echo "
                    <tr>
                        <td align='right' width='30%' class='no-border left-column'>รหัสหนังสือ :</td>
                        <td align='center' width='50%'>$rs->BookID</td>
                    </tr>
                    <tr>
                        <td align='right' class='no-border'>ชื่อหนังสือ :</td>
                        <td align='center'>$rs->BookName</td>
                    </tr>
                    <tr>
                        <td align='right' class='no-border'>ประเภทหนังสือ :</td>
                        <td align='center'>". getTypeName($rs->TypeID) ."</td>
                    </tr>
                    <tr>
                        <td align='right' class='no-border'>สถานะหนังสือ :</td>
                        <td align='center'>". getStatusName($rs->StatusID) ."</td>
                    </tr>
                    <tr>
                        <td align='right' class='no-border'>สำนักพิมพ์ :</td>
                        <td align='center'>$rs->Publish</td>
                    </tr>
                    <tr>
                        <td align='right' class='no-border'>ราคาซื้อ :</td>
                        <td align='center'>$rs->UnitPrice</td>
                    </tr>
                    <tr>
                        <td align='right' class='no-border'>ราคาเช่า :</td>
                        <td align='center'>$rs->UnitRent</td>
                    </tr>
                    <tr>
                        <td align='right' class='no-border'>รูปภาพ :</td>";
                        if ($rs->Picture == '-') echo "<td align='center'>ไม่มีรูปภาพ</td>";
                        else {echo "<td align='center'><img class='book-image' src='pictures/$rs->Picture'</td>";} 
                    echo "</tr>
                    <tr>
                        <td align='right' class='no-border'>จำนวนวันที่ยืมได้ :</td>
                        <td align='center'>$rs->DayAmount</td>
                    </tr>
                    <tr>
                        <td align='right' class='no-border'>วันที่จัดเก็บหนังสือ :</td>
                        <td align='center'>$rs->BookDate</td>
                    </tr>";
            }
        ?>
    </table>
    <?php mysqli_close($conn); ?>
</body>
</html>