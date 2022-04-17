<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="{{ asset('./img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('./css/forget.css') }}">
</head>

<body>
    <div class="container">
        <div class="contain">
            <form action="/save-reset-password" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <h2>ตั้งรหัสผ่านใหม่</h2>
                @if (session('fail'))
                    <strong>{{ session('fail') }}</strong>
                @endif
                <input type="email" name="email" value="{{ $email ?? old('email') }}" readonly>
                <input type="password" name="newpassword1" id="pwd" placeholder="รหัสผ่าน (อย่างน้อย 8 ตัว)" required
                    minlength="8">
                <input type="password" name="newpassword2" id="pwd_s" placeholder="ยืนยันรหัสผ่าน" required
                    minlength="8">
                <button type="submit" class="submit">ยืนยัน</button>
            </form>
        </div>
    </div>
</body>

</html>
