<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="css/login.css">
    <script src="./js/register.js"></script>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="img/logo.png" alt="img_logo">
            <p>Chicken Coop <br>Smart Care</p>
        </div>
        <div class="login">
            <div class="connet">
                <a href="{{ route('login') }}">เข้าสู่ระบบ</a>
                <a href="#" class="active">สมัครสมาชิก</a>
            </div>
            <form action="save-user" method="POST">
                @csrf
                <div class="type">
                    <p>ประเภทผู้ใช้งาน :</p>
                    <input type="radio" name="type" id="std" checked onclick="setId(1)">
                    <label for="std" onclick="setId(1)">นักศึกษา</label>
                    <input type="radio" name="type" id="te" onclick="setId(2)">
                    <label for="te" onclick="setId(2)">อาจารย์</label>
                </div>
                <div class="type">
                    <p>คำนำหน้าชื่อ :</p>
                    <select name="titlename" id="title" required>
                        <option value="" hidden>เลือกคำนำหน้าชื่อ</option>
                        <option value="นาย" >นาย</option>
                        <option value="นาง" >นาง</option>
                        <option value="นางสาว" >นางสาว</option>
                    </select>
                </div>
                <p>รหัสนักศึกษา : @if(session('error-std_id'))<span style="color: red">{{ session('error-std_id') }}</span> @endif</p>
                <input type="text" pattern="[0-9]{9}[-][0-9]{1}" name="std_id" id="id" required @if(session('reg-std_id')) value="{{ session('reg-std_id' ) }}"  @endif>
                <div class="name">
                    <div class="text">
                        <p>ชื่อ :</p>
                        <p>สกุล :</p>
                    </div>
                    <div class="form_name">
                        <input type="text" id="fname" name="firstname" required @if(session('reg-fname')) value="{{ session('reg-fname' ) }}"  @endif>
                        <input type="text" id="lname" name="lastname" required @if(session('reg-lname')) value="{{ session('reg-lname' ) }}"  @endif>
                    </div>
                </div>
                <p>อีเมล : @if(session('error-email'))<span style="color: red">{{ session('error-email') }}</span> @endif</p>
                <input type="email" @if(session('reg-email')) value="{{ session('reg-email' ) }}"  @endif name="email" id="email" required placeholder="example@hotmail.com">
                <p>รหัสผ่าน : <span id="textpassword" style="color: red"></span></p>
                <input type="password" name="password" id="pwd" placeholder="รหัสผ่านอย่างน้อย 8 ตัวอักขระ" minlength="8" required>
                <p>ยืนยันรหัสผ่าน :</p>
                <input type="password" name="pwd_confrim" id="pwd_confrim" placeholder="ยืนยันรหัสผ่าน" minlength="8" required>
                <button type="submit" onclick="return checkRegister()" class="submit" >สมัครสมาชิก</button>
            </form>
        </div>
    </div>
</body>
<script>
    
</script>
<?php $request->session()->forget(['reg-email','reg-std_id','reg-fname','reg-lname']); ?>

</html>