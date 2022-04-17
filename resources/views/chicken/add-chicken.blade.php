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
    <link rel="stylesheet" href="{{ asset('./css/add_chicken.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/admin_typechicken.css') }}">
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
            <h1>เพิ่มไก่พันธุ์</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึก และดูข้อมูลไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="/chicken/all">ค้นหาไก่พันธุ์</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">เพิ่มไก่พันธุ์</a></div>
            </div>
            <div class="content">
                <div class="box_content">
                    <div class="img_chicken">
                        <img src="{{ asset('./img/img_chicken.png') }}" alt="img_chicken" class="img">
                    </div>
                    <form action="/add-new-chicken" class="form-input" method="post">
                        @csrf
                        <div class="format-box">
                            <div class="format">
                                <samp>ระยะเติบโต :</samp>
                                <select name="type" id="type" required>
                                    <option value="" hidden>เลือกระยะเติบโต</option>
                                    @foreach($phases as $phase)
                                        <option value="{{$phase->id}}">{{$phase->phase_name}}</option>
                                    @endforeach
                                </select>
                                <span class="require">*</span>
                            </div>
                            <div class="format">
                                <samp>หมายเลขไก่พันธุ์ :</samp>
                                <input type="text" id="id" name="id" class="inp-text" required>
                                <span class="require">*</span>
                            </div>
                            <div class="format">
                                <samp>หมายเลขพ่อไก่พันธุ์ :</samp>
                                <input type="text" id="id-f" name="id_f" class="inp-text">
                            </div>
                            <div class="format">
                                <samp>หมายเลขแม่ไก่พันธุ์ :</samp>
                                <input type="text" id="id-m" name="id_m" class="inp-text">
                            </div>
                            <div class="format">
                                <samp>อุณหภูมิขณะฟัก ( ํC ) :</samp>
                                <input type="text" id="Chatching" name="chatching" class="inp-text inp-num">
                            </div>
                            <div class="format">
                                <samp>วันที่เกิด :</samp>
                                <input type="date" name="born" id="born" required>
                                <span class="require">*</span>
                            </div>
                        </div>
                        <div class="format-box">
                            <div class="format">
                                <samp>คอก :</samp>
                                <select name="coop" id="coop">
                                    <option hidden>เลือกคอก</option>
                                    <option value="">ไม่ระบุ</option>
                                    @foreach ($stalls as $stall)
                                        <option value="{{ $stall->id }}">{{ $stall->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="format">
                                <samp>สายพันธุ์ :</samp>
                                <select name="species" id="species" required>
                                    <option hidden>เลือกพันธุ์ไก่</option>
                                    @foreach ($species as $specie)
                                        <option value="{{ $specie->id }}">{{ $specie->name }}</option>
                                    @endforeach
                                </select>
                                <span class="require">*</span>
                            </div>

                            <!-- ใช้ตอนที่เลือกสถานะเป็นไก่เด็ก -->
                            <div class="format format-sexing">
                                <samp>เพศที่ทำนาย :</samp>
                                <select name="sexing" id="sexing" required>
                                    <option value="" hidden>เลือกเพศ</option>
                                    <option value="male">ผู้</option>
                                    <option value="female">เมีย</option>
                                    <option value="">ไม่ทำนาย</option>
                                </select>
                                <span class="require">*</span>
                            </div>
                            <!-- ใช้กับไก่ทั่วไป -->
                            <div class="format format-sex">
                                <samp>เพศ :</samp>
                                <select name="sex" id="sex">
                                    <option value="" hidden>เลือกเพศ</option>
                                    <option value="ผู้">ผู้</option>
                                    <option value="เมีย">เมีย</option>
                                    <option value="">ไม่ระบุ</option>
                                </select>
                                <span class="require">*</span>
                            </div>
                            <div class="format format-weight">
                                <samp>น้ำหนัก :</samp>
                                <input type="text" id="weight" name="weight" class="inp-text inp-num">
                            </div>
                            <div class="format format-lenght">
                                <samp>ความยาวแข้ง :</samp>
                                <input type="text" id="lenght" name="lenght" class="inp-text inp-num">
                            </div>
                            <div class="format format-bodysize">
                                <samp>ความยาวรอบอก :</samp>
                                <input type="text" id="bodysize" name="bodysize" class="inp-text inp-num">
                            </div>
                        </div>
                        <div class="btn-event">
                            <button type="reset" class="reset">รีเซ็ต</button>
                            <button type="submit" class="submit">ยืนยัน</button>
                            <a href="#">ยกเลิก</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <x-sensor />
    </div>

    <div class="popup_success">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <div class="in-ct-success" style="color: green">
                    <i class='bx bx-check bx-lg'></i>
                    <span id="success"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="popup_error">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <div class="in-ct-success" style="color: red">
                    <i class='bx bx-x bx-lg'></i>
                    <span id="error"></span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('./js/jquery.js') }}"></script>
    <script src="{{ asset('./js/menu.js') }}"></script>
    <script src="{{ asset('./js/popup.js') }}"></script>
    <script>
        $("#type").change(function() {
            let type_chicken = $("#type").val()
            if (type_chicken == "1") {
                $('.format-md').css('display', 'none');
                $('.format-weight').css('display', 'none');
                $('.format-lenght').css('display', 'none');
                $('.format-bodysize').css('display', 'none');
                $('.format-sex').css('display', 'none');
                $('.format-sexing').css('display', 'flex');
                $('.format-hind').css('display', 'flex');
                $('.img').attr('src', '{{ asset('./img/chick.png') }}');
                $('#sex').prop('required', false)
                $('#sexing').prop('required', true)
            } else {
                $('.format-md').css('display', 'flex');
                $('.format-sexing').css('display', 'none');
                $('.format-sex').css('display', 'flex');
                $('.format-hind').css('display', 'none');
                $('.format-weight').css('display', 'flex');
                $('.format-lenght').css('display', 'flex');
                $('.format-bodysize').css('display', 'flex');
                $('#sex').prop('required', true)
                $('#sexing').prop('required', false)
                if (type_chicken == "2") {
                    $('.img').attr('src', '{{ asset('./img/chickyung.png') }}');
                }
                if (type_chicken == "3") {
                    $('.img').attr('src', '{{ asset('./img/chickboy.png') }}');
                }
                if (type_chicken == "4") {
                    $('.img').attr('src', '{{ asset('./img/chicken_sup.png') }}');
                }
                if (type_chicken == "5") {
                    $('.img').attr('src', '{{ asset('./img/img_chicken.png') }}');
                }
            }
        })

        $('.reset').on('click', () => {
            $('.format-md').css('display', 'none');
            $('.format-weight').css('display', 'none');
            $('.format-lenght').css('display', 'none');
            $('.format-bodysize').css('display', 'none');
            $('.format-sex').css('display', 'none');
            $('.format-sexing').css('display', 'flex');
            $('.format-hind').css('display', 'flex');
        })

        $('#menu').addClass('active_page');

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
    </script>
</body>

</html>
