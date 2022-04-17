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
    <style>
        .form_search {
            width: 100%;
            position: relative;
        }
    </style>
</head>

<body @if (session('success')) onload="success('{{ session('success') }}')" @endif @if (session('error')) onload="error('{{ session('error') }}')" @endif>
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
            <h1>เพิ่ม ลบ แก้ไข วัคซีน</h1>
            <div class="breadcrumb">
                <div class="namepage"><a href="/menu">บันทึกและจัดการ</a></div>
                <div class="bread">></div>
                <div class="namepage"><a href="#">เพิ่ม ลบ แก้ไข วัคซีน</a></div>
            </div>
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
        {{-- sensor component --}}
        <x-sensor />

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
                            <button class="cancel" type="button" onclick="hide()">ยกเลิก</button>
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
                            <button class="cancel" type="button" onclick="hide()">ยกเลิก</button>
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
                    <a href="#" onclick="hide()" class="delete">ยกเลิก</a>
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
    
    <div class="popup_error">
        <div class="popup_model">
            <div class="popup_conetnt">
                <i class='bx bxs-x-circle'></i>
                <div class="in-ct-success" style="color: red">
                    <i class='bx bx-x bx-lg' ></i>
                    <span id="error"></span>
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
            $(".popup_error").hide();
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

        function error(x) {
            $(".popup_error").show();
            $('#error').text(x);
            timeout = setTimeout(hide, 2400);
        }

        function hide() {
            $(".popup_add").hide();
            $(".popup_edit").hide();
            $(".popup_delete").hide();
            $(".popup_success").hide();
            $(".popup_error").hide();
        }
        $("#menu").addClass("active_page");
    </script>
</body>

</html>
