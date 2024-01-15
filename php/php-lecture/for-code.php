<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงการใช้งาน for</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            display: grid;
            place-items: center;
            width: 100%;
            height: 100vh;
        }

    </style>
</head>
<body>
    <?php
        $sumOfEven = 0;
        $sumOfOdd = 0;
        for ($i=0; $i < 10; $i++) { 
            if ($i % 2 == 0) {
                $sumOfEven += $i;
                echo "$i is even number | add to sum of even<br>";
            }else {
                $sumOfOdd += $i;
                echo "$i is odd number | add to sum of odd<br>";
            }
        }
        echo "<br>Sum of Even number is: $sumOfEven<br>";
        echo "Sum of Odd number is: $sumOfOdd<br>";
    ?>
    
</body>
</html>