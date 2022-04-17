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
    <link rel="icon" href="{{ asset('./img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('./css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/search_chicken.css') }}">
    <script>
        $('input:radio[name="layout"]').change(function() {
            $(".contain_chicken").toggleClass("list");
        });
    </script>
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
            <h1>ค้นหาไก่พันธุ์</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึก และดูข้อมูลไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">ค้นหาไก่พันธุ์</a></div>
            </div>
            <div class="content">
                <form action="#" method="get" class="form_search">
                    <div class="box_content">
                        <div class="top_content">
                            <input type="search" name="search" id="search" placeholder="ค้นหารหัสไก่พันธุ์">
                            <button type="submit" class="btn_search">
                                <img src="{{ asset('./img/search.png') }}" alt="img_search">
                            </button>
                            <div class="layout">
                                <input type="radio" name="layout" id="layout_box" checked>
                                <input type="radio" name="layout" id="layout_list">
                                <label for="layout_box" class="layout_box">
                                    <img src="{{ asset('./img/box.png') }}" alt="layout_box" class="active_layout">
                                </label>
                                <label for="layout_list" class="layout_list">
                                    <img src="{{ asset('./img/list.png') }}" alt="layout_list">
                                </label>
                            </div>

                        </div>
                        <div class="show_chicken">
                            <div class="coop">
                                ไก่พันธุ์ทั้งหมด {{ $num }} ตัว
                            </div>
                            <div class="select_show">
                                <a href="add-chicken" class="add_chicken"><samp>+</samp>เพิ่มไก่พันธุ์</a>
                                <div class="test">

                                    <select name="type" id="type">
                                        <option hidden>ระยะเติบโต</option>
                                        <option value="all">ทั้งหมด</option>
                                        @foreach ($allPhase as $phase)
                                            <option value="{{ $phase->id }}">{{ $phase->phase_name }}</option>
                                        @endforeach
                                    </select>

                                    <select name="coop" id="coop">
                                        @foreach ($allStall as $stall)
                                            <option hidden>คอก</option>
                                            <option value="{{ $stall->id }}">{{ $stall->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                </form>
                <div class="contain_chicken">
                    @foreach ($allChicken as $chicken)
                        <a href="{{ url('chicken/information/' . $chicken->id) }}" class="chicken_box">
                            <img class="img_chicken" src="{{ asset('img/img_chicken.png') }}" alt="chicken icon">
                            <div class="line"></div>
                            <div class="format"><samp>รหัส:</samp>{{ $chicken->id }}</div>
                            <div class="format"><samp>สายพันธุ์:</samp>{{ $chicken->specie_name }}</div>
                            <div class="format"><samp>เพศ:</samp><?php if ($chicken->sex == null) {
    echo '-';
} else {
    echo $chicken->sex;
} ?></div>
                            <div class="format"><samp>สถานะ:</samp>{{ $chicken->phase_name }}</div>
                            <div class="format"><samp>อายุ:</samp><?php $x = strtotime($chicken->birthday);
echo floor(($now - $x) / 604800); ?> <samp>สัปดาห์</samp>
                            </div>
                            <div class="coop_format format"><samp>คอก:</samp>?</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        {{ $allChicken->links() }}
    </div>
    <x-sensor />
    </div>
    <script src="{{ asset('./js/jquery.js') }}"></script>
    <script src="{{ asset('./js/menu.js') }}"></script>
    <script>
        $('#menu').addClass('active_page');
    </script>
</body>

</html>
