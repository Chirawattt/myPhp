<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>

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
        function sayHello(){ // no argument function
            echo "Hello World!<br>";
        }

        function add($n1, $n2) { // argument function
            $result = $n1 + $n2;
            echo "<br>Result add: $result";
        }
        
        function subtract($n1, $n2=50) { // default value argument function
            $result = $n1 - $n2;
            echo "<br>Result substract: $result";
        }

        function multiply($n1, $n2) { // return value function
            $result = $n1*$n2;
            return $result;
        } 

        function divide($n1, $n2, &$result) {
            $result = $n1 / $n2;
        }

        sayHello();
        $num1 = 10;
        $num2 = 20;
        $resultDivide = 0;
        add($num1,$num2);
        subtract($num1);
        $resultMultiply = multiply($num1,$num2);
        echo "<br>Result multiply: $resultMultiply";
        divide($num1,$num2,$resultDivide);
        echo "<br>Result divide: $resultDivide";
        
    ?>
    
</body>
</html>