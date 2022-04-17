<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="{{ asset('./img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('./css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/sexing.css') }}">
</head>

<body>
    <x-userSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{ Auth::user()->firstname }}<br>{{ Auth::user()->lastname }}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>ทำนายเพศของลูกไก่</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึก และดูข้อมูลไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">ทำนายเพศของลูกไก่</a></div>
            </div>
            <form action="#" method="get">
                <div class="content">
                    <div class="box_content">
                        <div class="box">
                            <div class="form_box">
                                <div class="inp_box">
                                    <div class="inp_style">
                                        ความกว้าง :
                                        <input type="text" class="input inp-num" name="width_egg" id="width_egg">
                                        เซนติเมตร
                                    </div>
                                    <div class="inp_style">
                                        ความยาว :
                                        <input type="text" class="input inp-num" name="length_egg" id="length_egg">
                                        เซนติเมตร
                                    </div>
                                </div>
                                <div class="arrow">
                                    <img src="{{ asset('./img/Double Down.png') }}" alt="arrow">
                                </div>
                                <div class="img_box">
                                    <img src="{{ asset('./img/eggsexing.png') }}" alt="img_egg">
                                    <p>ผลการวิเคราะห์</p>
                                </div>
                            </div>
                            <h3 class="total">อัตราความแม่นยำปัจจุบัน : xx%</h3>
                            <div class="submit_box">
                                <div class="button_box">
                                    <button class="analyze" type="button" onclick="predict()">เริ่มการวิเคราะห์</button>
                                </div>
                                <div class="button_box">
                                    <button class="reset" type="reset">รีเซ็ต</button>
                                </div>
                            </div>
                            <div class="note_box">
                                <div class="title_note"><samp>*</samp>หมายเหตุ :</div>
                                <div class="note">ผลการวิเคราะห์อาจไม่ได้ถูกต้องเสมอไป<br>
                                    แต่ผลลัพธ์ที่ได้เป็นหนึ่งผลลัพธ์ที่เป็นไปได้</div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <x-sensor />
    </div>
    <script src="{{ asset('./js/jquery.js') }}"></script>
    <script src="{{ asset('./js/menu.js') }}"></script>
    <script src="{{ asset('./js/popup.js') }}"></script>
    <script>
        function predict(){
            $W = $("#width_egg").val();
            $L = $("#length_egg").val();
            $SI = ($W/$L)*100;
            if($SI > 75){
                alert('เพศเมีย');
            }else{
                alert('เพศผู้');
            }
        }
        $('#menu').addClass('active_page');

    </script>
</body>

</html>
