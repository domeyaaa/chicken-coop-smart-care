<style>
    .bx-loader-alt {
        animation: spin 2s linear infinite;
    }

</style>
<div class="sonser">
    <div class="username">
        <i class='bx bxs-user-circle'></i>
        <div class="name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
    </div>
    <div class="outside">
        <p>วัดค่าภายนอก</p>
        <div class="sonser_outside">
            <div class="get_sonser">
                <img src="{{ asset('./img/temperature.png') }}" alt="img_tem">
                <div class="amount"><span id="tc"><i class='bx bx-loader-alt'></i></span> °C</div>
            </div>
            <div class="get_sonser">
                <img src="{{ asset('./img/humidity.png') }}" alt="img_humidity">
                <div class="amount"><span id="rh"><i class='bx bx-loader-alt'></i></span> %</div>
            </div>
        </div>
    </div>
    <div class="inside">
        <p>วัดค่าภายใน</p>
        <div class="sonser_inside">
            <div class="get_sonser">
                <img src="{{ asset('./img/temperature.png') }}" alt="img_tem">
                <div class="amount">{{ $sensor->sm_temperature }} °C</div>
            </div>
            <div class="get_sonser">
                <img src="{{ asset('./img/humidity.png') }}" alt="img_humidity">
                <div class="amount">{{ $sensor->sm_humudity }} %</div>
            </div>
        </div>
        <div class="sonser_inside">
            <div class="get_sonser">
                <img src="{{ asset('./img/light.png') }}" alt="img_light">
                <div class="amount">{{ $sensor->sm_light_intensity }} lx</div>
            </div>
            <div class="get_sonser">
                <img src="{{ asset('./img/NH3.png') }}" alt="img_NH3">
                <div class="amount">{{ $sensor->sm_ammonia}} %</div>
            </div>
        </div>
    </div>
    <div class="analyze">
        <p>ผลการวิเคราะห์</p>
        <div class="sonser_analyze">
            <div class="get_sonser">
                <img src="{{ asset('./img/temperature.png') }}" alt="img_tem">
                <div class="amount">?</div>
            </div>
            <div class="get_sonser">
                <img src="{{ asset('./img/humidity.png') }}" alt="img_humidity">
                <div class="amount">?</div>
            </div>
        </div>
        <div class="sonser_analyze">
            <div class="get_sonser">
                <img src="{{ asset('./img/light.png') }}" alt="img_light">
                <div class="amount">?</div>
            </div>
            <div class="get_sonser">
                <img src="{{ asset('./img/NH3.png') }}" alt="img_NH3">
                <div class="amount">?</div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?v=1553116856"></script>
<script>
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://data.tmd.go.th/nwpapi/v1/forecast/location/hourly/at?lat=16.458261&lon=102.811446&fields=tc,rh",
        "method": "GET",
        "headers": {
            "accept": "application/json",
            "authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjIxODIyNDliZDgyZjIzYWFlMTY0OTBjNDBmNmQwODJjMzZhMTU2YTM5MjM1ZmQzZTk5NjRjYWVlZTk4YjhkNjY5OGUyOTA3NWUzZjVjMzIxIn0.eyJhdWQiOiIyIiwianRpIjoiMjE4MjI0OWJkODJmMjNhYWUxNjQ5MGM0MGY2ZDA4MmMzNmExNTZhMzkyMzVmZDNlOTk2NGNhZWVlOThiOGQ2Njk4ZTI5MDc1ZTNmNWMzMjEiLCJpYXQiOjE2NDU4NzI4MDMsIm5iZiI6MTY0NTg3MjgwMywiZXhwIjoxNjc3NDA4ODAzLCJzdWIiOiIxNTU1Iiwic2NvcGVzIjpbXX0.UNIAQfv0sEfyig6dBev5ibr9dx2VfMyhEPSYiyuRtyHsmMDVXweoahcELwdslM894b6h_SZGItm8BDOl4bBWva-89082r6XZoDMUUoxQvdRS1UtFuB8ZCVlM30iN_q0kYwIMQRBm6LShwB4lolPcDNpp0HdYuQpCrLhM1tLqKAGp2TVvEcOJeLKrn3HnePCAMytyg6sjxH16wpqXJ8JHTFcPnMDsjerYYsWxdogxM9uCBzSApM8m_jUpPsztTJMdFw_9vqIdGarK7aAfNPQPnEFk2twrixoCtpTEIYd4_t6RhIFGyL_G0FKhfPVs60ssCep1yNX85eA7Vqp6xhs9MVkEn5fdKZpY7tmbCmNhjNK1tJJ-NkDk_Jh3hGSWrumT5SsfIOuvAwp1ezNdXKvGXKvlEQEoUgP3l3lE6yviL7bh3tV0hetEQBEADuQwP349PivlGAJFsxPJChPONqCY-ky23BV59lZv8vVtIDkgc3EV7vgmLodxQEhAefggrv_yiT43kNa24t-Mtp5U0b78MUkzCB2YmSBy2Y6u8rZBhvEdkuYob7ZJ1EnQPAFOSTYG_f1pAxtU86teDyJUpI-fbXY9RW54X4qVoEyQ__ZtYcW3WNLq8PpKcmrQBoJkFpyKpNI5EmQhmkhyXBdDiYgXb8T9sY5xxWCpL3jV2qQ8kao",
        }
    }

    $.ajax(settings).done(function(response) {
        let data = response.WeatherForecasts[0].forecasts[0].data;
        document.getElementById("tc").innerHTML = data.tc;
        document.getElementById("rh").innerHTML = data.rh;
    });
</script>
