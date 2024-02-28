<?php
    session_start(); // important to call this function first
    session_destroy(); // delete all session data
?>
<style>
    .input-box { margin-bottom: 10px; }
    .form-container { font-size: 20px; } /* Add this CSS rule to increase the font size */
</style>

<div style="display: grid; place-items:center; height: 100vh;" class="form-container"> <!-- Add the class to the div -->
    <form action="session_file2.php" method="GET" style="display:grid; place-items: center;">
        <div class='input-box'>
            <label for="username">
                <span>กรุณาป้อนชื่อผู้ใช้ (username):</span>
                <input type="text" name="username" id="username">
            </label>
        </div>
        <div class='input-box'>
            <label for="password">
                <span>กรุณาป้อนรหัสผ่าน (password):</span>
                <input type="password" name="password" id="password">
            </label>
        </div>
        <input type="submit" value="OK" style="width:100%; height: 30px; cursor:pointer;">
    </form>
</div>
