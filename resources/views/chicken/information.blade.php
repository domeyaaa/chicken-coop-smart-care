<?php
date_default_timezone_set('Asia/Bangkok');
$now = strtotime('now');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="{{ asset('./css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/chicken_record.css') }}">
</head>

<body>
    <x-UserSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{ Auth::user()->firstname }}<br>{{ Auth::user()->lastname }}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>ข้อมูลไก่พันธุ์</h1>
            <div class="content">
                <div class="box_content">
                    <h2>หมายเลขไก่พันธุ์ : {{ $info->id }}</h2>
                    <div class="record">
                        <div class="record_funtion">
                            <img class="img_chicke" src="{{ asset('./img/img_chicken.png') }}" alt="img_chicken">
                            <div class="funtion_box">
                                <a class="funtion" href="#">ตารางน้ำหนัก</a>
                                <a class="funtion" href="#">ตารางขนาดตัว</a>
                                <a class="funtion" href="#">ตารางอาหาร</a>
                                <a class="funtion" href="#">ตารางวัคซีน</a>
                                <a class="funtion" href="#">ตารางจับคู่ผสม</a>
                                <a class="funtion" href="./record_egg.html">ตารางการให้ไข่</a>
                                <a class="funtion out" href="#">ปลดประจำการ</a>
                                <a class="funtion edit" href="#">แก้ไขข้อมูล</a>
                                <a class="funtion die" href="#">ตาย</a>
                            </div>
                        </div>
                        <div class="record_chicken">
                            <div class="format"><samp>หมายเลขพ่อไก่พันธุ์:</samp>{{ $info->father_id }}</div>
                            <div class="format"><samp>หมายเลขคอก:</samp>?</div>
                            <div class="format"><samp>หมายเลขแม่ไก่พันธุ์:</samp>{{ $info->mother_id }}</div>
                            <div class="format"><samp>พันธุ์ไก่:</samp>{{ $info->specie_name }}</div>
                            <div class="format"><samp>เพศ:</samp><?php if ($info->sex == null) {
    echo '-';
} else {
    echo $info->sex;
} ?></div>
                            <div class="format"><samp>อายุ:</samp><?php $x = strtotime($info->birthday);
echo floor(($now - $x) / 604800); ?> สัปดาห์</div>
                            <div class="format"><samp>อุณหภูมิขณะฟัก:</samp>?? ํC</div>
                            <div class="format"><samp>สถานะ:</samp>{{ $info->phase_name }}</div>
                            <div class="format"><samp>น้ำหนัก:</samp>?? kg</div>
                            <div class="format"><samp>ความยาวรอบอก:</samp>?? cm</div>
                            <div class="format"><samp>ความยาวแข้ง:</samp>?? cm</div>
                            <div class="format"><samp>วันที่เกิด:</samp>{{ $info->birthday }}</div>
                            <div class="format"><samp>อัตรากาารให้ไข่:</samp>??%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-sensor />
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('./js/menu.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script>
        $('#menu').addClass('active_page');
    </script>
</body>

</html>
