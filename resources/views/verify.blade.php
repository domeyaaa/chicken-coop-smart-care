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
            <form action="check-otp" method="post">
                @csrf
                <h2>รหัสยืนยันตัวตนถูกส่งไปที่</h2>
                @if (Cookie('fg_email'))
                    <p>{{ Cookie::get('fg_email') }}</p>
                @endif
                @if (session('error_otp'))
                    <span class="error">{{ session('error_otp') }}</span>
                @endif
                <input type="text" name="otp" id="otp" placeholder="รหัสยืนยันตัวตน" style="text-align: center">
                <div class="more">
                    <p>รหัสอ้างอิง : {{ Cookie::get('ref') }}</p>
                    <a href="send-otp">ส่งอีกครั้ง <i class='bx bx-refresh'></i></a>
                </div>
                <button type="submit" class="submit">ยืนยัน</button>
            </form>
        </div>
    </div>
</body>
</html>