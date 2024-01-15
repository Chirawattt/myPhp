<html>
<head>
    <link rel="stylesheet" href="../calAreaStyle.css">
    <title>Tax-Display</title>
    <style>
        .title{
            position: relative;
        }
        .title:before, .btn:before{
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 100%;
            height: 3px;
            background: #dbdbdb;
            transform: translateX(-50%);
            border-radius: 5px;
        }
        input[type="text"]{
            padding: 5px 10px;
            border: none;
            font-size: 16px;
            background: #f1f1f1;
            border-radius: 5px;
            transition: all .3s ease;
            text-align: center;
            width: 300px;
        }
        .btn{ 
            text-align: center;
            padding-top: 10px;
            position: relative;
        }
        .btn:before{
            top: 12;
        }
        .btn a button{
            width: 100%;
            height: 100%;
            padding: 5px 20px;
            font-size: 15px;
            margin: 5px 0px;
            cursor: pointer;
            outline: none;
            border: none;
            background: #000;
            color: #fff;
            border-radius: 0px 0px 5px 5px;
            transition: all .3s ease;
        }
        .btn a button:hover{
            background: #dddddd;
            color: #000;
            transition: all .3s ease;
        }
    </style>
</head>
<body>
    <?php
        $salary = $_POST["salary"];
        $discount = $_POST["discount"];
        $expenses = $_POST["expenses"];
        $salaryYear = $salary * 12;
        $net = $salaryYear - $discount - $expenses;
        $taxPer = 0;

        if ($net <= 150000) $taxPer = 0;
        elseif ($net <= 300000) $taxPer = 0.05;
        elseif ($net <= 500000) $taxPer = 0.1;
        elseif ($net <= 750000) $taxPer = 0.15;
        elseif ($net <= 1000000) $taxPer = 0.20;
        elseif ($net <= 2000000) $taxPer = 0.25;
        elseif ($net <= 5000000) $taxPer = 0.30;
        elseif ($net > 5000000) $taxPer = 0.35;
        
        if ($net <= 150000) {
            $taxPer = "ได้รับยกเว้นภาษี";
            $tax = 0;
        }else { $tax = $net * $taxPer; }

        $taxPer *= 100;
        $salaryYear = number_format($salaryYear);

        echo "
            <table align='cener' width='800px'>
                <tr align='center'>
                    <td class='title' colspan='2'><h2>ผลลัพธ์โปรแกรมคำนวณภาษี</h2></td>
                </tr>
                <tr align='center'>
                    <td>
                        <legend>เงินเดือน/ปี</legend>
                        <input type='text' size='15' value='$salaryYear บาท' disabled>
                    </td>
                </tr>
                <tr align='center'>
                    <td>
                        <legend>ค่าลดหย่อน/ปี</legend>
                        <input type='text' size='15' value='$discount บาท' disabled>
                    </td>
                </tr align='center'>
                <tr align='center'>
                    <td>
                        <legend>ค่าใช้จ่าย/ปี</legend>
                        <input type='text' size='15' value='$expenses บาท' disabled>
                    </td>
                </tr>
                <tr align='center'>
                    <td>
                        <legend>เงินได้สุทธิ</legend>
                        <input type='text' size='15' value='$net บาท' disabled>
                    </td>
                </tr>
                <tr align='center'>
                    <td>
                        <legend>อัตราภาษี</legend>
                        <input type='text' size='15' value='$taxPer%' disabled>
                    </td>
                </tr>
                <tr align='center'>
                    <td>
                        <legend>ภาษีที่คุณต้องจ่าย</legend>
                        <input type='text' size='15' value='$tax บาท' disabled>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' class='btn'><a href='tax.php'><button>Back</button></a></td>
                </tr>
            </table>
        "
    ?>
</body>
</html>