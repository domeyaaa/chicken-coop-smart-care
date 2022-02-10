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
    <link rel="stylesheet" href="./css/search_chicken.css">
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
                <a href="./home.html">
                    <i class='bx bx-home'></i>
                    <span class="link_name">หน้าหลัก</span>
                </a>
                <span class="tooltip">หน้าหลัก</span>
            </li>
            <li>
                <a href="./check_Egg.html">
                    <img class="icon" src="./img/egg.png" alt="img_egg">
                    <span class="link_name">บันทึกการให้ไข่</span>
                </a>
                <span class="tooltip">บันทึกการให้ไข่</span>
            </li>
            <li>
                <a href="./bred_Egg.html">
                    <img class="icon" src="./img/sexing.png" alt="img_sexing">
                    <span class="link_name">บันทึกการผสมติด</span>
                </a>
                <span class="tooltip">บันทึกการผสมติด</span>
            </li>
            <li>
                <a href="./menu.html" class="active_page">
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
            <div class="name">thanawat<br>watthanasuchart</div>
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
                            ไก่พันธุ์รวม 450 ตัว
                        </div>
                        <div class="select_show">
                            <a href="#" class="add_chicken"><samp>+</samp>เพิ่มไก่พันธุ์</a>
                            <div class="test">
                                <select name="type" id="type">
                                    <option value="" hidden>เลือกรุ่น</option>
                                    <option value="ไก่เด็ก">ไก่เด็ก</option>
                                    <option value="">ไก่รุ่น</option>
                                    <option value="">ไก่หนุ่ม ไก่สาว</option>
                                    <option value="">ไก่เด็ก</option>
                                </select>
                                <select name="coop" id="coop">
                                    <option value="" hidden>เลือกคอก</option>
                                    <option value="1">คอกที่1</option>
                                    <option value="2">คอกที่2</option>
                                    <option value="3">คอกที่3</option>
                                </select>
                            </div>
                            <input type="date" name="datePicker" id="datePicker">
                        </div>
                    </div>
                    <div class="contain_chicken">
                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">1</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">2</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">3</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">4</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">5</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">6</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">7</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">8</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">9</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">10</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

                        <a href="./chicken_record.html" class="chicken_box">
                            <img class="img_chicken" src="img/img_chicken.png" alt="">
                            <div class="line"></div>
                            <div class="on">11</div>
                            <div class="format"><samp>รหัส:</samp>A-4323</div>
                            <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                            <div class="format"><samp>เพศ:</samp>เมีย</div>
                            <div class="format"><samp>สถานะ:</samp>ไก่เด็ก</div>
                            <div class="format"><samp>อายุ:</samp>6 <samp>สัปดาห์</samp></div>
                            <div class="coop_format format"><samp>คอกที่:</samp>1</div>
                        </a>

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
    <div class="popup">
        <div class="popup_model">
            <div class="popup_conetnt">
                <div class="model_title">เลือกสถานะไก่พันธุ์</div>
                <i class='bx bxs-x-circle'></i>
                <div class="model_container">
                    <a href="#" class="model_chicken">
                        <img src="./img/chick.png" alt="">
                        <p>ไก่เด็ก</p>
                    </a>
                    <a href="#" class="model_chicken">
                        <img src="./img/chickyung.png" alt="">
                        <p>ไก่รุ่น</p>
                    </a>
                    <a href="#" class="model_chicken">
                        <img src="./img/chickboy.png" alt="">
                        <p>ไก่หนุ่ง ไก่นาง</p>
                    </a>
                    <a href="#" class="model_chicken sup">
                        <img src="./img/chicken_sup.png" alt="">
                        <p>ไก่ทดแทน</p>
                    </a>
                    <a href="#" class="model_chicken">
                        <img src="./img/img_chicken.png" alt="">
                        <p>ไก่พ่อพันธุ์ แม่พันธุ์</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="./js/menu.js"></script>
    <script>
        $('input:radio[name="layout"]').change(function () {
            $(".contain_chicken").toggleClass("list");
        });
        $('.add_chicken').on('click', () => {
            $(".popup").show();
        })
        $('.bxs-x-circle').on('click', () => {
            $(".popup").hide();
        })
        
    </script>
</body>

</html>