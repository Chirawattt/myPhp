<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regisStyle.css">
    <title>Registration Form and Display</title>

    <style>
        .btn{
            width: 100%; 
            margin-top: 30px;
        }
        .btn input{
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            outline: none;
            border-radius: 5px;
            font-size: 1.1rem;
            color: #fff;
            font-weight: 500;
            transition: all .3s ease;
            text-align: center;
            background: #bb3335;
            width: 100%;
        }
        span.hobbyDetail{
            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
            padding: 6px 12px;
            background: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php 
    if (isset($_POST['btnSubmit'])) {
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
                if(isset($_POST['myHobby'])) { // Check if myHobby has data?
                    $hobby = $_POST['myHobby'];
                    $countHobby = count($hobby);
                    for ($i=0; $i < $countHobby ; $i++) {  // loop for add # into element
                        $hobby[$i] = '#'.$hobby[$i];
                    }
                }else {
                    $hobby = "You've not selected any hobby";
                }
        
                // Get Full name by merge first and last name
                $fullName = $fname . " " . $lname;
                // Converting date into format we want
                // Create a DateTime object from the original date string
                $dateTime = new DateTime($birthDate);
                // Format the date in the desired formet with B.E year
                $beYear = $dateTime->format('Y')+543;
                $birthDate = $dateTime->format('d/m') . '/' . $beYear;
                
                echo "
    <section class='container'>
        <header>ส่วนแสดงผลแบบฟอร์ม</header>
        <form action='#' method='post' class='form'>
            <div class='input-head-title'>
                <div class='title'>ข้อมูลส่วนตัว</div>
                <div class='line'></div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>ชื่อจริง</label>
                    <input type='text' name='fname' disabled value='". $fname ."'>
                </div>
                <div class='input-box'>
                    <label>นามสกุล</label>
                    <input type='text' name='lname' disabled value='". $lname ."'>
                </div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>ชื่อเล่น</label>
                    <input type='text' name='nickname' disabled value='". $nickname ."'>
                </div>
                <div class='input-box'>
                    <label>Email address</label>
                    <input type='email' name='email' disabled value='". $email ."'>
                </div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>เบอร์ติดต่อ</label>
                    <input type='text' name='telephone' disabled value='". $phoneNumber ."'>
                </div>
                <div class='input-box'>
                    <label>วันเกิด</label>
                    <input type='text' name='birthDate' disabled value='". $birthDate ."'>
                </div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>ส่วนสูง</label>
                    <input type='number' name='height' disabled value='". $height ."'>
                </div>
                <div class='input-box'>
                    <label>น้ำหนัก</label>
                    <input type='number' name='weight' disabled value='". $weight ."'>
                </div>
                <div class='input-box'>
                    <label>เพศ</label>
                    <input type='text' disabled value='". $gender ."'>
                </div>
            </div>


            <div class='input-head-title'>
                <div class='title'>ข้อมูลที่สถานศึกษาเก่า</div>
                <div class='line'></div>
            </div>
            <div class='input-box'>
                <label>ชื่อสถานศึกษาเดิม</label>
                <input type='text' name='old-school' disabled value='". $oldSchool ."'>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>วุฒิการศึกษา</label>
                    <div class='select-box'>
                    <select name='old-education' disabled>
                        <option>". $oldEducation ."</option>
                    </select>
                    </div>
                </div>
                <div class='input-box'>
                    <label>เกรดเฉลี่ย</label>
                    <input type='number' disabled value='". $gpa ."'>
                </div>
            </div>

            <div class='input-head-title'>
                <div class='title'>ข้อมูลที่อยู่อาศัย</div>
                <div class='line'></div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>บ้านเลขที่</label>
                    <input type='text' name='house-number' disabled value='". $houseNumber ."'>
                </div>
                <div class='input-box'>
                    <label>หมู่ที่</label>
                    <input type='text' name='house-group' disabled value='". $houseGroup ."'>
                </div>
            </div>
            <div class='column cl-house'>
                <div class='input-box'>
                    <label>ตรอก/ซอย</label>
                    <input type='text' name='house-alley' disabled value='". $houseAlley ."'>
                </div>
                <div class='input-box'>
                    <label>ถนน</label>
                    <input type='text' name='house-street' disabled value='". $houseStreet ."'>
                </div>
            </div>
            <div class='column cl-house'>
                <div class='input-box'>
                    <label>ตำบล/แขวง</label>
                    <input type='text' name='house-parish' disabled value='". $houseParish ."'>
                </div>
                <div class='input-box'>
                    <label>อำเภอ/เขต</label>
                    <input type='text' name='house-district' disabled value='". $houseDistrict ."'>
                </div>
            </div>
            <div class='column cl-house'>
                <div class='input-box'>
                    <label>จังหวัด</label>
                    <input type='text' name='house-province' disabled value='". $houseProvince ."'>
                </div>
                <div class='input-box'>
                    <label>รหัสไปรษณีย์</label>
                    <input type='text' name='house-postal' disabled value='". $housePostal ."'>
                </div>
            </div>
            <div class='input-head-title'>
                <div class='title'>งานอดิเรก</div>
                <div class='line'></div>
            </div>
            <ul class='hobby-wrapper'>
                ";
                    if (isset($_POST['myHobby'])) {
                        for ($i=0; $i < count($hobby) ; $i++) { 
                            echo "<span class='hobbyDetail'>". $hobby[$i]."</span>";
                        }
                    }else {
                        echo "<span class='hobbyDetail'>". $hobby ."</span>";
                    }
            echo "
            </ul>
            <div class='btn'>
                <a href='registrationFormDisplay.php'><input type='text' value='back'></a>
            </div>
            </form>
    </section>
    ";
    } else {
        echo "
    <section class='container'>
        <header>แบบฟอร์มรับข้อมูลนักศึกษาเข้ามหาลัย</header>
        <form action='#' method='post' class='form'>
            <div class='input-head-title'>
                <div class='title'>ข้อมูลส่วนตัว</div>
                <div class='line'></div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>ชื่อจริง<span class='require'> *</span></label>
                    <input type='text' name='fname' placeholder='ไม่ต้องมีคำนำหน้า' required autofocus>
                </div>
                <div class='input-box'>
                    <label>นามสกุล<span class='require'> *</span></label>
                    <input type='text' name='lname' placeholder='นามสกุล' required>
                </div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>ชื่อเล่น<span class='require'> *</span></label>
                    <input type='text' name='nickname' placeholder='ชื่อเล่นของคุณ' required>
                </div>
                <div class='input-box'>
                    <label>Email address<span class='require'> *</span></label>
                    <input type='email' name='email' placeholder='abcdefg@hotmail.com' required>
                </div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>เบอร์ติดต่อ<span class='require'> *</span></label>
                    <input type='text' name='telephone' placeholder='012-345-6789' required>
                </div>
                <div class='input-box'>
                    <label>วันเกิด<span class='require'> *</span></label>
                    <input type='date' name='birthDate' required>
                </div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>ส่วนสูง<span class='require'> *</span></label>
                    <input type='number' name='height' placeholder='่(เซนติเมตร)' required>
                </div>
                <div class='input-box'>
                    <label>น้ำหนัก<span class='require'> *</span></label>
                    <input type='number' name='weight' placeholder='(กิโลกรัม)' required>
                </div>
            </div>
            <div class='gender-box'>
                <h3>เพศ<span class='require'> *</span></h3>
                <div class='gender-option'>
                    <div class='gender'>
                        <input type='radio' name='gender' id='check-male' value='ชาย' checked>
                        <label for='check-male'>ชาย</label>
                    </div>
                    <div class='gender'>
                        <input type='radio' name='gender' id='check-female' value='หญิง'>
                        <label for='check-female'>หญิง</label>
                    </div>
                    <div class='gender'>
                        <input type='radio' name='gender' id='check-other' value='ไม่ระบุเพศ'>
                        <label for='check-other'>ไม่ระบุ</label>
                    </div>
                </div>
            </div>

            <div class='input-head-title'>
                <div class='title'>ข้อมูลที่สถานศึกษาเก่า</div>
                <div class='line'></div>
            </div>
            <div class='input-box'>
                <label>ชื่อสถานศึกษาเดิม<span class='require'> *</span></label>
                <input type='text' name='old-school' placeholder='ชื่อสถานศึกษาเดิม' required>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>วุฒิการศึกษา<span class='require'> *</span></label>
                    <div class='select-box'>
                    <select name='old-education'>
                        <option value='มัธยมศึกษาตอนต้น'>มัธยมศึกษาตอนต้น</option>
                        <option value='มัธยมศึกษาตอนปลาย'>มัธยมศึกษาตอนปลาย</option>
                        <option value='ประกาศนียบัตรวิชาชีพ'>ประกาศนียบัตรวิชาชีพ (ปวส.)</option>
                        <option value='ประกาศนียบัตรวิชาชีพชั้นสูง'>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวช.)</option>
                    </select>
                </div>
                </div>
                <div class='input-box'>
                    <label>เกรดเฉลี่ย<span class='require'> *</span></label>
                    <input type='number' name='gpa' min='2.00' max='4.00' step='0.01' value='2.00'>
                </div>
            </div>

            <div class='input-head-title'>
                <div class='title'>ข้อมูลที่อยู่อาศัย</div>
                <div class='line'></div>
            </div>
            <div class='column'>
                <div class='input-box'>
                    <label>บ้านเลขที่</label>
                    <input type='text' name='house-number' placeholder='บ้านเลขที่'>
                </div>
                <div class='input-box'>
                    <label>หมู่ที่</label>
                    <input type='text' name='house-group' placeholder='หมู่ที่'>
                </div>
            </div>
            <div class='column cl-house'>
                <div class='input-box'>
                    <label>ตรอก/ซอย</label>
                    <input type='text' name='house-alley' placeholder='ตรอก/ซอย'>
                </div>
                <div class='input-box'>
                    <label>ถนน</label>
                    <input type='text' name='house-street' placeholder='ถนน'>
                </div>
            </div>
            <div class='column cl-house'>
                <div class='input-box'>
                    <label>ตำบล/แขวง</label>
                    <input type='text' name='house-parish' placeholder='ตำบล/แขวง'>
                </div>
                <div class='input-box'>
                    <label>อำเภอ/เขต</label>
                    <input type='text' name='house-district' placeholder='อำเภอ/เขต'>
                </div>
            </div>
            <div class='column cl-house'>
                <div class='input-box'>
                    <label>จังหวัด</label>
                    <input type='text' name='house-province' placeholder='จังหวัด'>
                </div>
                <div class='input-box'>
                    <label>รหัสไปรษณีย์</label>
                    <input type='text' name='house-postal' placeholder='รหัสไปรษณีย์'>
                </div>
            </div>
            <div class='input-head-title'>
                <div class='title'>งานอดิเรก</div>
                <div class='line'></div>
            </div>
            <ul class='hobby-wrapper'>
                <label for='myHobby1'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby1' value='ทำอาหาร'> ทำอาหาร</li></label>
                <label for='myHobby2'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby2' value='ขี่ม้า'> ขี่ม้า</li></label>
                <label for='myHobby3'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby3' value='ยิงธนู'> ยิงธนู</li></label>
                <label for='myHobby4'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby4' value='เดินป่า'> เดินป่า</li></label>
                <label for='myHobby5'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby5' value='ตกปลา'> ตกปลา</li></label>
                <label for='myHobby6'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby6' value='เล่นเกม'> เล่นเกม</li></label>
                <label for='myHobby7'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby7' value='ว่ายน้ำ'> ว่ายน้ำ</li></label>
                <label for='myHobby8'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby8' value='พายเรือ'> พายเรือ</li></label>
                <label for='myHobby9'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby9' value='ทำสวน'> ทำสวน</li></label>
                <label for='myHobby10'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby10' value='เล่นสกี'> เล่นสกี</li></label>
                <label for='myHobby11'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby11' value='วาดภาพ'> วาดภาพ</li></label>
                <label for='myHobby12'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby12' value='ตั้งแคมป์'> ตั้งแคมป์</li></label>
                <label for='myHobby13'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby13' value='เล่นกีฬา'> เล่นกีฬา</li></label>
                <label for='myHobby14'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby14' value='ฟังเพลง'> ฟังเพลง</li></label>
                <label for='myHobby15'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby15' value='ถ่ายภาพ'> ถ่ายภาพ</li></label>
                <label for='myHobby16'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby16' value='ร้องเพลง'> ร้องเพลง</li></label>
                <label for='myHobby17'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby17' value='ท่องเที่ยว'> ท่องเที่ยว</li></label>
                <label for='myHobby18'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby18' value='ปั่นจักรยาน'> ปั่นจักรยาน</li></label>
                <label for='myHobby19'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby19' value='ถักไหมพรม'> ถักไหมพรม</li></label>
                <label for='myHobby20'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby20' value='เขียนหนังสือ'> เขียนหนังสือ</li></label>
                <label for='myHobby21'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby21' value='ออกกำลังกาย'> ออกกำลังกาย</li></label>
                <label for='myHobby22'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby22' value='เล่นเกมกระดาน'> เล่นเกมกระดาน</li></label>
                <label for='myHobby23'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby23' value='เขียนโปรแกรม'> เขียนโปรแกรม</li></label>
                <label for='myHobby24'><li class='hobby'><input type='checkbox' name='myHobby[]' id='myHobby24' value='อ่านหนังสือ'> อ่านหนังสือ</li></label>
            </ul>

            <div class='btn-wrapper'>
                <input name='btnSubmit' type='submit' value='Next'>
                <input name='btnReset' type='reset' value='Clear'>
            </div>
        </form>
    </section>
    ";
    }?>
    
</body>
</html>