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
    <link rel="stylesheet" href="./css/admin_typechicken.css">
</head>

<body @if (session('success'))
    onload="success('{{ session('success') }}')"
    @endif>
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
                <a href="menu" class="active_page">
                    <img class="icon" src="./img/edit.png" alt="img_edit">
                    <span class="link_name">บันทึกและจัดการ</span>
                </a>
                <span class="tooltip">บันทึก จัดการ</span>
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
            <h1>เพิ่ม ลบ แก้ไข วัคซีน</h1>
            <div class="content">
                <div class="box_content">
                    <div class="top_content">
                        <form action="#" method="get" class="form_search">
                            <input type="text" name="search" id="search" placeholder="ค้นหาชื่อวัคซีน">
                            <button type="submit" class="btn_search">
                                <img src="./img/search.png" alt="img_search">
                            </button>
                        </form>
                    </div>
                    <div class="add_chicken">
                        <div class="add"><samp>+</samp>เพิ่มวัคซีน</div>
                    </div>
                    <div class="record">
                        <table class="table_egg">
                            <tr class="table_title">
                                <th>ลำดับ</th>
                                <th>ชื่อวัคซีน</th>
                                <th>รายละเอียด</th>
                                <th colspan="2"></th>
                            </tr>
                            @php($i = 1)
                            @foreach ($vaccines as $row)
                                <tr class="list_egg">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->detail }}</td>
                                    <td class="col_edit">
                                        <a href="#" class="edit"
                                            onclick="edit('{{ $row->id }}','{{ $row->name }}','{{ $row->detail }}')">แก้ไข</a>
                                    </td>
                                    <td class="col_delete">
                                        <a href="#" class="delete"
                                            onclick="del('{{ $row->id }}','{{ $row->name }}')">ลบ</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
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
    <div class="popup_add">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <div class="model_container">
                    <form action="save-vaccine" method="POST" class="model">
                        @csrf
                        <div class="modelformat">
                            <div class="name">
                                ชื่อวัคซีน :
                            </div>
                            <input type="text" name="name">
                        </div>
                        <div class="modelformat">
                            <div class="name">
                                รายละเอียด :
                            </div>
                            <textarea name="detail" id="description" rows="10"></textarea>
                        </div>
                        <div class="todo">
                            <button type="submit" class="submit">ยืนยัน</button>
                            <button class="cancel">ยกเลิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="popup_edit">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <div class="model_container">
                    <form action="edit-vaccine" class="model" method="POST">
                        @csrf
                        <div class="modelformat">
                            <div class="name">
                                รหัสวัคซีน :
                            </div>
                            <input readonly type="text" id="id" required name="id" style="border: none;">
                        </div>
                        <div class="modelformat">
                            <div class="name">
                                ชื่อวัคซีน :
                            </div>
                            <input type="text" id="name" required name="name_edit">
                        </div>
                        <div class="modelformat">
                            <div class="name">
                                รายละเอียด :
                            </div>
                            <textarea name="detail_edit" id="detail" rows="10"></textarea>
                        </div>
                        <div class="todo">
                            <button type="submit" class="submit">ยืนยัน</button>
                            <button class="cancel">ยกเลิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="popup_delete">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <p>ต้องการลบวัคซีน <samp id="del_name"></samp> หรือไม่?</p>
                <div class="model_container">
                    <a href="#" class="submit_delete">ยืนยัน</a>
                    <a href="" class="delete">ยกเลิก</a>
                </div>
            </div>
        </div>
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

    <script src="js/jquery.js"></script>
    <script src="./js/menu.js"></script>
    <script>
        $('.add_chicken').on('click', () => {
            $(".popup_add").show();
        })
        $('.bxs-x-circle').on('click', () => {
            $(".popup_add").hide();
            $(".popup_edit").hide();
            $(".popup_delete").hide();
            $(".popup_success").hide();

        })

        function edit(id, name, detail) {
            $(".popup_edit").show();
            $('#id').val(id);
            $('#name').val(name);
            $('#detail').val(detail);
        }

        function del(id, name) {
            $(".popup_delete").show();
            $('#del_name').text(name);
            $('a.submit_delete').attr('href', 'delete-vaccine?id=' + id)
        }

        function success(x) {
            $(".popup_success").show();
            $('#success').text(x);
            timeout = setTimeout(hide, 2400);
        }

        function hide() {
            $(".popup_success").hide();
        }
    </script>
</body>

</html>
