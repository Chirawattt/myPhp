<?php
        function getTypeSelect($typeID){
            global $conn;
            $sql = "select * from typebook order by TypeID";
            $dbQuery = mysqli_query($conn, $sql);
            if(!$dbQuery) die("(functionDB:getTypeSelect) select typebook มีข้อผิดพลาด".mysqli_error());
            echo "<option value=''>เลือกประเภทหนังสือ</option>";
            while($result=mysqli_fetch_object($dbQuery)){
                if ($typeID === $result->TypeID) echo "<option value='$result->TypeID' selected>$result->TypeName</option>";
                else echo "<option value='$result->TypeID'>$result->TypeName</option>";
                
            }
        }
        function getStatusSelect($statusID){
            global $conn;
            $sql = "select * from statusbook order by StatusID";
            $dbQuery = mysqli_query($conn, $sql);
            if(!$dbQuery) die("(functionDB:getStatusSelect) select statusbook มีข้อผิดพลาด".mysqli_error());
            echo '<option value="">เลือกสถานะ</option>';
            while($result=mysqli_fetch_object($dbQuery)) {
                if ($statusID === $result->StatusID) echo "<option value='$result->StatusID' selected>$result->StatusName</option>";
                else echo "<option value='$result->StatusID'>$result->StatusName</option>";
            }
        }

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
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookUpdate1.php</title>
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
        /* Style for the image */
        .book-image {
            max-width: 200px; /* Adjust image size as needed */
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        #deleteImg{
            cursor: pointer;
            margin-top: 6px;
        }
    </style>
</head>
<body>
        <center>
            <form enctype='multipart/form-data' name='save' method='post' action='bookUpdate2.php'>
                <br><br>
                <table width='700' border='1' bgcolor='#ffffff'>
                    <tr>
                        <th colspan="2" bgcolor="" height="21">แก้ไขข้อมูลหนังสือ</th>
                    </tr>
                    <?php 
                        while ($rs = mysqli_fetch_object($dbQuery)){ 
                            echo "
                            <tr>
                                <td align='right' width='200'>รหัสหนังสือ :</td>
                                <td width='400'><input type='text' name='bookID' size='10' maxlength='5' value='$rs->BookID'></td>
                            </tr>
                            <tr>
                                <td align='right' width='200'>ชื่อหนังสือ :</td>
                                <td width='400'><input type='text' name='bookName' size='50' maxlength='50' value='$rs->BookName'></td>
                            </tr>
                            <tr>
                                <td align='right' width='200'>ประเภทหนังสือ :</td>
                                <td width='400'><select name='typeID'>"; getTypeSelect($rs->TypeID); echo"</select></td>
                            </tr>
                            <tr>
                                <td align='right' width='200'>สถานะหนังสือ :</td>
                                <td width='400'><select name='statusID'>"; getStatusSelect($rs->StatusID);  echo"</select></td>
                            </tr>
                            <tr>
                                <td align='right' width='200'>สำนักพิมพ์ :</td>
                                <td width='400'><input type='text' name='publish' size='20' value='$rs->Publish'></td>
                            </tr>
                            <tr>
                                <td align='right' width='200'>ราคาที่ซื้อ :</td>
                                <td width='400'><input type='text' name='unitPrice' size='20' maxlength='25' value='$rs->UnitPrice'></td>
                            </tr>
                            <tr>
                                <td align='right' width='200'>ราคาที่เช่า :</td>
                                <td><input type='text' name='unitRent' size='20' maxlength='25' value='$rs->UnitRent'></td>
                            </tr>
                            <tr>
                                <td align='right' width='200'>จำนวนวันที่เช่า :</td>
                                <td><input type='text' name='dayAmount' maxlength='25' size='20' value='$rs->DayAmount'></td>
                            </tr>
                            <tr>
                                <td align='right'>รูปภาพ :</td>
                                <td><input type='text' name='picture' id='picture' maxlength='25' size='20' value='$rs->Picture'>
                            </tr>";
                        }
                    ?>
                    
                </table>
                <br><input type="submit" name="submit" value="บันทึกข้อมูล" style="cursor:pointer;">
                <input type="reset" name="reset" value="ยกเลิก" style="cursor:pointer;">
            </form>
            <button id='deleteImg' onclick='deleteImg()'>Delete Image</button>
            <br><br><a href="bookList1.php">กลับหน้า bookList1.php</a>;
        </center>
        <?php mysqli_close($conn); ?>

        <script>
            function deleteImg() {
                // Set the value of the input image name to '-'
                document.getElementById('picture').value = '-';
            }
        </script>
</body>
</html>
