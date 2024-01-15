<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงการใช้งาน while</title>

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
        // while code
        // $sumOfOdd = 0;
        // $number = 1;
        // while ($number < 10) {
        //     if ($number % 2 == 0) echo "$number is even not add.<br>"; 
        //     else {
        //         $sumOfOdd += $number;
        //         echo "$number is odd number add to sum | now sum is: $sumOfOdd<br>";
        //     }
        //     $number ++;
        // }

        // do-while code
        $sumOfOdd = 0;
        $number = 1;
        do {
            if ($number % 2 == 0) echo "$number is even not add.<br>";
            else {
                $sumOfOdd += $number;
                echo "$number is odd number add to sum | now sum is: $sumOfOdd<br>";
            }
            $number++;
        }while ($number < 16);
    ?>
    
</body>
</html>