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
    <link rel="stylesheet" href="./css/funtion.css">

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
            <h1>บันทึกและจัดการ</h1>
            <div class="content">
                <div class="box_content">
                    <div class="funtion">
                        <div class="funtion-box">
                            <a href="manage-specie">
                                <img src="{{asset('./img/img_chicken.png')}}" alt="img_chicken">
                                <p>เพิ่ม ลบ แก้ไข สายพันธุ์ไก่</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="manage-coop">
                                <img src="{{asset('./img/coop.png')}}" alt="img_coop">
                                <p>เพิ่ม ลบ แก้ไข คอก</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="manage-food">
                                <img src="{{asset('./img/give_food.png')}}" alt="img_food">
                                <p>เพิ่ม ลบ แก้ไข อาหาร</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="manage-vaccine">
                                <img src="{{asset('./img/vaccinate.png')}}" alt="img_vaccinate">
                                <p>เพิ่ม ลบ แก้ไข วัดซีน</p>
                            </a>
                        </div>
                        <div class="funtion-box">
                            <a href="manage-phase">
                                <img src="{{asset('./img/phase.png')}}" alt="img_vaccinate">
                                <p>เพิ่ม ลบ แก้ไข ระยะเติบโต</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- sensor component --}}
        <x-sensor />
    </div>
    <script src="js/jquery.js"></script>
    <script src="./js/menu.js"></script>
    <script>
        $("#menu").addClass("active_page");
    </script>
</body>

</html>
