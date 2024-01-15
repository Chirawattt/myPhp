<html>
<head>
    <link rel="stylesheet" href="lab5-9style.css">
    <title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณ</title>
</head>
<body>
    <form method="get" action="Lab5-9cal.php">
        <table  align="center">
            <tr>
                <td colspan="2" align="center">
                    <h2>ทดสอบการใช้ Arithmatic Operator</h2>
                </td>
            </tr>
            <tr>
                <td><p>Enter Number 1 : </p></td>
                <td><input type="number" name="number1" size="15" placeholder="Number 1" required autofocus></td>
            </tr>
            <tr>
                <td><p>Enter Number 2 : </p></td>
                <td><input type="number" name="number2" size="15" placeholder="Number 2"></td>
            </tr>
            <tr>
                <td><p>Operator : </p></td>
                <td align="center">
                    <div class="choice">
                        <label for="+"><span><input type="radio" name="operator" value="+" id="+"> +</span></label>
                        <label for="-"><span><input type="radio" name="operator" value="-" id="-"> -</span></label>
                        <label for="*"><span><input type="radio" name="operator" value="*" id="*"> *</span></label>
                        <label for="/"><span><input type="radio" name="operator" value="/" id="/"> /</span></label>
                        <label for="%"><span><input type="radio" name="operator" value="%" id="%"> %</span></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="reset" value="Clear">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>