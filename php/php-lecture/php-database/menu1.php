<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu1.php</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Mitr", sans-serif;
        }
        body{
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background: #f5f6f7
        }
        .container{
            text-align: center;
            padding: 20px 1px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 1px 1px 5px rgba(0,0,0,.5)
        }
        h3{
            font-size: 30px;
            font-weight: 500;
            margin-bottom: 20px;
        }
        th{
            font-size: 18px;
            font-weight: 500;
        }
        ul{
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 3px
        }
        li{
            background: #f5f6f7;
            font-size: 18px;
            padding: 3px 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>เมนู</h3>
        <ul>
            <li><a href="bookList1.php">รายการหนังสือทั้งหมด</a></li>
            <li><a href="bookData.php">ข้อมูลอย่างละเอียดของหนังสือทั้งหมด</a></li>
            <li><a href="bookDayAmount.php">ข้อมูลจำนวนวันที่ให้เช่า</a></li>
        </ul>
    </div>

</body>
</html>