<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablestyle.css">
    <title>Trapezoid Area</title>

    <style>
        table{ width: 600px; }
    </style>
</head>
<body>
    <?php
        $height = 6;
        $base1 = 3;
        $base2 = 4;
        $result = (1/2)*$height*($base1+$base2);

        echo "<table>
            <th colspan='2'>คำนวณพื้นที่สี่เหลี่ยมคางหมู</th>
            <tr id='title'>
                <th>ตัวแปร</th>
                <th>ค่า</th>
            </tr>
            <tr>
                <td align='left'>ค่าความสูง</td>
                <td align='center'>$height</td>
            </tr>
            <tr>
                <td align='left'>ค่าความยาวเส้นคู่ขนาน 1</td>
                <td align='center'>$base1</td>
            </tr>
            <tr>
                <td align='left'>ค่าความยาวเส้นคู่ขนาน 2</td>
                <td align='center'>$base2</td>
            </tr>
            <tr>
                <td align='left'>พื้นที่สี่เหลี่ยมคางหมู: 1/2*height*(base1+base2) = 1/2*$height*($base1+$base2)</td>
                <td align='center'>$result</td>
            </tr>
            <tr>
                <td colspan='2' align='center'><a href='menuArea.php'>กลับ</a></td>
            </tr>
        </table>";
    ?>


</body>
</html>