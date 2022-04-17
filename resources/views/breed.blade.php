<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="{{asset('./css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('./css/home.css')}}">
    <link rel="stylesheet" href="{{asset('./css/check_Egg.css')}}">
    <link rel="stylesheet" href="{{asset('./css/bred.css')}}">

</head>

<body>
    
    <x-userSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">thanawat<br>watthanasuchart</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>จับคู่ผสม</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึก และดูข้อมูลไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">จับคู่ผสม</a></div>
            </div>
            <div class="content">
                <div class="box_content">
                    <div class="bred_container">
                        <form action="" method="get">
                            <div class="title">
                                <input type="date" name="date" id="date" required>
                            </div>
                            <div class="layout_bred">
                                <div class="container_male">
                                    <div class="box_male male_chick box_layout">
                                        <i class='bx bxs-plus-circle after_add_male'></i>
                                        <p class="after_add_male">เลือกพ่อพันธุ์</p>
                                    </div>
                                </div>
                                <img src="{{asset('./img/logo.png')}}" alt="img_love" class="img_bred">
                                <div class="container_female">
                                    <div class="sup_female">
                                        <div class="box_female female box_layout">
                                            <i class='bx bxs-plus-circle'></i>
                                            <p>เลือกแม่พันธุ์</p>
                                        </div>
                                    </div>
                                    <div class="btn_addF">
                                        <button type="button"><i class="bx bxs-plus-circle"></i> เพิ่ม</button>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_event_bred">
                                <button type="submit" class="btn_submit">เริ่มจับคู่ผสมพันธุ์</button>
                                <button type="reset" class="btn_reset">รีเซ็ต</button>
                                <div class="note_box">
                                    <div class="title_note"><samp>*</samp>หมายเหตุ :</div>
                                    <div class="note">พ่อพันธุ์สามารถเลือกได้เพียงตัวเดียว<br>
                                        แต่แม่พันธุ์สามารถเลือกได้หลายตัว</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-sensor />
    </div>

    <div class="popup popup_male">
        <div class="popup_model">
            <i class='bx bxs-x-circle'></i>

            <form action="#" method="post">
                <div class="top_content">
                    <div class="form_search">
                        <input type="search" name="search" id="search" placeholder="ค้นหารหัสไก่พันธุ์">
                        <button type="submit" class="btn_search">
                            <img src="{{asset('./img/search.png')}}" alt="img_search">
                        </button>
                    </div>
                    <div class="layout">
                        <input type="radio" name="layout" id="layout_box" checked>
                        <input type="radio" name="layout" id="layout_list">
                        <label for="layout_box" class="layout_box">
                            <img src="{{asset('./img/box.png')}}" alt="" class="active_layout">
                        </label>
                        <label for="layout_list" class="layout_list">
                            <img src="{{asset('./img/list.png')}}" alt="">
                        </label>
                    </div>
                </div>
                <div class="show_chicken">
                    <div class="coop">
                        จำนวนไก่พ่อพันธุ์<br class="br"> 20 ตัว
                    </div>
                    <div class="select_show">
                        <select name="coop" id="filter">
                            <option value="" hidden>ตัวกรอง</option>
                            <option value="">ผสมติด</option>
                            <option value="">น้ำหนัก</option>
                            <option value="">อายุ</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="chicken_box">
                <label id="A-4323" onclick="add_male('A-4323')">
                    <img class="img_chicken" src="{{asset('./img/img_chicken.png')}}" alt="">
                    <div class="line"></div>
                    <div class="on">
                        <div class="chbox chbox_male"></div>
                        <div class="nunder_male">1</div>
                    </div>
                    <div class="format"><samp>รหัส:</samp>A-4323</div>
                    <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                    <div class="format"><samp>เพศ:</samp>ผู้</div>
                    <div class="format"><samp>น้ำหนัก:</samp>4 กิโลกรัม</div>
                    <div class="format"><samp>ผสมติดไปแล้ว:</samp>46 ฟอง</div>
                </label>
                <label id="A-4" onclick="add_male('A-4')">
                    <img class="img_chicken" src="{{asset('./img/img_chicken.png')}}" alt="">
                    <div class="line"></div>
                    <div class="on">
                        <div class="chbox chbox_male"></div>
                        <div class="nunder_male">2</div>
                    </div>
                    <div class="format"><samp>รหัส:</samp>A-4</div>
                    <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                    <div class="format"><samp>เพศ:</samp>ผู้</div>
                    <div class="format"><samp>น้ำหนัก:</samp>4 กิโลกรัม</div>
                    <div class="format"><samp>ผสมติดไปแล้ว:</samp>46 ฟอง</div>
                </label>

            </div>
        </div>
    </div>

    <div class="popup popup_female">
        <div class="popup_model">
            <i class='bx bxs-x-circle'></i>

            <form action="#" method="post">
                <div class="top_content">
                    <div class="form_search">
                        <input type="search" name="search" id="search" placeholder="ค้นหารหัสไก่พันธุ์">
                        <button type="submit" class="btn_search">
                            <img src="{{asset('./img/search.png')}}" alt="img_search">
                        </button>
                    </div>
                    <div class="layout_sup">
                        <input type="radio" name="layout_sup" id="layout_box_sup" checked>
                        <input type="radio" name="layout_sup" id="layout_list_sup">
                        <label for="layout_box_sup" class="layout_box_sup">
                            <img src="{{asset('./img/box.png')}}" alt="" class="active_layout_sup">
                        </label>
                        <label for="layout_list_sup" class="layout_list_sup">
                            <img src="{{asset('./img/list.png')}}" alt="">
                        </label>
                    </div>
                </div>
                <div class="show_chicken">
                    <div class="coop">
                        จำนวนไก่พ่อพันธุ์<br class="br"> 20 ตัว
                    </div>
                    <div class="select_show">
                        <select name="coop" id="filter">
                            <option value="" hidden>ตัวกรอง</option>
                            <option value="">ผสมติด</option>
                            <option value="">น้ำหนัก</option>
                            <option value="">อายุ</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="chicken_box">
                <input type="checkbox" name="" id="A-25" onclick="getPc(this.id)" value="1">
                <label for="A-25" class="test">
                    <img class="img_chicken" src="{{asset('./img/img_chicken.png')}}" alt="">
                    <div class="line"></div>
                    <div class="on">
                        <div class="chbox"></div>
                        <div class="numder">1</div>
                    </div>
                    <div class="format"><samp>รหัส:</samp>A-25</div>
                    <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                    <div class="format"><samp>เพศ:</samp>เมีย</div>
                    <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                    <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                </label>
                <input type="checkbox" name="" id="A-24" onclick="getPc(this.id)" value="2">
                <label for="A-24" class="test">
                    <img class="img_chicken" src="{{asset('./img/img_chicken.png')}}" alt="">
                    <div class="line"></div>
                    <div class="on">
                        <div class="chbox"></div>
                        <div class="numder">2</div>
                    </div>
                    <div class="format"><samp>รหัส:</samp>A-24</div>
                    <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                    <div class="format"><samp>เพศ:</samp>เมีย</div>
                    <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                    <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                </label>
                <input type="checkbox" name="" id="A-21" onclick="getPc(this.id)" value="3">
                <label for="A-21" class="test">
                    <img class="img_chicken" src="{{asset('./img/img_chicken.png')}}" alt="">
                    <div class="line"></div>
                    <div class="on">
                        <div class="chbox"></div>
                        <div class="numder">3</div>
                    </div>
                    <div class="format"><samp>รหัส:</samp>A-21</div>
                    <div class="format"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                    <div class="format"><samp>เพศ:</samp>เมีย</div>
                    <div class="format"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                    <div class="format"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                </label>
            </div>
            <div class="btn_event">
                <button type="button" class="btn_submit btn_female" onclick="">ยืนยัน</button>
                <button type="reset" class="btn_reset">รีเซ็ต</button>
            </div>
        </div>
    </div>


    <script src="{{asset('./js/jquery.js')}}"></script>
    <script src="{{asset('./js/menu.js')}}"></script>
    <script src="{{asset('./js/popup.js')}}"></script>
    <script src="{{asset('./js/bred.js')}}"></script>
</body>

</html>