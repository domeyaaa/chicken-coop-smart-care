<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 340px;height: 330px;background-color: #FFF4CE;border-radius: 30px;padding:20px;padding-top:50px;padding-bottom:50px;">
        <center><img src="https://firebasestorage.googleapis.com/v0/b/chicken-coop-smart-care.appspot.com/o/logo%2Flogo.png?alt=media&token=2db3e40c-d001-4d0b-853e-e777fb5a388c" alt="logo" style="width: 140px;height: 140px;margin:0 auto;"></center> <br>
        <h2 style="text-align: center;font-size: 20px;padding:0px;margin:0;">รหัสยืนยันตัวตน คือ</h2> <br>
        <h1 style="color:#EE5151;text-align: center;padding:0px;margin:0;">{{ $details['otp'] }}</h1> <br>
        <p style="text-align: center;font-size: 17px;padding:0px;margin:0;">หมดอายุใน 5 นาที<br><b>รหัสอ้างอิง: </b>{{ $details['ref'] }}</p>
    </div>
</body>
</html>