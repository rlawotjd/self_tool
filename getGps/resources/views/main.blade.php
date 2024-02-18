<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    main view
    <div class="latitude"></div>
    <br>
    <div class="longitude"></div>
    <script>
        if ("geolocation" in navigator) {
        // 위치 정보 요청
        navigator.geolocation.getCurrentPosition(function(position) {
            // 위치 정보를 수신한 경우 처리
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            console.log("위도: " + latitude + ", 경도: " + longitude);
        });
        } else {
        // 브라우저가 Geolocation API를 지원하지 않는 경우
        console.log("Geolocation API를 지원하지 않는 브라우저입니다.");
        }

    </script>
</body>
</html>
