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
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="img/logo.png" alt="img_logo">
            <p>Chicken Coop <br>Smart Care</p>
        </div>
        <div class="login">
            <div class="connet">
                <a href="#" class="active">เข้าสู่ระบบ</a>
                <a href="{{ route('register') }}">สมัครสมาชิก</a>
            </div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                @if (session('error-login'))
                    <div style="width: 100%;text-align: center;">
                        <span
                            style="color:red;font-size: 20px;font-weight:200;">{{ session('error-login') }}</span>
                    </div>
                @endif
                <p>อีเมล :</p>
                <input type="text" name="email" id="name" type="email" @if(session('login-email')) value="{{ session('login-email') }}" @endif required autofocus >
                <p>รหัสผ่าน :</p>
                <input type="password" name="password" id="pwd" required autocomplete="current-password" >
                <a href="forget-password" class="forget">ลืมรหัสผ่าน</a>
                <button type="submit" class="submit">เข้าสู่ระบบ</button>
            </form>
        </div>
    </div>
</body>

</html>
