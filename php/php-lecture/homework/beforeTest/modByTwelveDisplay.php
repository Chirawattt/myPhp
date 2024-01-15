<html>
<head>
    <link rel="stylesheet" href="../calAreaStyle.css">
    <title>Maximum number which 12 can devied by : Display</title>
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
        $startNumber = $_POST["number-start"];
        $endNumber = $_POST["number-end"];

        $fractionOfMaxNumber = $endNumber % 12;
        $resultNumber = $endNumber - $fractionOfMaxNumber;

        echo "
            <table align='cener' width='800px'>
                <tr align='center'>
                    <td class='title' colspan='2'><h2>ผลลัพธ์ตัวเลขที่มากที่สุดที่ 12 หารได้</h2></td>
                </tr>
                <tr align='center'>
                    <td>
                        <legend>ตัวเลขเริ่มต้น</legend>
                        <input type='text' size='15' value='$startNumber' disabled>
                    </td>
                </tr>
                <tr align='center'>
                    <td>
                        <legend>ตัวเลขสุดท้าย</legend>
                        <input type='text' size='15' value='$endNumber' disabled>
                    </td>
                </tr>
                <tr align='center'>
                    <td>
                        <legend>ผลลัพธ์</legend>
                        <input type='text' size='15' value='$resultNumber' disabled>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' class='btn'><a href='modByTwelve.php'><button>Back</button></a></td>
                </tr>
            </table>
        "
    ?>
</body>
</html>