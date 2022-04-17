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
    <link rel="stylesheet" href="./css/funtion.css">

</head>

<body>
    <x-UserSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{Auth::user()->firstname}}<br>{{Auth::user()->lastname}}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>บันทึก และดูข้อมูลไก่พันธุ์</h1>
            <div class="content">
                <div class="box_content">
                    <div class="funtion">
                        <div class="funtion-box">
                            <a href="chicken/all">
                                <img src="{{asset('./img/selection.png')}}" alt="img_search">
                                <p>ค้นหา เพิ่ม และแก้ไข</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="sexing">
                                <img src="{{asset('./img/sex.png')}}" alt="img_sex">
                                <p>ทำนายเพศของลูกไก่</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="{{asset('./img/give_food.png')}}" alt="img_food">
                                <p>ให้อาหาร</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="{{asset('./img/vaccinate.png')}}" alt="img_vaccinate">
                                <p>ฉีดวัดซีน</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="{{asset('./img/weight.png')}}" alt="img_weight">
                                <p>บันทึกน้ำหนัก</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="{{asset('./img/body_size.png')}}" alt="img_bodysize">
                                <p>บันทึกขนาดตัว</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="{{asset('./img/get_chicken.png')}}" alt="img_getchicken">
                                <p>คัดเลือกไก่พันธุ์</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="/compare-yield">
                                <img src="{{asset('./img/compare.png')}}" alt="img_compare">
                                <p>เปรียบเทียบการให้ผลผลิต</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="/breed">
                                <img src="{{asset('./img/love.png')}}" alt="img_live">
                                <p>จับคู่ผสม</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- sensor component --}}
        <x-sensor />
    </div>
    <script src="js/jquery.js"></script>
    <script src="./js/menu.js"></script>
    <script>
        $('input:radio[name="layout"]').change(function() {
            $(".chicken_box").toggleClass("list");
        });
        $('#menu').addClass('active_page');
    </script>
</body>

</html>
