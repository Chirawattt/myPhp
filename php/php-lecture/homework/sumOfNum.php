<html>
<head>
    <title>Sum-Of-Number</title>
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
            width: 550px;
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
            width: 100%;
            padding: 8px 15px;
            outline: none;
            border: 1px solid rgba(255,255,255,.8);
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
            background: #DCF7E3;
            color: #2FA84F;
            transition: all .3s ease;
        }
        input[type="submit"]:hover{
            color: #DCF7E3;
            background: #2FA84F;
            transition: all .3s ease;
        }
        input[type="reset"]{
            background: #FEE4E2;
            color: #EA3D2F;
            transition: all .3s ease;
        }
        input[type="reset"]:hover{
            color: #FEE4E2;
            background: #EA3D2F;
            transition: all .3s ease;
        }
    </style>
</head>
<body>
    <form action="sumOfNumDisplay.php" method="post">
        <table>
            <tr>
                <td><h2>โปรแกรมคำนวณหาผลรวมตัวเลข</h2></td>
            </tr>
            <tr>
                <td class='input'>
                    <legend>ตัวเลขเริ่มต้น</legend>
                    <input type="number" id='num1' name='num1' placeholder='ค่าเริ่มต้น' required autofocus>
                </td>
            </tr>
            <tr>
                <td class='input'>
                    <legend>ตัวเลขสุดท้าย</legend>
                    <input type="number" id='num2' name='num2' placeholder='ค่าสุดท้าย'>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="btn-wrapper">
                        <input type="reset" value='Clear'>
                        <input type="submit" value='Submit'>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>