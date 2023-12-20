
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Area</title>
</head>
<body>
    <?php
        $width = 5;
        $length = 10;
        $result = $width * $length;

        echo "<table border='1' align='center' width='500px'>
            <tr>
                <td colspan='2' align='center'><big?>คำนวณพื้นที่สี่เหลี่ยม</big></td>
            </tr>
            <tr>
                <td align='left'>ความกว้าง</td>
                <td align='right'>$width</td>
            </tr>
            <tr>
                <td align='left'>ความยาว</td>
                <td align='right'>$length</td>
            </tr>
            <tr>
                <td align='left'>พื้นที่สี่เหลี่ยม: $width * $length</td>
                <td align='right'>$result</td>
            </tr>
            <tr>
                <td colspan='2' align='center'><a href='homepage.php'>กลับ</a></td>
            </tr>
        </table>";
    ?>


</body>
</html>