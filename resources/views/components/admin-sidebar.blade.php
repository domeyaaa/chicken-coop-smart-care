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
            <a href="home" id="home">
                <i class='bx bx-home'></i>
                <span class="link_name">หน้าหลัก</span>
            </a>
            <span class="tooltip">หน้าหลัก</span>
        </li>
        <li>
            <a href="menu" id="menu">
                <img class="icon" src="./img/edit.png" alt="img_edit">
                <span class="link_name">บันทึก และดูข้อมูลไก่พันธุ์</span>
            </a>
            <span class="tooltip">บันทึกการให้ไข่</span>
        </li>
        <li>
            <a href="#" id="setting">
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