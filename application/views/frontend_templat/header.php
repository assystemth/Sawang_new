<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- boostrap  -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link href="<?= base_url('asset/'); ?>boostrap/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- w3schools -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- font  -->
  <!-- <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
  <!-- google map -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <!-- ใช้ CSS ของ Swiper -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
  <link href="<?= base_url('asset/'); ?>swiper/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="./style.css" />

  <!-- sweetalert 2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css">

  <!-- Cookie Consent by https://www.cookiewow.com -->
  <script type="text/javascript" src="https://cookiecdn.com/cwc.js"></script>
  <script id="cookieWow" type="text/javascript" src="https://cookiecdn.com/configs/8FLKNMDqdrFuRXTUXmhCbTLR" data-cwcid="8FLKNMDqdrFuRXTUXmhCbTLR"></script>

  <!-- สไลด์ Slick Carousel -->
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->
  <link href="<?= base_url('asset/'); ?>slick/slick-carousel/slick/slick.css" rel="stylesheet">

  <!-- รูปภาพ preview -->
  <link href="<?= base_url('asset/'); ?>lightbox2/src/css/lightbox.css" rel="stylesheet">
  <!-- Search Google -->
  <script async src="https://cse.google.com/cse.js?cx=d2e0ec3889ba04bad"></script>

  <link rel="icon" href="<?php echo base_url("docs/logo.png"); ?>" type="image/x-icon">
  <title>องค์การบริหารส่วนตำบลสว่าง</title>
</head>

<!-- Messenger ปลั๊กอินแชท Code -->
<div id="fb-root"></div>

<!-- Your ปลั๊กอินแชท code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "852452498161203");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: 'v19.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<body>
  <!-- // ปุ่ม scroll-to-top  -->
  <a onclick="scrolltotopFunction()" id="scroll-to-top" title="Go to top"></a>
  <main>
    <div class="show">
      <div class="overlay"></div>
      <div class="img-show">
        <span>X</span>
        <img src="">
      </div>
    </div>