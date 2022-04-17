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
    <link rel="stylesheet" href="{{ asset('./css/record_egg.css') }}">
</head>

<body @if (session('success')) onload="success('{{ session('success') }}')" @endif
    @if (session('error')) onload="error('{{ session('error') }}')" @endif>
    <x-userSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{ Auth::user()->firstname }}<br>{{ Auth::user()->lastname }}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>ตารางบันทึกวัคซีน</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึก และดูข้อมูลไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="/chicken/all">ค้นหาไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="/chicken/information/{{ $id }}">ไก่พันธุ์รหัส
                        {{ $id }}</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">ตารางบันทึกวัคซีน</a></div>
            </div>
            <div class="content">
                <div class="box_content">
                    <h2>ไก่พันธุ์รหัส : {{ $id }}</h2>
                    <div class="title_table">
                        <table class="table_egg">
                            <tr class="table_title">
                                <th class="trow1">ลำดับ</th>
                                <th class="trow2">วัน / เดือน / ปี</th>
                                <th class="trow3">ชื่อวัคซีน</th>
                                <th class="trow5">น้ำหนัก</th>
                                <th class="trow6">หมายเหตุ</th>
                            </tr>
                        </table>
                    </div>
                    <div class="record">
                        <table class="table_egg">
                            <tbody>
                                @php($i = 1)
                                @foreach ($vaccinates as $vaccinate)
                                    <tr class="list_egg">
                                        <td class="brow1">{{ $i }}</td>
                                        <td class="brow2">{{ $vaccinate->created_at->format('d/m/Y') }}</td>
                                        <td class="brow3">{{ $vaccinate->name }}</td>
                                        <td class="brow5">{{ $vaccinate->chicken_weight }}<samp> กก.</samp>
                                        </td>
                                        <td class="brow6 table_button">
                                            <button class="edit"
                                                onclick="vaccin('{{ $i }}','{{ $vaccinate->chicken_weight }}','{{ $vaccinate->id }}')">แก้ไข</button>
                                            <button class="delete"
                                                onclick="del('{{ $i++ }}','{{ $vaccinate->id }}')">ลบ</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $vaccinates->links() }}
        </div>
        <x-sensor />
    </div>

    <div class="popup popup-edit">
        <div class="popup_model">
            <i class='bx bxs-x-circle'></i>
            <h4>แก้ไขวัคซีนรอบที่ <samp class="on"></samp></h4>
            <form action="/save-edit-record-vaccine" method="POST">
                <input type="hidden" name="id">
                @csrf
                <div class="popup_content">
                    <p>ชนิดวัคซีน :</p>
                    <select name="v_id" class="vid">
                        @foreach ($allVaccine as $vc)
                            <option value="{{ $vc->id }}">{{ $vc->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="popup_content">
                    <p>น้ำหนัก :</p>
                    <input type="text" name="inp" id="weight" class="inp">
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
            <h4>ต้องการลบวัคซีนรอบที่ <samp class="on"></samp> หรือไม่?</h4>
            <div class="event-delete">
                <a href="#" class="submit submit_delete">ตกลง</a>
                <button type="button" class="cencel">ยกเลิก</button>
            </div>
        </div>
    </div>

    <div class="popup_success">
        <div class="popup_model12">
            <div class="popup_conetnt12">
                <i class='bx bxs-x-circle'></i>
                <div class="in-ct-success" style="color: green">
                    <i class='bx bx-check bx-lg'></i>
                    <span id="success"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="popup_error">
        <div class="popup_model12">
            <div class="popup_conetnt12">
                <i class='bx bxs-x-circle'></i>
                <div class="in-ct-success" style="color: red">
                    <i class='bx bx-x bx-lg'></i>
                    <span id="error"></span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('./js/jquery.js') }}"></script>
    <script src="{{ asset('./js/slick.min.js') }}"></script>
    <script src="{{ asset('./js/menu.js') }}"></script>
    <script src="{{ asset('./js/slider.js') }}"></script>
    <script src="{{ asset('./js/table.js') }}"></script>
    <script src="{{ asset('./js/popup.js') }}"></script>

    <script>
        function success(x) {
            $(".popup_success").show();
            $('#success').text(x);
            timeout = setTimeout(hide, 2400);
        }

        function error(x) {
            $(".popup_error").show();
            $('#error').text(x);
            timeout = setTimeout(hide, 2400);
        }

        function hide() {
            $(".popup_success").hide();
            $(".popup_error").hide();
        }

        $('.bxs-x-circle').on('click', () => {
            $(".popup_success").hide();
            $(".popup_error").hide();
        })

        function del(on, id) {
            $('.popup-delete').css('display', 'flex');
            $('.on').html(on);
            $('a.submit_delete').attr('href', '/del-record-vaccine?id=' + id)
        }
        $('#menu').addClass('active_page');
    </script>
</body>

</html>
