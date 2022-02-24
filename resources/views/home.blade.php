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
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/slick.css">
</head>

<body>
    <x-UserSidebar />
    <div class="menu">
        <i class='bx bx-menu' id="btn"></i>
        <div class="username-md">
            <i class='bx bxs-user-circle'></i>
            <div class="name">{{ Auth::user()->firstname }}<br>{{ Auth::user()->lastname }}</div>
        </div>
    </div>
    <div class="container">
        <div class="contain">
            <h1>โรงเรือนเลี้ยงของมหาวิทยาลัยขอนแก่น</h1>
            <div class="content">
                <div class="box_content">
                    <div class="text-content">
                        <div class="title_content">
                            <div class="title">แม่พันธุ์ที่มีแนวโนวในการให้ไข่ดี</div>
                            <a href="#">ดูทั้งหมด</a>
                        </div>
                        <div class="carousel clearfix">

                            <div class="carousel-view clearfix carousel-view2">

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->


                            </div><!-- carousel-view -->
                        </div>
                    </div>
                </div>



            </div>
            <div class="content">
                <div class="box_content">
                    <div class="text-content">
                        <div class="title_content">
                            <div class="title">แม่พันธุ์ที่มีแนวโนวในการให้ไข่ดี</div>
                            <a href="#">ดูทั้งหมด</a>
                        </div>
                        <div class="carousel clearfix">

                            <div class="carousel-view clearfix">

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                                <div class="box">
                                    <div class="box_chicken">
                                        <a href="#">
                                            <img src="../img/img_chicken.png" alt="image" class="img_chicken">
                                            <div class="line"></div>
                                            <div class="id"><samp>รหัส:</samp>A-4323</div>
                                            <div class="species"><samp>สารพันธุ์:</samp>ไก่ขาว</div>
                                            <div class="species"><samp>เพศ:</samp>เมีย</div>
                                            <div class="species"><samp>ออกไข่ไปแล้ว:</samp>30 ฟอง</div>
                                            <div class="species"><samp>อายุการให้ไข่:</samp>6 สัปดาห์</div>
                                        </a>
                                    </div>
                                </div><!-- end box -->

                            </div><!-- carousel-view -->
                        </div>
                    </div>
                </div>



            </div>
        </div>
        {{-- sensor component --}}
        <x-sensor />
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="./js/menu.js"></script>
    <script src="js/slider.js"></script>
    <script>
        $('#home').addClass('active_page');
    </script>
</body>

</html>
