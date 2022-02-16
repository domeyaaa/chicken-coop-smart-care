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
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="{{asset('./css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('./css/home.css')}}">
    <link rel="stylesheet" href="{{asset('./css/chicken_record.css')}}">
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <img src="{{ asset('./img/logo.png') }}" alt="logo">
                <div class="logo_name">Chicken Coop Smart Care</div>
            </div>
            <div class="close">
                <i class='bx bx-x'></i>
            </div>
        </div>
        <ul class="nav_list">
            <li>
                <a href="/home">
                    <i class='bx bx-home'></i>
                    <span class="link_name">หน้าหลัก</span>
                </a>
                <span class="tooltip">หน้าหลัก</span>
            </li>
            <li>
                <a href="/check-egg">
                    <img class="icon" src="{{asset('./img/egg.png')}}" alt="img_egg">
                    <span class="link_name">บันทึกการให้ไข่</span>
                </a>
                <span class="tooltip">บันทึกการให้ไข่</span>
            </li>
            <li>
                <a href="/breed-egg">
                    <img class="icon" src="{{ asset('./img/sexing.png') }}" alt="img_sexing">
                    <span class="link_name">บันทึกการผสมติด</span>
                </a>
                <span class="tooltip">บันทึกการผสมติด</span>
            </li>
            <li>
                <a href="/menu" class="active_page">
                    <img class="icon" src="{{asset('./img/edit.png')}}" alt="img_edit">
                    <span class="link_name">บันทึก และดูข้อมูลไก่พันธุ์</span>
                </a>
                <span class="tooltip">บันทึก และดูข้อมูลไก่พันธุ์</span>
            </li>
            <li>
                <a href="#">
                    <img class="icon" src="{{ asset('./img/calendar.png') }}" alt="img_calendar">
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
            <div class="name">{{ Auth::user()->firstname }}<br>{{ Auth::user()->lastname }}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>ข้อมูลไก่พันธุ์</h1>
            <div class="content">
                <div class="box_content">
                    <h2>หมายเลขไก่พันธุ์ : {{$info->id}}</h2>
                    <div class="record">
                        <div class="record_funtion">
                            <img class="img_chicke" src="{{asset('./img/img_chicken.png')}}" alt="img_chicken">
                            <div class="funtion_box">
                                <a class="funtion" href="#">ตารางน้ำหนัก</a>
                                <a class="funtion" href="#">ตารางขนาดตัว</a>
                                <a class="funtion" href="#">ตารางอาหาร</a>
                                <a class="funtion" href="#">ตารางวัคซีน</a>
                                <a class="funtion" href="#">ตารางจับคู่ผสม</a>
                                <a class="funtion" href="./record_egg.html">ตารางการให้ไข่</a>
                                <a class="funtion out" href="#">ปลดประจำการ</a>
                                <a class="funtion edit" href="#">แก้ไขข้อมูล</a>
                                <a class="funtion die" href="#">ตาย</a>
                            </div>
                        </div>
                        <div class="record_chicken">
                            <div class="format"><samp>หมายเลขพ่อไก่พันธุ์:</samp>{{$info->father_id}}</div>
                            <div class="format"><samp>หมายเลขคอก:</samp>?</div>
                            <div class="format"><samp>หมายเลขแม่ไก่พันธุ์:</samp>{{$info->mother_id}}</div>
                            <div class="format"><samp>พันธุ์ไก่:</samp>{{$info->specie_name}}</div>
                            <div class="format"><samp>เพศ:</samp><?php if($info->sex == null){
                                echo '-';
                            }else{
                                echo $info->sex;
                            } ?></div>
                            <div class="format"><samp>อายุ:</samp><?php $x = strtotime($info->birthday);
                                echo floor(($now-$x)/604800); ?> สัปดาห์</div>
                            <div class="format"><samp>อุณหภูมิขณะฟัก:</samp>??  ํC</div>
                            <div class="format"><samp>สถานะ:</samp>{{$info->phase_name}}</div>
                            <div class="format"><samp>น้ำหนัก:</samp>?? kg</div>
                            <div class="format"><samp>ความยาวรอบอก:</samp>?? cm</div>
                            <div class="format"><samp>ความยาวแข้ง:</samp>?? cm</div>
                            <div class="format"><samp>วันที่เกิด:</samp>{{$info->birthday}}</div>
                            <div class="format"><samp>อัตรากาารให้ไข่:</samp>??%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="sonser">
            <div class="username">
                <i class='bx bxs-user-circle'></i>
                <div class="name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
            </div>
            <div class="outside">
                <p>วัดค่าภายนอก</p>
                <div class="sonser_outside">
                    <div class="get_sonser">
                        <img src="{{ asset('./img/temperature.png')}}" alt="img_tem">
                        <div class="amount">36 °C</div>
                    </div>
                    <div class="get_sonser">
                        <img src="{{asset('./img/humidity.png')}}" alt="img_humidity">
                        <div class="amount">76%</div>
                    </div>
                </div>
            </div>
            <div class="inside">
                <p>วัดค่าภายใน</p>
                <div class="sonser_inside">
                    <div class="get_sonser">
                        <img src="{{asset('./img/temperature.png')}}" alt="img_tem">
                        <div class="amount">36 °C</div>
                    </div>
                    <div class="get_sonser">
                        <img src="{{asset('./img/humidity.png')}}" alt="img_humidity">
                        <div class="amount">76%</div>
                    </div>
                </div>
                <div class="sonser_inside">
                    <div class="get_sonser">
                        <img src="{{asset('./img/light.png')}}" alt="img_light">
                        <div class="amount">15 lx</div>
                    </div>
                    <div class="get_sonser">
                        <img src="{{asset('./img/NH3.png')}}" alt="img_NH3">
                        <div class="amount">15%</div>
                    </div>
                </div>
            </div>
            <div class="analyze">
                <p>ผลการวิเคราะห์</p>
                <div class="sonser_analyze">
                    <div class="get_sonser">
                        <img src="{{asset('./img/temperature.png')}}" alt="img_tem">
                        <div class="amount">ปกติ</div>
                    </div>
                    <div class="get_sonser">
                        <img src="{{asset('./img/temperature.png')}}" alt="img_humidity">
                        <div class="amount">ปกติ</div>
                    </div>
                </div>
                <div class="sonser_analyze">
                    <div class="get_sonser">
                        <img src="{{asset('./img/light.png')}}" alt="img_light">
                        <div class="amount">ค่อนข้างน้อย</div>
                    </div>
                    <div class="get_sonser">
                        <img src="{{asset('./img/NH3.png')}}" alt="img_NH3">
                        <div class="amount">ปกติ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('./js/menu.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
</body>

</html>