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
    <link rel="stylesheet" href="{{ asset('./css/give_layout.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/record_egg.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/report.css') }}">
</head>

<body>
    <x-adminSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{Auth::user()->firstname}}<br>{{Auth::user()->lastname}}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>รายงาน</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึก และจัดการ</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">รายงาน</a></div>
            </div>
            <div class="content">
                <div class="box_content">
                    <form action="" method="get">
                        <div class="top_content">
                            <div class="form_search">
                                <input type="search" name="search" id="search" placeholder="ค้นหารหัสไก่พันธุ์">
                                <button type="submit" class="btn_search">
                                    <img src="{{asset('./img/search.png')}}" alt="img_search">
                                </button>
                            </div>
                        </div>
                        <div class="show_chicken">
                            <div class="coop">
                                <samp>
                                    ประเภทการจัดการ :
                                </samp>
                                <select name="type" id="work">
                                    <option value="1">บันทึกการจัดการไก่</option>
                                    <option value="2">ให้อาหาร</option>
                                    <option value="3">ฉีดวัดซีน</option>
                                    <option value="4">บันทึกน้ำหนักตัวรายสัปดาห์</option>
                                    <option value="5">บันทึกขนาดตัวรายสัปดาห์</option>
                                    <option value="6">คัดเลือกไก่พันธุ์</option>
                                    <option value="7">จับคู่ผสม</option>
                                    <option value="7">บันทึกการจัดการผู้ใช้งาน</option>
                                </select>
                            </div>
                            <div class="select_show">
                                <input type="date" name="date" id="datePicker">
                            </div>
                        </div>
                    </form>
                    <div class="title_table">
                        <table class="table_egg">
                            <tr class="table_title">
                                <th class="trow1">ลำดับ</th>
                                <th class="trow2">รหัสนักศึกษา</th>
                                <th class="trow3">ชื่อนามสกุล</th>
                                <th class="trow4">วัน/เดือน/ปี</th>
                                <th class="trow5">หมายเลขไก่</th>
                                <th class="trow6">รายละเอียด</th>
                            </tr>
                        </table>
                    </div>
                    <div class="record">
                        <table class="table_egg">
                            <tbody>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6"></td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                                <tr class="list_egg">
                                    <td class="brow1">1</td>
                                    <td class="brow2">623020370-3</td>
                                    <td class="brow3">ธนวัฒน์ วัฒนสุชาติ</td>
                                    <td class="brow4">10/01/2564</td>
                                    <td class="brow5">A-03</td>
                                    <td class="brow6">เพิ่มไก่</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <x-sensor />
    </div>
    <script src="{{asset('./js/jquery.js')}}"></script>
    <script src="{{asset('./js/slick.min.js')}}"></script>
    <script src="{{asset('./js/menu.js')}}"></script>
    <script src="{{asset('./js/slider.js')}}"></script>
    <script src="{{asset('./js/table.js')}}"></script>
    <script src="{{asset('./js/popup.js')}}"></script>
    <script>
        $("#menu").addClass("active_page");
    </script>
</body>

</html>
