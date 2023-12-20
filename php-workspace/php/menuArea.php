<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablestyle.css">
    <title>Menu</title>
</head>
<body>
    <?php
        echo "
            <table>
                <th colspan='2'>เมนูการคำนวณ</th>
                <tr>
                    <td align='center'>1</td>
                    <td align='left'><a href='squareArea.php'>พื้นที่สี่เหลี่ยม</a></td>
                </tr>
                <tr>
                    <td align='center'>2</td>
                    <td align='left'><a href='circleArea.php'>พื้นที่วงกลม</a></td>
                </tr>
                <tr>
                    <td align='center'>3</td>
                    <td align='left'><a href='triangleArea.php'>พื้นที่สามเหลี่ยม</a></td>
                </tr>
                <tr>
                    <td align='center'>4</td>
                    <td align='left'><a href='trapezoidArea.php'>พื้นที่สี่เหลี่ยมคางหมู</a></td>
                </tr>
                <tr>
                    <td colspan='2' align='center'><a href='homepage.php'>กลับไปหน้าหลัก</a></td>
                </tr>
            </table>";
    ?>
    
</body>
</html>