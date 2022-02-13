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
            <form action="save-new-password" method="post">
                @csrf
                <h2>ตั้งรหัสผ่านใหม่</h2>
                <input type="password" name="newpassword1" id="pwd" placeholder="รหัสผ่าน (อย่างน้อย 8 ตัว)" required min="8">
                <input type="password" name="newpassword2" id="pwd_s" placeholder="ยืนยันรหัสผ่าน" required min="8">
                <button type="submit" class="submit">ยืนยัน</button>
            </form>
        </div>
    </div>
</body>
<script>
</script>
</html>