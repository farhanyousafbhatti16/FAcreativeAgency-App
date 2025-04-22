<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="css/plugins/bootstrap-grid.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="css/plugins/swiper.min.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="css/plugins/fancybox.min.css">
    <!-- F&A Creative Agency scss -->
    <link rel="stylesheet" href="css/style.css">
    

    <!-- page name -->
    <title>F&A Creative Agency</title>

</head>

<div class="whatsapp-float">
    <a href="{{ route('whatsapp.redirect') }}" target="_blank">
        <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp">
    </a>
</div>

<style>
.whatsapp-float {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
}

.whatsapp-float img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
</style>
