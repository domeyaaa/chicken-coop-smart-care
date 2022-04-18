<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="{{asset('./img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('./css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('./css/home.css')}}">
    <link rel="stylesheet" href="{{asset('./css/setting.css')}}">
    <link rel="stylesheet" href="{{asset('./css/admin_typechicken.css')}}">

</head>

<body @if (session('success')) onload="success('{{ session('success') }}')" @endif @if (session('error')) onload="error('{{ session('error') }}')" @endif>
    <x-adminSidebar />
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
                            @csrf
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
                                        title="รหัสนักศึกษา(มีขีด)" pattern="[0-9]{9}[-][0-9]{1}" disabled
                                        value="{{ $profile->std_id }}">
                                    <select name="title_name" id="title_name" disabled required>
                                        <option value="นาย"
                                            @if ($profile->titlename == 'นาย') selected="selected" @endif>นาย</option>
                                        <option value="นางสาว"
                                            @if ($profile->titlename == 'นางสาว') selected="selected" @endif>นางสาว</option>
                                        <option value="นาง"
                                            @if ($profile->titlename == 'นาง') selected="selected" @endif>นาง</option>
                                    </select>
                                    <input class="inp_style" type="text" name="fname" id="fname"
                                        value="{{ $profile->firstname }}" required disabled>
                                    <input class="inp_style" type="text" name="lname" id="lname"
                                        value="{{ $profile->lastname }}" required disabled>
                                    <input class="inp_style" type="text" name="email" id="email"
                                        value="{{ $profile->email }}" required disabled>
                                </div>
                            </div>
                            <div class="edit_layout">
                                <button type="button" class="edit edit_pro" onclick="setTeacherType()">แก้ไข</button>
                            </div>
                            <div class="submit_layout">
                                <button type="submit" class="submit">ยืนยัน</button>
                                <button type="button" class="cencel">ยกเลิก</button>
                            </div>
                        </form>

                        <form action="save-password-profile" method="post" class="form_box pwd">
                            @csrf
                            <div class="form">
                                <div class="form_name">
                                    <p>รหัสผ่านปัจจุบัน :</p>
                                    <p>รหัสผ่านใหม่ :</p>
                                    <p>ยืนยันรหัสผ่านใหม่ :</p>
                                </div>
                                <div class="form_input">
                                    <input class="inp_style" type="password" name="pwd_old" id="pwd_old" minlength="8" placeholder="รหัสผ่านอย่างน้อย 8 ตัวอักขระ" required>
                                    <input class="inp_style" type="password" name="pwd_new" id="pwd_new" minlength="8"  placeholder="รหัสผ่านใหม่อย่างน้อย 8 ตัวอักขระ" required>
                                    <input class="inp_style" type="password" name="pwd_sup" id="pwd_sup" minlength="8" required>
                                </div>
                            </div>
                            <div class="edit_layout">
                                <button type="submit" onclick="return checkPassword()" class="submit">ยืนยัน</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-sensor />
    </div>

    <div class="popup_success">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <div class="in-ct-success" style="color: green">
                    <i class='bx bx-check bx-lg'></i>
                    <span id="success"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="popup_error">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <div class="in-ct-success" style="color: red">
                    <i class='bx bx-x bx-lg' ></i>
                    <span id="error"></span>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function checkPassword(){
            if($('#pwd_new').val() == $('#pwd_sup').val()){
                return true;
            }else{
                error('รหัสผ่านใหม่ไม่ตรงกัน');
                return false;
            }
        }
    </script>

    <script src="{{asset('./js/jquery.js')}}"></script>
    <script src="{{asset('./js/menu.js')}}"></script>
    <script>
        $('.submit_layout').hide();
        $('.pwd').hide();

        $('.edit_pro').on('click', () => {
            $('#title_name').prop('disabled', false);
            $('.inp_style').prop('disabled', false);
            let x = $('#std_id').val();
            if (x == null || x == "") {
                $('#std_id').prop('disabled', false);
                $('.edit_layout').hide();
                $('.submit_layout').show();
                $('#fname').focus();
            } else {
                $('.edit_layout').hide();
                $('.submit_layout').show();
                $('#std_id').focus();
            }

        })

        $('.edit_pwd').on('click', () => {
            $('.inp_style').prop('disabled', false)
            $('.edit_layout').hide();
            $('.submit_layout').show();
            $('#pwd_old').focus();
        })

        $('.pagepro').on('click', () => {
            $('.profile').show();
            $('.pwd').hide();
            $('.pagepro').addClass('ative_set');
            $('.pagepwd').removeClass('ative_set');
            $('.submit_layout').hide();
            $('.edit_layout').show();
        })

        $('.pagepwd').on('click', () => {
            $('.profile').hide();
            $('.pwd').show();
            $('.pagepwd').addClass('ative_set');
            $('.pagepro').removeClass('ative_set');
            $('.submit_layout').hide();
            $('.edit_layout').show();
        })

        $('.cencel').on('click', () => {
            location.reload();
        })

        $('#setting').addClass('active_page');

        function success(x) {
            $(".popup_success").show();
            $('#success').text(x);
            timeout = setTimeout(hide, 2400);
        }

        function error(x) {
            $(".popup_error").show();
            $('#error').text(x);
            timeout = setTimeout(hide, 2400);
        }

        $('.bxs-x-circle').on('click', () => {
            $(".popup_success").hide();
            $(".popup_error").hide();

        })

        function hide() {
            $(".popup_success").hide();
            $(".popup_error").hide();
        }


        

    </script>
</body>

</html>
