<div class="sonser">
    <div class="username">
        <i class='bx bxs-user-circle'></i>
        <div class="name">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</div>
    </div>
    <div class="outside">
        <p>วัดค่าภายนอก</p>
        <div class="sonser_outside">
            <div class="get_sonser">
                <img src="{{asset('./img/temperature.png')}}" alt="img_tem">
                <div class="amount">? °C</div>
            </div>
            <div class="get_sonser">
                <img src="{{asset('./img/humidity.png')}}" alt="img_humidity">
                <div class="amount">? %</div>
            </div>
        </div>
    </div>
    <div class="inside">
        <p>วัดค่าภายใน</p>
        <div class="sonser_inside">
            <div class="get_sonser">
                <img src="{{asset('./img/temperature.png')}}" alt="img_tem">
                <div class="amount">{{ $sensor->temperature }} °C</div>
            </div>
            <div class="get_sonser">
                <img src="{{asset('./img/humidity.png')}}" alt="img_humidity">
                <div class="amount">{{ $sensor->humidity }} %</div>
            </div>
        </div>
        <div class="sonser_inside">
            <div class="get_sonser">
                <img src="{{asset('./img/light.png')}}" alt="img_light">
                <div class="amount">? lx</div>
            </div>
            <div class="get_sonser">
                <img src="{{asset('./img/NH3.png')}}" alt="img_NH3">
                <div class="amount">? %</div>
            </div>
        </div>
    </div>
    <div class="analyze">
        <p>ผลการวิเคราะห์</p>
        <div class="sonser_analyze">
            <div class="get_sonser">
                <img src="{{asset('./img/temperature.png')}}" alt="img_tem">
                <div class="amount">?</div>
            </div>
            <div class="get_sonser">
                <img src="{{asset('./img/humidity.png')}}" alt="img_humidity">
                <div class="amount">?</div>
            </div>
        </div>
        <div class="sonser_analyze">
            <div class="get_sonser">
                <img src="{{asset('./img/light.png')}}" alt="img_light">
                <div class="amount">?</div>
            </div>
            <div class="get_sonser">
                <img src="{{asset('./img/NH3.png')}}" alt="img_NH3">
                <div class="amount">?</div>
            </div>
        </div>
    </div>
</div>