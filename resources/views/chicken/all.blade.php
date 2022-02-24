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
    <link rel="stylesheet" href="{{asset('./css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('./css/home.css')}}">
    <link rel="stylesheet" href="{{asset('./css/search_chicken.css')}}">
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
            <div class="content">
                <div class="box_content">
                    <div class="top_content">
                        <form action="#" method="get" class="form_search">

                            <input type="search" name="search" id="search" placeholder="ค้นหารหัสไก่พันธุ์">
                            <button type="submit" class="btn_search">
                                <img src="{{ asset('./img/search.png')}}" alt="img_search">
                            </button>
                        </form>

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
                            <a href="#" class="add_chicken"><samp>+</samp>เพิ่มไก่พันธุ์</a>
                            <div class="test">

                                <select name="type" id="type">
                                    <option value="0" hidden>ระยะเติบโต</option>
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
                    <div class="contain_chicken">
                        @foreach ($allChicken as $chicken)
                            <a href="{{url('chicken/information/'.$chicken->id)}}" class="chicken_box">
                                <img class="img_chicken" src="{{asset('img/img_chicken.png')}}" alt="chicken icon">
                                <div class="line"></div>
                                <div class="on">1</div>
                                <div class="format"><samp>หมายเลข:</samp>{{ $chicken->id }}</div>
                                <div class="format"><samp>สายพันธุ์:</samp>{{ $chicken->specie_name }}</div>
                                <div class="format"><samp>เพศ:</samp><?php if($chicken->sex == null){
                                    echo '-';
                                }else{
                                    echo $chicken->sex;
                                } ?></div>
                                <div class="format"><samp>สถานะ:</samp>{{ $chicken->phase_name }}</div>
                                <div class="format"><samp>อายุ:</samp><?php $x = strtotime($chicken->birthday);
echo floor(($now-$x)/604800); ?> <samp>สัปดาห์</samp>
                                </div>
                                <div class="coop_format format"><samp>คอก:</samp>?</div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <x-sensor /> 
    </div>
    <div class="popup">
        <div class="popup_model">
            <div class="popup_conetnt">
                <div class="model_title">เลือกสถานะไก่พันธุ์</div>
                <i class='bx bxs-x-circle'></i>
                <div class="model_container">
                    <a href="#" class="model_chicken">
                        <img src="{{asset('./img/chick.png')}}" alt="">
                        <p>ไก่เด็ก</p>
                    </a>
                    <a href="#" class="model_chicken">
                        <img src="{{asset('./img/chickyung.png')}}" alt="">
                        <p>ไก่รุ่น</p>
                    </a>
                    <a href="#" class="model_chicken">
                        <img src="{{asset('./img/chickboy.png')}}" alt="">
                        <p>ไก่หนุ่ง ไก่นาง</p>
                    </a>
                    <a href="#" class="model_chicken sup">
                        <img src="{{asset('./img/chicken_sup.png')}}" alt="">
                        <p>ไก่ทดแทน</p>
                    </a>
                    <a href="#" class="model_chicken">
                        <img src="{{asset('./img/img_chicken.png')}}" alt="">
                        <p>ไก่พ่อพันธุ์ แม่พันธุ์</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{asset('./js/menu.js')}}"></script>
    <script>
        $('input:radio[name="layout"]').change(function() {
            $(".contain_chicken").toggleClass("list");
        });
        $('.add_chicken').on('click', () => {
            $(".popup").show();
        })
        $('.bxs-x-circle').on('click', () => {
            $(".popup").hide();
        })
        $('#menu').addClass('active_page');
    </script>
</body>

</html>
