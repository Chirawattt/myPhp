<html>
<head>
    <link rel="stylesheet" href="../calAreaStyle.css">
    <title>Mountain-Display</title>
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
        }
        .btn a button:hover{
            background: #dddddd;
            color: #000;
        }
        .center{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            padding-top: 5px;
        }
        p.green { 
            color: green;
            display: inline; 
        }
    </style>
</head>
<body>
    <?php
        $rowNumber = $_POST['number1'];
        $resultDisplay = "<pre>";
        
        for ($i=1; $i <= $rowNumber ; $i++) { 
            if ($i > 9) $resultDisplay .= "Row: $i    <p class='green'>";
            else $resultDisplay .= "Row: $i     <p class='green'>";

            
            for ($a=0; $a < $i ; $a++) { 
                $resultDisplay .= "*";
            }
            $resultDisplay .= "</p><br>";
        }
        $resultDisplay .= "</pre>";

        echo "
            <table align='cener'>
                <tr align='center'>
                    <td class='title' colspan='2'><h2>ผลลัพธ์ของการรันโปรแกรม</h2></td>
                </tr>
                <tr class='resultDisplay'>
                    <td class='center' colspan='2'>$resultDisplay</td>
                </tr>
                <tr>
                    <td colspan='2' class='btn'><a href='mountain.php'><button>Back</button></a></td>
                </tr>
            </table>
        "
    ?>
</body>
</html>