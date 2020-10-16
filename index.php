<!doctype html>
<html>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
<?php
date_default_timezone_set("America/Sao_Paulo");
$apiKey = "1439e238f75056bdf424099746274134";
$cityId = "3456412";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/forecast?lat=-21.26&lon=-46.58&appid=1439e238f75056bdf424099746274134&lang=pt_br&units=metric";

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>



<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #background {
            left: 0px;
            top: 0px;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            width: 386px;
            height: 194px;
            overflow: hidden;
            z-index: 0;
        }

        #Camada1 {
            left: 0px;
            top: 0px;
            position: absolute;
            width: 386px;
            height: 194px;
            z-index: 1;
        }

        #PreenchimentodeCor1 {
            left: 0px;
            top: -5px;
            position: absolute;
            width: 386px;
            height: 194px;
            z-index: 2;
        }

        #Retngulo1 {
            left: -25px;
            top: 74px;
            position: absolute;
            width: 422px;
            height: 80px;
            z-index: 3;
        }

        #Elipse1copiar {
            left: -31px;
            top: -23px;
            position: absolute;
            width: 93px;
            height: 93px;
            z-index: 4;
        }

        #Elipse1copiar2 {
            left: 327px;
            top: -23px;
            position: absolute;
            width: 76px;
            height: 80px;
            z-index: 5;
        }

        #RetnguloArredondado1 {
            left: 26px;
            top: 67px;
            position: absolute;
            width: 64px;
            height: 118px;
            z-index: 6;
        }

        #RetnguloArredondado1_0 {
            left: 108px;
            top: 67px;
            position: absolute;
            width: 63px;
            height: 118px;
            z-index: 7;
            text-align: center;
        }

        #TER {
            left: 13px;
            top: 2px;
            position: absolute;
            width: 29px;
            height: 11px;
            z-index: 8;
            font-weight: bold;
            color: black;
            font-family: 'Roboto Mono', monospace;
            letter-spacing: 4px;
        }

        #SEG {
            left: 13px;
            top: 2px;
            position: absolute;
            width: 30px;
            height: 11px;
            z-index: 9;
            color: black;
            font-weight: bold;
            font-family: 'Roboto Mono', monospace;
            letter-spacing: 4px;
        }

        #layer_02 {
            left: 39px;
            top: 88px;
            position: absolute;
            width: 29px;
            height: 21px;
            z-index: 10;
        }

        #C20 {
            left: 39px;
            top: 166px;
            position: absolute;
            width: 38px;
            height: 13px;
            z-index: 11;
            color: black;
            font-weight: bold;

        }

        #C19 {
            left: 120px;
            top: 166px;
            position: absolute;
            width: 38px;
            height: 13px;
            z-index: 12;
            color: black;
            font-weight: bold;
        }

        #layer_03 {
            left: 125px;
            top: 87px;
            position: absolute;
            width: 30px;
            height: 21px;
            z-index: 13;
        }

        #d02 {
            left: 115px;
            top: 110px;
            position: absolute;
            width: 49px;
            height: 50px;
            z-index: 14;
        }

        #d11 {
            left: 33px;
            top: 110px;
            position: absolute;
            width: 49px;
            height: 50px;
            z-index: 15;
        }

        #layer_8888 {
            left: 185px;
            top: 86px;
            position: absolute;
            width: 185px;
            height: 59px;
            z-index: 16;
        }

        #JURUAIAMG {
            left: 247px;
            top: 19px;
            position: absolute;
            width: 96px;
            height: 11px;
            z-index: 17;
        }

        #JURUAIAMG2 {
            left: 256px;
            top: 20px;
            position: absolute;
            width: 96px;
            height: 11px;
            z-index: 17;
            font-weight: bold;
            font-size: 14px;
            color: white;
        }

        #CHUVA {
            left: 293px;
            top: 43px;
            position: absolute;
            width: 51px;
            height: 11px;
            z-index: 18;
        }

        body {
            font-family: Arial;
            font-size: 0.95em;
            color: #929292;
            margin: 0;
            padding: 0;
            top: 1;
            background-image: url("bg.png");
            background-repeat: no-repeat;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }

        .branco {
            color: #f5f5f5;
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: capitalize;
            background-color: #222222;
            line-height: 22px;
        }

        .container {
            width: 355px;
            height: 194px;
            text-align: right;
            margin-top: 14px;
        }

        #c32 {
            left: 126px;
            top: 85px;
            position: absolute;
            width: 38px;
            height: 13px;
            z-index: 55;
            color: black;
            font-weight: bold;
            font-size: 23px;
        }

        #c33 {
            left: 45px;
            top: 85px;
            position: absolute;
            width: 38px;
            height: 13px;
            z-index: 59;
            color: black;
            font-weight: bold;
            font-size: 23px;
        }
    </style>

</head>

<body onload="IniciaTempo()">

    <div id="background">
        <div id="Camada1"><img src="Camada1.png"></div>
        <div id="PreenchimentodeCor1"><img src="PreenchimentodeCor1.png"></div>
        <div id="Retngulo1"><img src="Retngulo1.png"></div>
        <div id="Elipse1copiar"><img src="Elipse1copiar.png"></div>
        <div id="Elipse1copiar2"><img src="Elipse1copiar2.png"></div>

        <div id="RetnguloArredondado1">

            <div id="SEG"><span id="dayONE"></div>


            <img src="RetnguloArredondado1.png">
        </div>

        <div id="RetnguloArredondado1_0">

            <div id="TER"><span id="day2"></div>
            <img src="RetnguloArredondado1_0.png">

        </div>

        <div id="C20">
            <div>
                <?php
                $t1 = ($data->list[0]->main->temp);
                echo $t1 = number_format($t1,)
                ?>
                ºC</div>
        </div>
        <div id="C19">
            <div>
                <?php
                $t1 = ($data->list[8]->main->temp);
                echo $t1 = number_format($t1,)
                ?>
                ºC</div>
        </div>
        <div id="d02"><img width="100%" src="https://gabrielcxz.000webhostapp.com/<?php echo $data->list[8]->weather[0]->icon; ?>.png" class="weather-icon" /></div>
        <div id="d11"><img width="100%" src="https://gabrielcxz.000webhostapp.com/<?php echo $data->list[0]->weather[0]->icon; ?>.png" class="weather-icon" /></div>
        <div id="c32">
            <?php
            $data = new DateTime();
            $data->modify("+1 days");
            echo  $data->format("d")
            ?>
        </div>
        <div id="c33">
            <?php
            $data = new DateTime();
            echo $data->format("d");
            ?>
        </div>

        <div id="JURUAIAMG"><img src="JURUAIAMG.png"></div>
        <div id="JURUAIAMG2">JURUAIA-MG</div>
    </div>



    <script type="text/javascript">
        function IniciaTempo() {
            tempo_seg = 3600
            tempo_ms = tempo_seg * 1000
            setTimeout("Redireciona()", tempo_ms)
        }

        function Redireciona() {
            top.document.location = "index.php"
        }
    </script>

    <script>
        var semana = ["DOM", "SEG", "TER", "QUA", "QUI", "SEX", "SAB"];

        var d = new Date();

        document.getElementById("dayONE").innerHTML = semana[d.getDay()];
    </script>

    <script>
        var semana = ["SEG", "TER", "QUA", "QUI", "SEX", "SAB", "DOM"];

        var d = new Date();

        document.getElementById("day2").innerHTML = semana[d.getDay()];
    </script>
</body>

</html>