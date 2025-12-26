<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon_agenko.css">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="assets/css/plugins/slick.css">
        <!--====== Magnific-popup css ======-->
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">


    <!-- Tempatkan link/style/script global di sini jika perlu -->
</head>
<body>
    @yield('content')
</body>
</html>

