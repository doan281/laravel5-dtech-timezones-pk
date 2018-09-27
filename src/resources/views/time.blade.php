<!DOCTYPE html>
<html>
<head>
    <title>Dtech Timezones</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body { height: 100%; }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container { text-align: center; display: table-cell; vertical-align: middle; }
        .content { text-align: center; display: inline-block; }
        .title { font-size: 48px; background-color: dodgerblue; padding: 15px 55px }
        #clock { font-size: 96px; }
    </style>
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('clock').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>
</head>
<body onload="startTime()">
<div class="container">
    <div id="clock"></div>
    <div class="content">
        <div class="title">{{ $current_time }}</div>
    </div>
</div>
</body>
</html>