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
    <link rel="stylesheet" href="./css/check_Egg.css">
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
                <a href="check-egg" class="active_page">
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
                <button>
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">ออกจากระบบ</span>
                </button>
                <span class="tooltip">ออกจากระบบ</span>
            </li>
        </ul>
    </div>
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
                                <img src="./img/search.png" alt="img_search">
                            </button>
                        </form>
                        <div class="layout">
                            <input type="radio" name="layout" id="layout_box" checked>
                            <input type="radio" name="layout" id="layout_list">
                            <label for="layout_box" class="layout_box">
                                <img src="./img/box.png" alt="" class="active_layout">
                            </label>
                            <label for="layout_list" class="layout_list">
                                <img src="./img/list.png" alt="">
                            </label>
                        </div>
                    </div>
                    <div class="show_chicken">
                        <div class="coop">
                            คอกที่ 1
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
                    <form action="#" method="get">
                        <div class="chicken_box">
                            <input type="checkbox" name="" id="A-25">
                            <label for="A-25" class="test">
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">1</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                            <input type="checkbox" name="" id="A-24">
                            <label for="A-24" class="test">
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">2</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                            <input type="checkbox" name="" id="A-21">
                            <label for="A-21" class="test">
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
                                <div class="line"></div>
                                <div class="on">
                                    <div class="chbox"></div>
                                    <div class="numder">3</div>
                                </div>
                                <div class="format"><samp>รหัส:</samp>A-4323</div>
                                <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                <div class="format"><samp>เพศ:</samp>เมีย</div>
                                <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                            </label>
                            <input type="checkbox" name="" id="A-20">
                            <label for="A-20">
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
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
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
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
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
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
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
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
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
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
                                <img class="img_chicken" src="img/img_chicken.png" alt="">
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
    <script src="js/jquery.js"></script>
    <script src="./js/menu.js"></script>
    <script>
        $('input:radio[name="layout"]').change(function() {
            $(".chicken_box").toggleClass("list");
        });
    </script>
</body>

</html>
