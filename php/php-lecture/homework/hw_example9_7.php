<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework Lab9-7</title>
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
            background: #f3f3f3;
        }
        table{
            width: 650px;
            border: 1px solid rgba(0,0,0,0.2);
            background-color: #fff;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 10px 10px 0px #000;
        }
        th{
            padding: 10px 5px;
        } 
    </style>
</head>
<body>
    <?php
        $maxRow = 10;
        $maxCol = 5;
        $studentScore = Array();
        for ($i=0; $i < $maxRow; $i++) { // random score into array
            $randomNum = 0; 
            for ($j=0; $j < $maxCol; $j++) { 
                if ($j == 0) $randomNum = rand(4,10);
                elseif ($j == 1) $randomNum = rand(8,20);
                elseif ($j == 2) $randomNum = rand(13,35); 
                elseif ($j == 3) $randomNum = rand(13,35);
                else $randomNum = 0;
                $studentScore[$i][$j] = $randomNum;
            }
        }
        for ($i=0; $i < $maxRow; $i++) { // summation score of each person get
            for ($j=0; $j < $maxCol - 1; $j++) $studentScore[$i][$maxCol-1] += $studentScore[$i][$j];
        }
        // Make get Grade function
        function getGrade($score){
            $grade = "";
            if($score < 50) $grade = "F";
            elseif ($score < 55) $grade = "D";
            elseif ($score < 60) $grade = "D+";
            elseif ($score < 65) $grade = "C";
            elseif ($score < 70) $grade = "C+";
            elseif ($score < 75) $grade = "B";
            elseif ($score < 80) $grade = "B+";
            else $grade = "A";
            return $grade;
        }
        for ($i=0; $i < $maxRow; $i++) { 
            $studentScore[$i][$maxCol] = getGrade($studentScore[$i][$maxCol-1]);
        }

    ?>

    <table border='1' align='center'>
        <tr>
            <th>Student No.</th>
            <th>Homework</th>
            <th>Assignment</th>
            <th>Midterm</th>
            <th>Final</th>
            <th>Summation</th>
            <th>Grade</th>
        </tr>
        <tr>
            <?php 
                for ($i=0; $i < $maxRow; $i++) { 
                    echo "<tr align='center'>";
                    for ($j=0; $j < $maxCol+1; $j++) { 
                        if ($j == 0) {
                            echo "<td>". $i+1 . ".</td>".
                            "<td>" . $studentScore[$i][$j] . "</td>";
                        }
                        else echo "<td>" . $studentScore[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tr>
    </table>
</body>
</html>