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
    <link rel="stylesheet" href="./css/admin_main.css">
</head>

<body>
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
                <div class="box_content">
                    <div class="top_content">
                        <form action="#" method="get" class="form_search">
                            <input type="search" name="search" id="search" placeholder="ค้นหาบัญชี">
                            <button type="submit" class="btn_search">
                                <img src="./img/search.png" alt="img_search">
                            </button>
                    </div>
                    <div class="show_type">
                        <div class="type">
                            <a href="home">บัญชีที่สมัครเข้ามาใหม่</a>
                            <a href="all-user" class="ative_type">บัญชีทั้งหมด</a>
                        </div>
                        <div class="select_filter">
                            <select name="filter" id="filter">
                                <option value="1">ทั้งหมด</option>
                                <option value="2">นักศึกษา</option>
                                <option value="3">อาจารย์</option>
                            </select>
                        </div>
                        </form>

                    </div>
                    <form action="#" method="get">
                        <div class="user_box">
                            @php($i = 1)
                            @foreach ($users as $row)
                                <input type="checkbox" name="box" id="{{ $i }}">
                                <label for="{{ $i }}" class="test">
                                    <div class="on">
                                        <div class="chbox"></div>
                                        <div class="numder">{{ $i }}</div>
                                    </div>
                                    <div class="format"><samp>รหัสนักศึกษา:</samp>
                                        @if ($row->std_id != null)
                                            {{ $row->std_id }}
                                        @else
                                            -
                                        @endif
                                    </div>
                                    <div class="format">
                                        <samp>ชื่อ:</samp>{{ $row->titlename }}{{ $row->firstname }}
                                        {{ $row->lastname }}</div>
                                    <div class="format fm-type"><samp>ประเภท:</samp>
                                        <?php if ($row->std_id == null) {
                                            echo 'อาจารย์';
                                        } else {
                                            echo 'นักศึกษา';
                                        }
                                        ?>
                                    </div>
                                    <div class="format fm-email"><samp>อีเมล:</samp>{{ $row->email }}</div>
                                    <div class="edit_user"><a href="#">แก้ไข</a></div>
                                </label>
                                @php($i++)
                            @endforeach
                        </div>
                        <div class="btn_event">
                            <button type="button" class="btn_all">เลือกทั้งหมด</button>
                            <button type="reset" class="btn_reset">รีเซ็ต</button>
                            <a class="btn_delete">ลบ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- sensor component --}}
        <x-sensor />
    </div>
    <script src="js/jquery.js"></script>
    <script src="./js/menu.js"></script>
    <script>
        $(".btn_all").on('click', () => {
            $(':checkbox').each(function() {
                this.checked = true;
            });
        })
        $("#home").addClass("active_page");
    </script>
</body>

</html>
