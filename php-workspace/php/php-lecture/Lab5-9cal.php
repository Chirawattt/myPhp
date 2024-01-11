<html>
<head>
    <link rel="stylesheet" href="lab5-9style.css">
    <title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title>
    <style>
        table{
            width: 500px;
        }
        p{ font-size: 15px; }
        .left{
            width: 65%;
        }
        .right.data{
            text-align: center;
            background: #f1f1f1;
            border-radius: 5px;
        }
        .btn{
            text-align: center;
        }
        .btn a button{
            padding: 2px 10px;
            font-size: 15px;
            margin: 5px 0px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <?php
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $operator = $_GET['operator'];
        $result = 0;

        if ($operator == "+") $result = $number1 + $number2;
        else if ($operator == "-") $result = $number1 - $number2;
        else if ($operator == "*") $result = $number1 * $number2;
        else if ($operator == "/") $result = $number1 / $number2;
        else if ($operator == "%") $result = $number1 % $number2;

        echo "
            <table align='cener'>
                <tr align='center'>
                    <td colspan='2'><h2>ข้อมูลผู้ใช้ใส่มา</h2></td>
                </tr>
                <tr>
                    <th class='left'>ตัวแปร</th>
                    <th class='right'>ค่า</th>
                </tr>
                <tr>
                    <td><p>Number 1 :</p></td>
                    <td><p class='right data'>$number1</p></td>
                </tr>
                <tr>
                    <td><p>Operator :</p></td>
                    <td><p class='right data'>$operator</p></td>
                </tr>
                <tr>
                    <td><p>Number 2 :</p></td>
                    <td><p class='right data'>$number2</p></td>
                </tr>
                <tr>
                    <td><p>Result : </p></td>
                    <td><p class='right data'>$result</p></td>
                </tr>
                <tr>
                    <td colspan='2' class='btn'><a href='lab5-9.php'><button>Back</button></a></td>
                </tr>
            </table>
        "
    ?>
</body>
</html>