<html>
<head>
    <title>Sum-Of-Number-Display</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Mitr', sans-serif;
        }
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #8EC5FC;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
        }
        table{
            width: 500px;
            border: 1px solid rgba(255,255,255,0.6);
            background: rgba(255,255,255,0.5);
            border-radius: 5px;
            padding: 15px 60px;
        }
        h2{
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }
        .input{
            position: relative;
            padding: 15px 0;
        }
        input[type='number']{
            width: 30%;
            padding: 8px 0px;
            outline: none;
            border-radius: 5px;
            background: none;
            box-shadow: 2px 2px 10px rgba(0,0,0,.15);
            font-size: 15px;
            text-align: center;
        }
        .input legend{
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .btn-wrapper{
            width: 100%;
            text-align: center;
        }
        .btn-wrapper input{
            padding: 5px 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin: 0px 5px;
            font-weight: 500;
            font-size: 16px;
        }
        input[type="submit"]{
            background: #E5EFFF;
            color: #367BF5;
            transition: all .3s ease;
        }
        input[type="submit"]:hover{
            color: #E5EFFF;
            background: #367BF5;
            transition: all .3s ease;
        }
        
    </style>
</head>
<body>
    <?php
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        $result = 0;
        $titleNum = "($number1 + ... + $number2)";
        if ($number1 < $number2){
            for ($i=$number1; $i <= $number2 ; $i++) 
                $result += $i;
        }else {
            for ($i=$number2; $i <= $number1 ; $i++) 
                $result += $i;
        }
        


        echo "<table>
            <tr>
                <td><h2>ผลลัพธ์</h2></td>
            </tr>
            <tr>
                <td class='input' align='center'>
                    <legend>$titleNum</legend>
                    <input type='number' placeholder='$result' disabled>
                </td>
            </tr>
            <tr>
                <td>
                    <div class='btn-wrapper'>
                        <a href='sumOfNum.php'><input type='submit' value='back'></a>
                    </div>
                </td>
            </tr>
        </table>"

    ?>
    
</body>
</html>