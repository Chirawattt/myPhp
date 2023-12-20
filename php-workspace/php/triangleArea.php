<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablestyle.css">
    <title>Triangle Area</title>

    <style>
        table{ width: 500px; }
    </style>
</head>
<body>
    <?php
        $base = 3;
        $height = 6;
        $result = (1/2)*($base*$height);

        echo "<table>
            <th colspan='2'>คำนวณพื้นที่สามเหลี่ยม</th>
            <tr id='title'>
                <th>ตัวแปร</th>
                <th>ค่า</th>
            </tr>
            <tr>
                <td align='left'>ค่าความยาวฐาน</td>
                <td align='center'>$base</td>
            </tr>
            <tr>
                <td align='left'>ค่าความสูง</td>
                <td align='center'>$height</td>
            </tr>
            <tr>
                <td align='left'>พื้นที่สามเหลี่ยม: 1/2*base*height = 1/2*$base*$height</td>
                <td align='center'>$result</td>
            </tr>
            <tr>
                <td colspan='2' align='center'><a href='menuArea.php'>กลับ</a></td>
            </tr>
        </table>";
    ?>


</body>
</html>