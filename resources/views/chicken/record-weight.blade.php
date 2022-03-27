<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="{{asset('/./img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('./css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('./css/home.css')}}">
    <link rel="stylesheet" href="{{asset('./css/record_egg.css')}}">
</head>

<body>
    <x-UserSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{Auth::user()->firstname}}<br>{{Auth::user()->lastname}}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>ตารางน้ำหนัก</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึก และดูข้อมูลไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="/chicken/all">ค้นหาไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="/chicken/information/{{$id}}">ไก่พันธุ์หมายเลข {{$id}}</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">ตารางน้ำหนัก</a></div>
            </div>
            <div class="content">
                <div class="box_content">
                    <h2>หมายเลขไก่พันธุ์ : {{$id}}</h2>
                    <div class="title_table">
                        <table class="table_egg">
                            <tr class="table_title">
                                <th class="trow1">รอบที่</th>
                                <th class="trow2">วัน / เดือน / ปี</th>
                                <th class="trow3">น้ำหนัก</th>
                                <th class="trow4">หมายเหตุ</th>
                            </tr>
                        </table>
                    </div>
                    <div class="record">
                        <table class="table_egg">
                            <tbody>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">10 / 01 / 2564</td>
                                    <td class="brow3">11<samp> กก.</samp></td>
                                    <td class="brow4 table_button">
                                        <button class="edit" onclick="weight('1','11')">แก้ไข</button>
                                        <button class="delete" onclick="popup_delete('1')">ลบ</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <x-sensor />
    </div>

    <div class="popup popup-edit">
        <div class="popup_model">
            <i class='bx bxs-x-circle'></i>
            <h4>แก้ไขน้ำหนักรอบที่ <samp class="on"></samp></h4>
            <form action="#" method="get">
                <div class="popup_content">
                    <p>น้ำหนัก :</p>
                    <input type="text" name="inp" id="weight" class="inp inp-num">
                    กิโลกรัม
                </div>
                <div class="event">
                    <button type="submit" class="submit">ตกลง</button>
                    <button type="button" class="cencel">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
    <div class="popup popup-delete">
        <div class="popup_model">
            <i class='bx bxs-x-circle'></i>
            <h4>ต้องการลบน้ำหนักรอบที่ <samp class="on"></samp> หรือไม่?</h4>
            <div class="event-delete">
                <a href="#" class="submit">ตกลง</a>
                <button type="button" class="cencel">ยกเลิก</button>
            </div>
        </div>
    </div>
    <script src="{{asset('./js/jquery.js')}}"></script>
    <script src="{{asset('./js/slick.min.js')}}"></script>
    <script src="{{asset('./js/menu.js')}}"></script>
    <script src="{{asset('./js/slider.js')}}"></script>
    <script src="{{asset('./js/table.js')}}"></script>
    <script src="{{asset('./js/popup.js')}}"></script>


</body>

</html>