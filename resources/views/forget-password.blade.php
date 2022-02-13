<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="css/forget.css">
</head>

<body>
    <div class="container">
        <div class="contain">
            <form action="send-otp" method="get">
                @csrf
                <h2>ลืมรหัสผ่าน</h2>
                <p>กรอก <b>อีเมล</b> ที่ใช้เข้าสู่ระบบเพื่อรับรหัสยืนยันตัวตน</p>
                @if (session('error_email'))
                    <span class="error">{{ session('error_email') }}</span>
                @endif
                <input type="email" name="email" id="name" required>
                <button type="submit" class="submit">ส่ง</button>

            </form>
        </div>
    </div>
</body>
</html>
