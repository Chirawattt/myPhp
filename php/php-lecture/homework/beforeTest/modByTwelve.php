<html>
<head>
    <link rel="stylesheet" href="../calAreastyle.css">
    <title>Maximum number which twelve can devied by</title>

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
    <form method='post' action='modByTwelveDisplay.php'>
        <table align='center'>
            <tr>
                <td colspan='2' align='center'>
                    <h2>ตัวเลขที่มากที่สุดที่ 12 หารลงตัว</h2>
                </td>
            </tr>
            <tr>
                <td class='row-number'><input type='number' name='number-start' 
                size='15' placeholder='ตัวเลขเริ่มต้น' required autofocus></td>
            </tr>
            <tr>
                <td class='row-number'><input type='number' name='number-end' 
                size='15' placeholder='ตัวเลขสิ้นสุด' required></td>
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