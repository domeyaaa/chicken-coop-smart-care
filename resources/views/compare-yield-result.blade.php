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
    <link rel="stylesheet" href="{{ asset('./css/comparison.css') }}">
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
                <div class="namepage"><a href="/compare-yield">เปรียบเทียบการให้ผลผลิต</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">ผลลัพธ์เปรียบเทียบการให้ผลผลิต</a></div>
            </div>
            <div class="content">
                <div class="box_content">
                    <div class="com_contain">
                        <!-- start box -->
                        <div class="chicken_box">
                            <div class="chicken">
                                <img src="{{ asset('./img/img_chicken.png') }}" alt="img_chicken">
                                <div class="title">
                                    <p><samp>รหัส : </samp>A-037</p>
                                    <div class="detail">
                                        <p><samp>พันธุ์ : </samp>ไก่ขาว</p>
                                        <p><samp>เพศ : </samp>เมีย</p>
                                        <p><samp>อายุ : </samp>24 สัปดาห์</p>
                                        <p><samp>น้ำหนัก : </samp>2.5 kg</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comparison">
                                <div class="box_com">
                                    <p>การให้ไข่ (10%)</p>
                                    <div class="box_layout">
                                        <div class="val_layout val_egg" style="width: 20%;">10%</div>
                                    </div>
                                </div>
                                <div class="box_com">
                                    <p>การผสมติด (50%)</p>
                                    <div class="box_layout">
                                        <div class="val_layout val_bred" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                                <div class="box_com">
                                    <p>ไข่มีเชื้อ (50%)</p>
                                    <div class="box_layout">
                                        <div class="val_layout val_sex" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- start box -->
                        <div class="chicken_box">
                            <div class="chicken">
                                <img src="{{ asset('./img/img_chicken.png') }}" alt="img_chicken">
                                <div class="title">
                                    <p><samp>รหัส : </samp>A-037</p>
                                    <div class="detail">
                                        <p><samp>พันธุ์ : </samp>ไก่ขาว</p>
                                        <p><samp>เพศ : </samp>เมีย</p>
                                        <p><samp>อายุ : </samp>24 สัปดาห์</p>
                                        <p><samp>น้ำหนัก : </samp>2.5 kg</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comparison">
                                <div class="box_com">
                                    <p>การให้ไข่ (30%)</p>
                                    <div class="box_layout">
                                        <div class="val_layout val_egg" style="width: 30%;">20%</div>
                                    </div>
                                </div>
                                <div class="box_com">
                                    <p>การผสมติด (50%)</p>
                                    <div class="box_layout">
                                        <div class="val_layout val_bred" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                                <div class="box_com">
                                    <p>ไข่มีเชื้อ (50%)</p>
                                    <div class="box_layout">
                                        <div class="val_layout val_sex" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                    <a href="/compare-yield" class="btn-back">ยกเลิก</a>
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
