<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Registration Form</title>
    <link rel="stylesheet" href="regisDisplayStyle.css">
</head>
<body>
    <?php 
        // function check Data in variable
        function checkData($data){
            if(empty($data)) return "-";
            else return $data;
        }

        // Personal Data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['telephone'];
        $birthDate = $_POST['birthDate'];
        $gender = $_POST['gender'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        // Previous School
        $oldSchool = $_POST['old-school'];
        $oldEducation = $_POST['old-education'];
        $gpa = $_POST['gpa'];

        // Address Data
        $houseNumber =  checkData($_POST['house-number']);
        $houseGroup =   checkData($_POST['house-group']);
        $houseAlley =   checkData($_POST['house-alley']);
        $houseProvince =checkData($_POST['house-province']);
        $houseStreet =  checkData($_POST['house-street']);
        $houseDistrict =checkData($_POST['house-district']);
        $houseParish =  checkData($_POST['house-parish']);
        $housePostal =  checkData($_POST['house-postal']);

        // Hobby Data
        $hobby = array();
        if(isset($_POST['myHobby'])) { // Check if myHobby has data?
            $hobby = $_POST['myHobby'];
        }
        $countHobby = count($hobby);
        for ($i=0; $i < $countHobby ; $i++) {  // loop for add # into element
            $hobby[$i] = '#'.$hobby[$i];
        }

        // Get Full name by merge first and last name
        $fullName = $fname . " " . $lname;
        // Converting date into format we want
        // Create a DateTime object from the original date string
        $dateTime = new DateTime($birthDate);
        // Format the date in the desired formet with B.E year
        $beYear = $dateTime->format('Y')+543;
        $birthDate = $dateTime->format('d/m') . '/' . $beYear;
        // Calculate age
        $age = (date('Y')+543) - $beYear - 1;
    ?>
    <div class="container">
        <div class="left-container">
            <div class="image">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="anonymus-image">
            </div>
            <div class="title"><h2><?php echo $fullName ?></h2></div>
            <div class="profile-detail-wrapper">
                <div class="title-detail">
                    <li>เพศ</li>
                    <li>อายุ</li>
                    <li>ส่วนสูง</li>
                    <li>น้ำหนัก</li>
                </div>
                <div class="value-detail">
                    <li><?php echo $gender ?></li>
                    <li><?php echo $age . " ปี"?></li>
                    <li><?php echo $height . " cm."?></li>
                    <li><?php echo $weight . " k."?></li>
                </div>
            </div>
            <div class="profile-tag">
                <h2>Tags</h2>
                <div class="detail">
                    <li>#developer</li>
                    <li>#fullstack-developer</li>
                    <li>#front-end</li>
                    <li>#Kmutnb</li>
                    <li>#Male</li>
                </div>
            </div>
        </div>
        <div class="right-container">
            <h2 class="heading-detail">รายละเอียดข้อมูลส่วนตัว</h2>
            <div class="detail-wrapper">
                <div class="box">
                    <span class="box-title">ชื่อจริง</span>
                    <span class="value"><?php echo $fname ?></span>
                </div>
                <div class="box">
                    <span class="box-title">นามสกุล</span>
                    <span class="value"><?php echo $lname ?></span>
                </div>
                <div class="box">
                    <span class="box-title">ชื่อเล่น</span>
                    <span class="value"><?php echo $nickname ?></span>
                </div>
            </div>
            <div class="detail-wrapper">
                <div class="box">
                    <span class="box-title">วันเกิด</span>
                    <span class="value"><?php echo $birthDate ?></span>
                </div>
                <div class="box">
                    <span class="box-title">เบอร์โทรศัพท์</span>
                    <span class="value"><?php echo $phoneNumber ?></span>
                </div>
                <div class="box">
                    <span class="box-title">Email</span>
                    <span class="value"><?php echo $email ?></span>
                </div>
            </div>
            <h2 class="heading-detail hd2">ข้อมูลสถานศึกษาเดิม</h2>
            <div class="detail-wrapper">
                <div class="box">
                    <span class="box-title">ชื่อโรงเรียนเดิม</span>
                    <span class="value"><?php echo $oldSchool ?></span>
                </div>
                <div class="box">
                    <span class="box-title">วุฒิการศึกษา</span>
                    <span class="value"><?php echo $oldEducation ?></span>
                </div>
                <div class="box">
                    <span class="box-title">เกรดเฉลี่ย</span>
                    <span class="value"><?php echo $gpa ?></span>
                </div>
            </div>
            <h2 class="heading-detail hd2">ข้อมูลที่อยู่</h2>
            <div class="detail-wrapper">
                <div class="box">
                    <span class="box-title">บ้านเลขที่</span>
                    <span class="value"><?php echo $houseNumber ?></span>
                </div>
                <div class="box">
                    <span class="box-title">หมู่ที่</span>
                    <span class="value"><?php echo $houseGroup ?></span>
                </div>
                <div class="box">
                    <span class="box-title">ตรอก/ซอย</span>
                    <span class="value"><?php echo $houseAlley ?></span>
                </div>
                <div class="box">
                    <span class="box-title">ถนน</span>
                    <span class="value"><?php echo $houseStreet ?></span>
                </div>
            </div>
            <div class="detail-wrapper">
                <div class="box">
                    <span class="box-title">ตำบล/แขวง</span>
                    <span class="value"><?php echo $houseParish ?></span>
                </div>
                <div class="box">
                    <span class="box-title">อำเภอ/เขต</span>
                    <span class="value"><?php echo $houseDistrict ?></span>
                </div>
                <div class="box">
                    <span class="box-title">จังหวัด</span>
                    <span class="value"><?php echo $houseProvince ?></span>
                </div>
                <div class="box">
                    <span class="box-title">รหัสไปรษณีย์</span>
                    <span class="value"><?php echo $housePostal ?></span>
                </div>
            </div>
            <h2 class="heading-detail hd2">งานอดิเรก / สิ่งที่สนใจ</h2>
            <div class="detail-wrapper">
                <div class="hobby-wrapper">

                    <?php 
                    for ($i=0; $i < $countHobby ; $i++) { 
                        echo "<span class='hobby-detail'>". $hobby[$i] ."</span>";
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</body>
</html>