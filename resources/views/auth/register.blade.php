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
                <p>รหัสนักศึกษา :</p>
                <input type="text" name="std_id" id="id" required>
                <div class="name">
                    <div class="text">
                        <p>ชื่อ :</p>
                        <p>สกุล :</p>
                    </div>
                    <div class="form_name">
                        <input type="text" id="fname" name="firstname" required>
                        <input type="text" id="lname" name="lastname" required>
                    </div>
                </div>
                <p>อีเมล :</p>
                <input type="email" name="email" id="email" required>
                <p>รหัสผ่าน :</p>
                <input type="password" name="password" id="pwd" required>
                <p>ยืนยันรหัสผ่าน :</p>
                <input type="password" name="pwd_confrim" id="pwd_confrim" required>
                <button type="submit" class="submit">สมัครสมาชิก</button>
            </form>
        </div>
    </div>
</body>

</html>