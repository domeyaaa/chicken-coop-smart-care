<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Chicken Coop Smart Care</title>
    <link rel="icon" href="{{asset('./img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('./css/admin_typechicken.css')}}">
    <link rel="stylesheet" href="{{asset('./css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('./css/home.css')}}">
    <link rel="stylesheet" href="{{asset('./css/admin_main.css')}}">
</head>

<body @if (session('success')) onload="success('{{ session('success') }}')" @endif>
    <x-AdminSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{ Auth::user()->firstname }}<br>{{ Auth::user()->lastname }}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>จัดการบัญชีผู้ใช้</h1>
            <div class="content">
                <div class="box_content" style="min-height: 0;">
                    <div class="top_content">
                        <form action="home" method="get" class="form_search">
                            @csrf
                            <input type="text" name="search" id="search" placeholder="ค้นหาบัญชี">
                            <button type="submit" class="btn_search">
                                <img src="{{asset('./img/search.png')}}" alt="img_search">
                            </button>

                    </div>
                    <div class="show_type">
                        <div class="type">
                            <a href="home" class="ative_type">บัญชีที่สมัครเข้ามาใหม่</a>
                            <a href="all-user">บัญชีทั้งหมด</a>
                        </div>
                        <div class="select_filter">
                            <select name="filter" id="filter">
                                <option value="1">ทั้งหมด</option>
                                <option value="2">นักศึกษา</option>
                                <option value="3">อาจารย์</option>
                            </select>
                        </div>
                    </div>
                    </form>
                    <p class="get_user">อนุมัติบัญชี</p>
                    <form action="active-user" method="POST">
                        @csrf
                        <div class="user_box">

                            @php($i = 1)
                            @foreach ($users as $user)
                                <input type="checkbox" value="{{ $user->id }}" name="id[]" id="{{ $i }}">
                                <label for="{{ $i }}" class="test">
                                    <div class="on">
                                        <div class="chbox"></div>
                                        <div class="numder">{{ $i++ }}</div>
                                    </div>
                                    <div class="format"><samp>รหัสนักศึกษา:</samp>
                                        @if ($user->std_id != null)
                                            {{ $user->std_id }}
                                        @else
                                            -
                                        @endif
                                    </div>
                                    <div class="format">
                                        <samp>ชื่อ:</samp>
                                        {{ $user->titlename }}{{ $user->firstname }}
                                        {{ $user->lastname }}
                                    </div>
                                    <div class="format fm-type"><samp>ประเภท:</samp>
                                        <?php if ($user->std_id == null) {
                                            echo 'อาจารย์';
                                        } else {
                                            echo 'นักศึกษา';
                                        }
                                        ?>
                                    </div>
                                    <div class="format fm-email"><samp>อีเมล:</samp>{{ $user->email }}</div>
                                    <div class="format">{{ $user->created_at->format('d/m/Y') }}</div>
                                </label>
                            @endforeach

                        </div>
                        <div class="btn_event">
                            <button type="button" class="btn_all">เลือกทั้งหมด</button>
                            <button type="reset" class="btn_reset">รีเซ็ต</button>
                            <button type="submit" class="btn_submit">ยืนยัน</button>
                            <a class="btn_delete">ลบ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- sensor component --}}
        <x-sensor />
    </div>

    <div class="popup_success">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <div class="in-ct-success">
                    <i class='bx bx-check bx-lg'></i>
                    <span id="success"></span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('./js/jquery.js')}}"></script>
    <script src="{{asset('./js/menu.js')}}"></script>
    <script>
        $(".btn_all").on('click', () => {
            $(':checkbox').each(function() {
                this.checked = true;
            });
        })

        $('.bxs-x-circle').on('click', () => {
            $(".popup_success").hide();

        })


        function success(x) {
            $(".popup_success").show();
            $('#success').text(x);
            timeout = setTimeout(hide, 2400);
        }

        function hide() {
            $(".popup_success").hide();
        }
        $("#home").addClass('active_page');
    </script>
</body>

</html>
