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
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/slick.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <img src="./img/logo.png" alt="logo">
                <div class="logo_name">Chicken Coop Smart Care</div>
            </div>
            <div class="close">
                <i class='bx bx-x'></i>
            </div>
        </div>
        <ul class="nav_list">
            <li>
                <a href="home" class="active_page">
                    <i class='bx bx-home'></i>
                    <span class="link_name">หน้าหลัก</span>
                </a>
                <span class="tooltip">หน้าหลัก</span>
            </li>
            <li>
                <a href="check-egg">
                    <img class="icon" src="./img/egg.png" alt="img_egg">
                    <span class="link_name">บันทึกการให้ไข่</span>
                </a>
                <span class="tooltip">บันทึกการให้ไข่</span>
            </li>
            <li>
                <a href="breed-egg">
                    <img class="icon" src="./img/sexing.png" alt="img_sexing">
                    <span class="link_name">บันทึกการผสมติด</span>
                </a>
                <span class="tooltip">บันทึกการผสมติด</span>
            </li>
            <li>
                <a href="menu">
                    <img class="icon" src="./img/edit.png" alt="img_edit">
                    <span class="link_name">บันทึก และดูข้อมูลไก่พันธุ์</span>
                </a>
                <span class="tooltip">บันทึก และดูข้อมูลไก่พันธุ์</span>
            </li>
            <li>
                <a href="#">
                    <img class="icon" src="./img/calendar.png" alt="img_calendar">
                    <span class="link_name">ดูประวัติค่าอุณหภูมิ ความชื้น <br>และความเข้มแสง</span>
                </a>
                <span class="tooltip">ดูประวัติค่าเซนเซอร์</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">ตั้งค่า</span>
                </a>
                <span class="tooltip">ตั้งค่า</span>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        <i class='bx bx-log-out'></i>
                        <span class="link_name">ออกจากระบบ</span>
                    </button>
                    <span class="tooltip">ออกจากระบบ</span>
                </form>
            </li>
        </ul>
    </div>
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{Auth::user()->firstname}}<br>{{Auth::user()->lastname}}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>โรงเรือนเลี้ยงของมหาวิทยาลัยขอนแก่น</h1>
            <div class="content">
                <div class="box_content">
                    <div class="text-content">
                        <div class="title_content">
                            <div class="title">แม่พันธุ์ที่มีแนวโนวในการให้ไข่ดี</div>
                            <a href="#">ดูทั้งหมด</a>
                        </div>
                        <div class="carousel clearfix">

                            <div class="carousel-view clearfix carousel-view2">

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               

                            </div><!-- carousel-view -->
                        </div>
                    </div>
                </div>



            </div>
            <div class="content">
                <div class="box_content">
                    <div class="text-content">
                        <div class="title_content">
                            <div class="title">แม่พันธุ์ที่มีแนวโนวในการให้ไข่ดี</div>
                            <a href="#">ดูทั้งหมด</a>
                        </div>
                        <div class="carousel clearfix">

                            <div class="carousel-view clearfix">

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->
                               
                            </div><!-- carousel-view -->
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div class="sonser">
            <div class="username">
                <i class='bx bxs-user-circle'></i>
                <div class="name">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</div>
            </div>
            <div class="outside">
                <p>วัดค่าภายนอก</p>
                <div class="sonser_outside">
                    <div class="get_sonser">
                        <img src="./img/temperature.png" alt="img_tem">
                        <div class="amount">36 °C</div>
                    </div>
                    <div class="get_sonser">
                        <img src="./img/humidity.png" alt="img_humidity">
                        <div class="amount">76%</div>
                    </div>
                </div>
            </div>
            <div class="inside">
                <p>วัดค่าภายใน</p>
                <div class="sonser_inside">
                    <div class="get_sonser">
                        <img src="./img/temperature.png" alt="img_tem">
                        <div class="amount">36 °C</div>
                    </div>
                    <div class="get_sonser">
                        <img src="./img/humidity.png" alt="img_humidity">
                        <div class="amount">76%</div>
                    </div>
                </div>
                <div class="sonser_inside">
                    <div class="get_sonser">
                        <img src="./img/light.png" alt="img_light">
                        <div class="amount">15 lx</div>
                    </div>
                    <div class="get_sonser">
                        <img src="./img/NH3.png" alt="img_NH3">
                        <div class="amount">15%</div>
                    </div>
                </div>
            </div>
            <div class="analyze">
                <p>ผลการวิเคราะห์</p>
                <div class="sonser_analyze">
                    <div class="get_sonser">
                        <img src="./img/temperature.png" alt="img_tem">
                        <div class="amount">ปกติ</div>
                    </div>
                    <div class="get_sonser">
                        <img src="./img/humidity.png" alt="img_humidity">
                        <div class="amount">ปกติ</div>
                    </div>
                </div>
                <div class="sonser_analyze">
                    <div class="get_sonser">
                        <img src="./img/light.png" alt="img_light">
                        <div class="amount">ค่อนข้างน้อย</div>
                    </div>
                    <div class="get_sonser">
                        <img src="./img/NH3.png" alt="img_NH3">
                        <div class="amount">ปกติ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="./js/menu.js"></script>
    <script src="js/slider.js"></script>
</body>

</html>