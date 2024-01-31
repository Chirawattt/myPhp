<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regisStyle.css">
    <title>Registration Form</title>
</head>
<body>
    <section class="container">
        <header>แบบฟอร์มรับข้อมูลนักศึกษาเข้ามหาลัย</header>
        <form action="regisFormDisplay.php" method="post" class="form">
            <div class="input-head-title">
                <div class="title">ข้อมูลส่วนตัว</div>
                <div class="line"></div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>ชื่อจริง<span class="require"> *</span></label>
                    <input type="text" name="fname" placeholder="ไม่ต้องมีคำนำหน้า" required autofocus>
                </div>
                <div class="input-box">
                    <label>นามสกุล<span class="require"> *</span></label>
                    <input type="text" name="lname" placeholder="นามสกุล" required>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>ชื่อเล่น<span class="require"> *</span></label>
                    <input type="text" name="nickname" placeholder="ชื่อเล่นของคุณ" required>
                </div>
                <div class="input-box">
                    <label>Email address<span class="require"> *</span></label>
                    <input type="email" name="email" placeholder="abcdefg@hotmail.com" required>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>เบอร์ติดต่อ<span class="require"> *</span></label>
                    <input type="text" name="telephone" placeholder="012-345-6789" required>
                </div>
                <div class="input-box">
                    <label>วันเกิด<span class="require"> *</span></label>
                    <input type="date" name="birthDate" required>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>ส่วนสูง<span class="require"> *</span></label>
                    <input type="number" name="height" placeholder="่(เซนติเมตร)" required>
                </div>
                <div class="input-box">
                    <label>น้ำหนัก<span class="require"> *</span></label>
                    <input type="number" name="weight" placeholder="(กิโลกรัม)" required>
                </div>
            </div>
            <div class="gender-box">
                <h3>เพศ<span class="require"> *</span></h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" name="gender" id="check-male" value="ชาย" checked>
                        <label for="check-male">ชาย</label>
                    </div>
                    <div class="gender">
                        <input type="radio" name="gender" id="check-female" value="หญิง">
                        <label for="check-female">หญิง</label>
                    </div>
                    <div class="gender">
                        <input type="radio" name="gender" id="check-other" value="ไม่ระบุเพศ">
                        <label for="check-other">ไม่ระบุ</label>
                    </div>
                </div>
            </div>

            <div class="input-head-title">
                <div class="title">ข้อมูลที่สถานศึกษาเก่า</div>
                <div class="line"></div>
            </div>
            <div class="input-box">
                <label>ชื่อสถานศึกษาเดิม<span class="require"> *</span></label>
                <input type="text" name="old-school" placeholder="ชื่อสถานศึกษาเดิม" required>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>วุฒิการศึกษา<span class="require"> *</span></label>
                    <div class="select-box">
                    <select name="old-education">
                        <option value="มัธยมศึกษาตอนต้น">มัธยมศึกษาตอนต้น</option>
                        <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>
                        <option value="ประกาศนียบัตรวิชาชีพ">ประกาศนียบัตรวิชาชีพ (ปวส.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพชั้นสูง">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวช.)</option>
                    </select>
                </div>
                </div>
                <div class="input-box">
                    <label>เกรดเฉลี่ย<span class="require"> *</span></label>
                    <input type="number" name="gpa" min="2.00" max="4.00" step="0.01" value="2.00">
                </div>
            </div>

            <div class="input-head-title">
                <div class="title">ข้อมูลที่อยู่อาศัย</div>
                <div class="line"></div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>บ้านเลขที่</label>
                    <input type="text" name="house-number" placeholder="บ้านเลขที่">
                </div>
                <div class="input-box">
                    <label>หมู่ที่</label>
                    <input type="text" name="house-group" placeholder="หมู่ที่">
                </div>
            </div>
            <div class="column cl-house">
                <div class="input-box">
                    <label>ตรอก/ซอย</label>
                    <input type="text" name="house-alley" placeholder="ตรอก/ซอย">
                </div>
                <div class="input-box">
                    <label>ถนน</label>
                    <input type="text" name="house-street" placeholder="ถนน">
                </div>
            </div>
            <div class="column cl-house">
                <div class="input-box">
                    <label>ตำบล/แขวง</label>
                    <input type="text" name="house-parish" placeholder="ตำบล/แขวง">
                </div>
                <div class="input-box">
                    <label>อำเภอ/เขต</label>
                    <input type="text" name="house-district" placeholder="อำเภอ/เขต">
                </div>
            </div>
            <div class="column cl-house">
                <div class="input-box">
                    <label>จังหวัด</label>
                    <input type="text" name="house-province" placeholder="จังหวัด">
                </div>
                <div class="input-box">
                    <label>รหัสไปรษณีย์</label>
                    <input type="text" name="house-postal" placeholder="รหัสไปรษณีย์">
                </div>
            </div>
            <div class="input-head-title">
                <div class="title">งานอดิเรก</div>
                <div class="line"></div>
            </div>
            <ul class="hobby-wrapper">
                <label for="myHobby1"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby1" value="ทำอาหาร"> ทำอาหาร</li></label>
                <label for="myHobby2"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby2" value="ขี่ม้า"> ขี่ม้า</li></label>
                <label for="myHobby3"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby3" value="ยิงธนู"> ยิงธนู</li></label>
                <label for="myHobby4"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby4" value="เดินป่า"> เดินป่า</li></label>
                <label for="myHobby5"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby5" value="ตกปลา"> ตกปลา</li></label>
                <label for="myHobby6"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby6" value="เล่นเกม"> เล่นเกม</li></label>
                <label for="myHobby7"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby7" value="ว่ายน้ำ"> ว่ายน้ำ</li></label>
                <label for="myHobby8"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby8" value="พายเรือ"> พายเรือ</li></label>
                <label for="myHobby9"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby9" value="ทำสวน"> ทำสวน</li></label>
                <label for="myHobby10"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby10" value="เล่นสกี"> เล่นสกี</li></label>
                <label for="myHobby11"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby11" value="วาดภาพ"> วาดภาพ</li></label>
                <label for="myHobby12"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby12" value="ตั้งแคมป์"> ตั้งแคมป์</li></label>
                <label for="myHobby13"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby13" value="เล่นกีฬา"> เล่นกีฬา</li></label>
                <label for="myHobby14"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby14" value="ฟังเพลง"> ฟังเพลง</li></label>
                <label for="myHobby15"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby15" value="ถ่ายภาพ"> ถ่ายภาพ</li></label>
                <label for="myHobby16"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby16" value="ร้องเพลง"> ร้องเพลง</li></label>
                <label for="myHobby17"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby17" value="ท่องเที่ยว"> ท่องเที่ยว</li></label>
                <label for="myHobby18"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby18" value="ปั่นจักรยาน"> ปั่นจักรยาน</li></label>
                <label for="myHobby19"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby19" value="ถักไหมพรม"> ถักไหมพรม</li></label>
                <label for="myHobby20"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby20" value="เขียนหนังสือ"> เขียนหนังสือ</li></label>
                <label for="myHobby21"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby21" value="ออกกำลังกาย"> ออกกำลังกาย</li></label>
                <label for="myHobby22"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby22" value="เล่นเกมกระดาน"> เล่นเกมกระดาน</li></label>
                <label for="myHobby23"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby23" value="เขียนโปรแกรม"> เขียนโปรแกรม</li></label>
                <label for="myHobby24"><li class="hobby"><input type="checkbox" name="myHobby[]" id="myHobby24" value="อ่านหนังสือ"> อ่านหนังสือ</li></label>
            </ul>

            <div class="btn-wrapper">
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </div>
        </form>
    </section>
</body>
</html>