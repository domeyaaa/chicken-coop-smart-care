<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/setting.css">
</head>

<body>
    <x-UserSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{ Auth::user()->firstname }}<br>{{ Auth::user()->lasename }}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>ตั้งค่า</h1>
            <div class="content">
                <div class="box_content">
                    <div class="box">
                        <div class="setting">
                            <div><a href="#" class="pagepro ative_set">โปรไฟล์</a></div>
                            <div class="pagepwd"><a href="#" class="pagepwd">รหัสผ่าน</a></div>
                        </div>
                        <form action="save-edit-profile" method="post" class="form_box profile">
                            <div class="form">
                                <div class="form_name">
                                    <p>รหัสนักศึกษา :</p>
                                    <p>คำนำหน้าชื่อ :</p>
                                    <p>ชื่อ :</p>
                                    <p>นามสกุล :</p>
                                    <p>อีเมล :</p>
                                </div>
                                <div class="form_input">
                                    <input class="inp_style" type="text" name="std_id" id="std_id"
                                        title="รหัสนักศึกษาแบบมีขีด" pattern="[0-9]{9}[-][0-9]{1}" required disabled value="{{ $profile->std_id }}">
                                    <select name="title_name" id="title_name" disabled>
                                        <option value="นาย" @if($profile->titlename == 'นาย') selected="selected" @endif >นาย</option>
                                        <option value="นางสาว" @if($profile->titlename == 'นางสาว') selected="selected" @endif>นางสาว</option>
                                        <option value="นาง" @if($profile->titlename == 'นาง') selected="selected" @endif>นาง</option>
                                    </select>
                                    <input class="inp_style" type="text" name="fname" id="fname" value="{{ $profile->firstname }}" required disabled>
                                    <input class="inp_style" type="text" name="lname" id="lname" value="{{ $profile->lastname }}" required disabled>
                                    <input class="inp_style" type="text" name="email" id="email" value="{{ $profile->email }}" required disabled>
                                </div>
                            </div>
                            <div class="edit_layout">
                                <button type="button" class="edit edit_pro">แก้ไข</button>
                            </div>
                            <div class="submit_layout">
                                <button type="submit" class="submit">ยืนยัน</button>
                                <button type="button" class="cencel">ยกเลิก</button>
                            </div>
                        </form>

                        <form action="#" method="post" class="form_box pwd">
                            <div class="form">
                                <div class="form_name">
                                    <p>รหัสผ่านปัจจุบัน :</p>
                                    <p>รหัสผ่านใหม่ :</p>
                                    <p>ยืนยันรหัสผ่าน :</p>
                                </div>
                                <div class="form_input">
                                    <input class="inp_style" type="text" name="pwd_old" id="pwd_old" required disabled>
                                    <input class="inp_style" type="text" name="pwd_new" id="pwd_new" required disabled>
                                    <input class="inp_style" type="text" name="pwd_sup" id="pwd_sup" required disabled>
                                </div>
                            </div>
                            <div class="edit_layout">
                                <button type="button" class="edit edit_pwd">แก้ไข</button>
                            </div>
                            <div class="submit_layout">
                                <button type="submit" class="submit">ยืนยัน</button>
                                <button type="button" class="cencel">ยกเลิก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-sensor />
    </div>
    <script src="js/jquery.js"></script>
    <script src="./js/menu.js"></script>
    <script>
        $('.submit_layout').hide();
        $('.pwd').hide();

        $('.edit_pro').on('click', ()=>{
            $('.inp_style').prop('disabled',false)
            $('#title_name').prop('disabled',false)
            $('.edit_layout').hide();
            $('.submit_layout').show();
            $('#std_id').focus();
        })

        $('.edit_pwd').on('click', ()=>{
            $('.inp_style').prop('disabled',false)
            $('.edit_layout').hide();
            $('.submit_layout').show();
            $('#pwd_old').focus();
        })

        $('.pagepro').on('click', ()=>{
            $('.profile').show();
            $('.pwd').hide();
            $('.pagepro').addClass('ative_set');
            $('.pagepwd').removeClass('ative_set');
            $('.submit_layout').hide();
            $('.edit_layout').show();
        })

        $('.pagepwd').on('click', ()=>{
            $('.profile').hide();
            $('.pwd').show();
            $('.pagepwd').addClass('ative_set');
            $('.pagepro').removeClass('ative_set');
            $('.submit_layout').hide();
            $('.edit_layout').show();
        })

        $('.cencel').on('click', ()=>{
            location.reload();
        })
        
        $("#setting").addClass('active_page');
    </script>
</body>

</html>