
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablestyle.css">
    <title>Square Area</title>
</head>
<body>
    <?php
        $width = 5;
        $length = 10;
        $result = $width * $length;

        echo "<table>
            <th colspan='2'>คำนวณพื้นที่สี่เหลี่ยม</th>
            <tr id='title'>
                <th>ตัวแปร</th>
                <th>ค่า</th>
            </tr>
            <tr>
                <td align='left'>ความกว้าง</td>
                <td align='center'>$width</td>
            </tr>
            <tr>
                <td align='left'>ความยาว</td>
                <td align='center'>$length</td>
            </tr>
            <tr>
                <td align='left'>พื้นที่สี่เหลี่ยม: $width * $length</td>
                <td align='center'>$result</td>
            </tr>
            <tr>
                <td colspan='2' align='center'><a href='menuArea.php'>กลับ</a></td>
            </tr>
        </table>";
    ?>


</body>
</html>