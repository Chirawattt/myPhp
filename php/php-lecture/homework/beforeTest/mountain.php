<html>
<head>
    <link rel="stylesheet" href="../calAreastyle.css">
    <title>Mountain-row</title>

    <style>
        input#inputNum1{
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
    <form method='post' action='mountainDisplay.php'>
        <table align='center'>
            <tr>
                <td colspan='2' align='center'>
                    <h2>ใส่จำนวนแถวที่ต้องการ</h2>
                </td>
            </tr>
            <tr>
                <td class='row-number'><input id='inputNum1' type='number' name='number1' 
                size='15' placeholder='จำนวนแถวที่ต้องการ' required autofocus></td>
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