<?php
    $title = "Chirawattt";
    $name = "Chirawat Yana";
    $nickName = "Bus";
    $phone = "095 038 5384";
    $address = "25/123 m.2 t.bansuan a.mheang chonburi Chonburi 20000";
    $email = "chirawat.yana@hotmail.com";
    $birthdate = "06/09/2544";
    $gender = "Male";
    $job = "Student";
    $skill1 = "UX/UI";
    $skill2 = "Coding";
    $skill3 = "HTML-CSS";
    $skill4 = "Javascript";
    $skill5 = "Web - Design";
    $skill6 = "Java python c++";
    $studentCode = 6506021611017;
    $universityName = "King Mongkut's University of Technology North Bangkok, Prachin Buri Campus (KMUTNB);";
    $faculty = "Industrial of Technology and Management;";
    $department = "Information Technology (IT);";
    $program = "Bachelor of Science Program in Information Technology;";
    $status = "Want to be a full-stack developer.";
?>

<html>
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/8fd7a24457.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phpstyle.css">
    <title>Homepage php</title>
</head>
<body id="homephp">
    <div class="header">
    <?php
        echo "<h1>{$title}</h1>";
    ?>
    </div>
    
    <div class="container">
        <div class="left-side">
            <div class="img-face">
                <?php 
                    echo "<p>$studentCode</p>"; 
                ?>
            </div>
            <div class="topic">
                <div class="topic-title"><p>WORK</p></div>
                <hr>
            </div>
            <div class="work-title">
                <span>Student at KMUTNB</span>
                <div class="box"><p>Primary</p></div>
            </div>
            <div class="work-title">
                <span>Freelance developer</span>
                <div class="box"><p>Secondary</p></div>
            </div>
            <div class="topic">
                <div class="topic-title"><p>SKILLS</p></div>
                <hr>
            </div>
            <div class="skill-detail">
                <?php 
                    echo "<p>$skill1</p><p>$skill2</p>";
                    echo "<p>$skill2</p><p>$skill3</p>";
                    echo "<p>$skill4</p><p>$skill5</p>";
                    echo "<p>$skill6</p>";
                ?>
            </div>
        </div>
        
        <div class="right-side">
            <div class="top-wrapper">
                 <div class="wrapper-name">
                    <div class="name">
                        <?php echo "<p>$name</p>"; ?>
                    </div>
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Thailand, Chonburi</p>
                    </div>
                 </div>
                 <div class="bottom-of-name">
                    <?php echo "<p>$status</p>"; ?>
                 </div>
                 <div class="study-thing">
                    <div class="title"><p>My studying {</p></div>
                    <div class="wrapper-study">
                        <div class="study">
                            <?php 
                                echo "<p>University name:</p>";
                                echo "<p>$universityName</p>";
                            ?>
                        </div>
                        <div class="study">
                            <?php 
                                echo "<p>Faculty:</p>";
                                echo "<p>$faculty</p>";
                            ?>
                        </div>
                        <div class="study">
                            <?php 
                                echo "<p>Department of:</p>";
                                echo "<p>$department</p>";
                            ?>
                        </div>
                        <div class="study">
                            <?php 
                                echo "<p>Program:</p>";
                                echo "<p>$program</p>";
                            ?>
                        </div>
                    </div>    
                    <div class="title"><p>};</p></div>                
                 </div>

            </div>
            <div class="bottom-wrapper">
                <div class="title"><p>About me {</p></div>
                    <div class="wrapper-aboutme">
                        <div class="aboutme">
                            <?php 
                                echo "<p>Nick name:</p>";
                                echo "<p>$nickName</p>";
                            ?>
                        </div>
                        <div class="aboutme">
                            <?php 
                                echo "<p>Phone:</p>";
                                echo "<p>$phone</p>";
                            ?>
                        </div>
                        <div class="aboutme">
                            <?php 
                                echo "<p>Address:</p>";
                                echo "<p>$address</p>";
                            ?>
                        </div>
                        <div class="aboutme">
                            <?php 
                                echo "<p>Email:</p>";
                                echo "<p>$email</p>";
                            ?>
                        </div>
                        <div class="aboutme">
                            <?php 
                                echo "<p>Birthday:</p>";
                                echo "<p>$birthdate</p>";
                            ?>
                        </div>
                        <div class="aboutme">
                            <?php 
                                echo "<p>Gender:</p>";
                                echo "<p>$gender</p>";
                            ?>
                        </div>
                        <div class="title"><p>};</p></div>
                    </div>
            </div>
        <div class="toAnotherPage">
            <a href="../Travel-website/home.html">My travel website</a>
            <a href="php-lecture/homework/calArea.php">My Calc area website</a>
        </div>
    </div>
</body>
</html>