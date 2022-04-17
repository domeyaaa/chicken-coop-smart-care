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
    <link rel="stylesheet" href="{{ asset('./css/check_Egg.css') }}">
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
            <h1>บันทึกการให้ไข่</h1>
            <div class="content">
                <div class="box_content">
                    <div class="top_content">
                        <form action="#" method="get" class="form_search">
                            <input type="search" name="search" id="search" placeholder="ค้นหารหัสไก่พันธุ์">
                            <button type="submit" class="btn_search">
                                <img src="{{ asset('./img/search.png') }}" alt="img_search">
                            </button>
                        </form>
                        <div class="layout">
                            <input type="radio" name="layout" id="layout_box" checked>
                            <input type="radio" name="layout" id="layout_list">
                            <label for="layout_box" class="layout_box">
                                <img src="{{ asset('./img/box.png') }}" alt="" class="active_layout">
                            </label>
                            <label for="layout_list" class="layout_list">
                                <img src="{{ asset('./img/list.png') }}" alt="">
                            </label>
                        </div>
                    </div>
                    <form action="#" method="post">
                        @csrf
                    <div class="show_chicken">
                        <div class="coop">
                            ไก่แม่พันธุ์ ทั้งหมด {{ $num }} ตัว
                        </div>
                        <div class="select_show">
                            <input type="date" name="datePicker" id="datePicker">
                        </div>
                    </div>
                            <div class="chicken_box">
                                @foreach ($chickens as $chicken)
                                <input type="checkbox" name="checkEgg[]" id="{{ $chicken->id }}" value="{{ $chicken->id }}">
                                <label for="{{ $chicken->id }}" class="test">
                                    <img class="img_chicken" src="{{ asset('./img/img_chicken.png') }}" alt="">
                                    <div class="line"></div>
                                    <div class="on">
                                        <div class="chbox"></div>
                                    </div>
                                    <div class="format"><samp>รหัส:</samp>{{ $chicken->id }}</div>
                                    <div class="format"><samp>สารพันธุ์:</samp>{{ $chicken->specie_name }}
                                    </div>
                                    <div class="format"><samp>เพศ:</samp>เมีย</div>
                                    <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                    <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                </label>
                                @endforeach
                            </div>
                        <div class="btn_event">
                            <button type="submit" class="btn_submit">ยืนยัน</button>
                            <button type="reset" class="btn_reset">รีเซ็ต</button>
                        </div>
                    </form>
                </div>
            </div>
            {{ $chickens->links() }}
        </div>
        <x-sensor />
    </div>
    <script src="{{ asset('./js/jquery.js') }}"></script>
    <script src="{{ asset('./js/menu.js') }}"></script>
    <script>
        $('input:radio[name="layout"]').change(function() {
            $(".chicken_box").toggleClass("list");
        });
        $('#check-egg').addClass('active_page');
    </script>
</body>

</html>
