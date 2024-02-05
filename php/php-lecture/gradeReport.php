<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Report</title>
</head>
<body>
    <?php
        $maxStudent = 10;
        for ($i=0; $i < $maxStudent; $i++) { 
            $score[$i] = rand(50,100);
        }
        function reportGrade($array){
            $grade = "";
            for ($n=0; $n < count($array); $n++) { 
                if($array[$n] < 50) $grade = "F";
                elseif ($array[$n] < 55) $grade = "D";
                elseif ($array[$n] < 60) $grade = "D+";
                elseif ($array[$n] < 65) $grade = "C";
                elseif ($array[$n] < 70) $grade = "C+";
                elseif ($array[$n] < 75) $grade = "B";
                elseif ($array[$n] < 80) $grade = "B+";
                else $grade = "A";
                $gradeArray[] = $grade;
            }
            return $gradeArray;
        }
        $gradeArray = reportGrade($score);
        function average($data, $max){
            $total = 0;
            for ($i=0; $i < $max; $i++) { 
                $total += $data[$i];
            }
            return ($total / $max);
        }
        echo "
        <center>
            <span>Grade Report</span>
            <table border='1' align='center'>
                <th>Student No.</th><th>Score</th><th>Grade</th>";
        for ($i=0; $i < $maxStudent; $i++) { 
            echo "<tr align='center'><td>". ($i+1) . "</td><td>"
            . $score[$i] . "</td><td>" . $gradeArray[$i] . "</td></tr>";
        }
        echo "
                <tr><td colspan='3' align='center'> Average Score: ".
                average($score,$maxStudent) . "</td></tr>";
        echo "
            </table>
        </center>";
    ?>
    
</body>
</html>