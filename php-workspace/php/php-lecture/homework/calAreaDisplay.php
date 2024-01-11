<html>
<head>
    <link rel="stylesheet" href="calAreaStyle.css">
    <title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title>
    <style>
        table{
            width: 500px;
        }
        h2,th{ font-weight: 500; }
        th { font-size: 18px; }
        th.left{
            width: 50%;
        }
        p{ 
            font-size: 16px;
            font-weight: 500px;
        }
        .right.data{
            text-align: center;
            background: #f1f1f1;
            border-radius: 5px;
            padding: 5px 0px;
        }
        .btn{ text-align: center; }
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
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operator = $_POST['operator'];
        $result = 0;
        $titleHead = "";
        $titleNumber1 = "";
        $titleNumber2 = "";

        if ($operator == "circle") {
            $result = pi() * ($number1 * $number1);
            $titleHead = "คำนวณพื้นที่วงกลม";
            $titleNumber1 = "รัศมี";
            $titleNumber2 = "พาย";
            $number2 = number_format(pi(),3);
            $result = number_format($result, 3);
        }
        else if ($operator == "triangle") {
            $result = 1/2 * ($number1 * $number2);
            $titleHead = "คำนวณพื้นที่สามเหลี่ยม";
            $titleNumber1 = "ฐาน";
            $titleNumber2 = "สูง";
        }
        else if ($operator == "square") {
            $result = $number1 * $number2;
            $titleHead = "คำนวณพื้นที่สี่เหลี่ยม";
            $titleNumber1 = "กว้าง";
            $titleNumber2 = "ยาว";
        }
        
        echo "
            <table align='cener'>
                <tr align='center'>
                    <td colspan='2'><h2>$titleHead</h2></td>
                </tr>
                <tr>
                    <th class='left'>ตัวแปร</th>
                    <th class='right'>ค่า</th>
                </tr>
                <tr>
                    <td><p>$titleNumber1</p></td>
                    <td><p class='right data'>$number1</p></td>
                </tr>
                <tr>
                    <td><p>Operator :</p></td>
                    <td><p class='right data' id='operator'>$operator</p></td>
                </tr>
                <tr id='row-number2'>
                    <td><p>$titleNumber2</p></td>
                    <td><p class='right data'>$number2</p></td>
                </tr>
                <tr>
                    <td><p>Result : </p></td>
                    <td><p class='right data'>$result</p></td>
                </tr>
                <tr>
                    <td colspan='2' class='btn'><a href='calArea.php'><button>Back</button></a></td>
                </tr>
            </table>
        "
    ?>
</body>
</html>