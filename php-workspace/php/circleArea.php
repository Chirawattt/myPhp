<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablestyle.css">
    <title>Circle Area</title>

    <style>
        table{ width: 600px; }
    </style>
</head>
<body>
    <?php
        $PI = pi();
        $r = 6;
        $result = $PI*($r*$r);

        echo "<table>
            <th colspan='2'>คำนวณพื้นที่วงกลม</th>
            <tr id='title'>
                <th>ตัวแปร</th>
                <th>ค่า</th>
            </tr>
            <tr>
                <td align='left'>รัศมี</td>
                <td align='center'>$r</td>
            </tr>
            <tr>
                <td align='left'>พาย</td>
                <td align='center'>$PI</td>
            </tr>
            <tr>
                <td align='left'>พื้นที่วงกลม: π*(r*r) = $PI*($r*$r) </td>
                <td align='center'>$result</td>
            </tr>
            <tr>
                <td colspan='2' align='center'><a href='menuArea.php'>กลับ</a></td>
            </tr>
        </table>";
    ?>


</body>
</html>