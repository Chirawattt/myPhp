<html>
<head>
    <link rel="stylesheet" href="../calAreastyle.css">
    <title>Tax</title>

    <style>
        input[type='number']{
            text-align: center;
            width: 400px;
        }
        .row-number{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method='post' action='taxDisplay.php'>
        <table align='center'>
            <tr>
                <td colspan='2' align='center'>
                    <h2>โปรแกรมคำนวณภาษีที่ต้องจ่าย</h2>
                </td>
            </tr>
            <tr>
                <td class='row-number'><input type='number' name='salary' 
                size='15' placeholder='เงินเดือน' required autofocus></td>
            </tr>
            <tr>
                <td class='row-number'><input type='number' name='discount' 
                size='15' placeholder='ค่าลดหย่อน/ปี' required></td>
            </tr>
            <tr>
                <td class='row-number'><input type='number' name='expenses' 
                size='15' placeholder='ค่าใช้จ่าย/ปี' required></td>
            </tr>
            <tr>
                <td colspan='2' align='center'>
                    <input type='reset' value='Clear'>
                    <input type='submit' value='Submit'>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>