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
    <link rel="stylesheet" href="./css/bred_Egg.css">
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
                <a href="breed-egg" class="active_page">
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
            <h1>บันทึกไข่ที่มีเชื้อ</h1>
            <div class="content">
                <div class="box_content">
                    <div class="top_content">
                        <form action="#" method="get" class="form_search">
                            <input type="text" name="search" id="search" placeholder="ค้นหารหัสไก่พันธุ์">
                            <button type="submit" class="btn_search">
                                <img src="./img/search.png" alt="img_search">
                            </button>
                        </form>
                    </div>
                    <div class="show_chicken">
                        <div class="coop">
                            ไก่พ่อพันธุ์รวม 12 ตัว
                        </div>
                        <div class="select_show">
                            <select name="coop" id="coop">
                                <option value="" hidden>เลือกคอก</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <input type="date" name="datePicker" id="datePicker">
                        </div>
                    </div>
                    <form action="#" method="get" class="box">
                        <div class="content_box">
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            <div class="chicken_box">
                                <div class="number">1</div>
                                <div class="id"><samp>รหัส:</samp>A-213</div>
                                <div class="type"><samp>สายพันธุ์:</samp>ไก่ขาว</div>
                                <div class="age"><samp>อายุ:</samp>10 สัปดาห์</div>
                                <div class="bred"><samp>มีเชื้อไปแล้ว:</samp>20 ฟอง</div>
                                <div class="have_bred"><samp>มีเชื้อ:</samp><input type="text"></div>
                            </div>
                            
                        </div>
                        <div class="btn_event">
                            <button type="submit" class="btn_submit">ยืนยัน</button>
                            <button type="reset" class="btn_reset">รีเซ็ต</button>
                        </div>
                    </form>
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