<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="{{asset('./img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('./css/forget.css')}}">
</head>

<body>
    <div class="container">
        <div class="contain">
            <form action="/send-reset-link" method="POST">
                @csrf
                <h2>ลืมรหัสผ่าน</h2>
                @if(session('success'))
                    <p>อีเมลถูกส่งไปที่ {{session('success')}}</p>
                    <p></p>
                    <button type="button" onclick="location.href='/login'" class="submit" >เข้าสู่ระบบ</button>
                @else
                    @if(session('error'))
                        <p>ไม่พบอีเมล <strong>{{session('error')}}</strong> <br/>ลองใหม่อีกครั้ง</p>
                        <p></p>
                    @endif
                    <p>กรอก <strong>อีเมล</strong> ที่ใช้เข้าสู่ระบบ</p>
                    <p></p>
                    <input type="email" name="email" id="name" value="{{ old('email') }}" required>
                    <button type="submit" class="submit" style="background: #5c90ff">ส่ง</button>
                    <button type="button" onclick="location.href='/login'" class="submit" >เข้าสู่ระบบ</button>
                @endif


            </form>
        </div>
    </div>
</body>

</html>
