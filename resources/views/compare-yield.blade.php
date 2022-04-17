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
    <x-user-sidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{ Auth::user()->firstname }}<br>{{ Auth::user()->lastname }}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>เปรียบเทียบการให้ผลผลิต</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึก และดูข้อมูลไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">เปรียบเทียบการให้ผลผลิต</a></div>

            </div>
            <div class="content">
                <div class="box_content">
                    <form action="#" method="get">
                        <div class="top_content">
                            <div class="form_search">
                                <input type="search" name="search" id="search" placeholder="ค้นหารหัสไก่พันธุ์">
                                <button type="submit" class="btn_search">
                                    <img src="{{ asset('./img/search.png') }}" alt="img_search">
                                </button>
                            </div>
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
                        <div class="show_chicken">
                            <div class="coop">
                                จำนวนไก่พันธุ์ 40 ตัว
                            </div>
                            <div class="select_show">
                                <select name="sex" id="sex">
                                    <option value="" hidden>เลือกเพศ</option>
                                    <option value="ผู้">ผู้</option>
                                    <option value="เมีย">เมีย</option>
                                </select>
                                <input type="date" name="datePicker" id="datePicker">
                            </div>
                        </div>
                    </form>
                    <form action="/compare-yield-result" method="get">
                        <div class="chicken_box">
                            <input type="checkbox" name="" id="A-20">
                            <label for="A-20">
                                <img class="img_chicken" src="{{ asset('./img/img_chicken.png') }}" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">4</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                            <input type="checkbox" name="" id="A-244">
                            <label for="A-244">
                                <img class="img_chicken" src="{{ asset('./img/img_chicken.png') }}" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">5</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                            <input type="checkbox" name="" id="A-246">
                            <label for="A-246">
                                <img class="img_chicken" src="{{ asset('./img/img_chicken.png') }}" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">6</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                            <input type="checkbox" name="" id="A-247">
                            <label for="A-247">
                                <img class="img_chicken" src="{{ asset('./img/img_chicken.png') }}" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">7</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                            <input type="checkbox" name="" id="A-240">
                            <label for="A-240">
                                <img class="img_chicken" src="{{ asset('./img/img_chicken.png') }}" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">8</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                            <input type="checkbox" name="" id="A-240">
                            <label for="A-240">
                                <img class="img_chicken" src="{{ asset('./img/img_chicken.png') }}" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">9</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                        </div>
                        <div class="btn_event">
                            <button type="submit" class="btn_submit">ยืนยัน</button>
                            <button type="reset" class="btn_reset">รีเซ็ต</button>
                        </div>
                    </form>
                </div>
            </div>
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
