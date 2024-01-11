<html>
<head>
    <link rel="stylesheet" href="calAreastyle.css">
    <title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณ</title>
</head>
<body>
    <form method='post' action='calAreaDisplay.php'>
        <table align='center'>
            <tr>
                <td colspan='2' align='center'>
                    <h2>คำนวณพื้นที่</h2>
                </td>
            </tr>
            <tr>
                <td><p id="title-num1"></p></td>
                <td><input id='inputNum1' type='number' name='number1' size='15' placeholder='Number 1' required autofocus></td>
            </tr>
            <tr id="row-number2">
                <td><p id="title-num2"></p></td>
                <td><input id='inputNum2' type='number' name='number2' size='15' placeholder='Number 2'></td>
            </tr>
            <tr>
                <td><p> Area operator : </p></td>
                <td align='center'>
                    <div class='choice'>
                        <label for='circle'>
                            <span><input type='radio' name='operator' value='circle' id='circle' onclick="circleSet()" checked> วงกลม</span>
                        </label>
                        <label for='triangle'>
                            <span><input type='radio' name='operator' value='triangle' id='triangle' onclick="triangleSet()"> สามเหลี่ยม</span>
                        </label>
                        <label for='square'>
                            <span><input type='radio' name='operator' value='square' id='square' onclick="squareSet()"> สี่เหลี่ยม</span>
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan='2' align='center'>
                    <input type='reset' value='Clear'>
                    <input type='submit' value='Submit'>
                </td>
            </tr>
        </table>
    </form>
    
    <script src="calArea.js"></script>
</body>
</html>