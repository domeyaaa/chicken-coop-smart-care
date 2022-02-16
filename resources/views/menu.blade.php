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
                <a href="home">
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
                <a href="menu" class="active_page">
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
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">ออกจากระบบ</span>
                </a>
                <span class="tooltip">ออกจากระบบ</span>
            </li>
        </ul>
    </div>
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">thanawat<br>watthanasuchart</div>
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
                                <img src="./img/selection.png" alt="img_search">
                                <p>ค้นหา เพิ่ม และแก้ไข</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/sex.png" alt="img_sex">
                                <p>ทำนายเพศของลูกไก่</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/give_food.png" alt="img_food">
                                <p>ให้อาหาร</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/vaccinate.png" alt="img_vaccinate">
                                <p>ฉีดวัดซีน</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/weight.png" alt="img_weight">
                                <p>บันทึกน้ำหนักตัวรายสัปดาห์</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/body_size.png" alt="img_bodysize">
                                <p>บันทึกขนาดตัวรายสัปดาห์</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/get_chicken.png" alt="img_getchicken">
                                <p>คัดเลือกไก่พันธุ์</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/compare.png" alt="img_compare">
                                <p>เปรียบเทียบการให้ผลผลิต</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/love.png" alt="img_live">
                                <p>จับคู่ผสม</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="#">
                                <img src="./img/report.png" alt="img_report">
                                <p>รายงาน</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="sonser">
            <div class="username">
                <i class='bx bxs-user-circle'></i>
                <div class="name">thanawat watthanasuchart</div>
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
    <script src="./js/menu.js"></script>
    <script>
        $('input:radio[name="layout"]').change(function () {
            $(".chicken_box").toggleClass("list");
        });
    </script>
</body>

</html>