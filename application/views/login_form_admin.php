<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("docs/logo.png"); ?>" type="image/x-icon">
    <title>อบต.สว่าง ระบบอินทราเน็ต</title>
    <!-- icon -->
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- reCAPTCHA 3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x"></script>
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Kanit', sans-serif;
            font-weight: 300;
            background-color: #080710;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .bg {
            background-image: url('<?php echo base_url("docs/s.bg-login.png"); ?>');
            height: 100vh;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-content {
            width: 1000px;
            height: 383px;
            flex-shrink: 0;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.50);
            /* background-color: rgba(255, 255, 255, 0.13); */
            /* background-color: rgba(255, 255, 255, 0.0); */
            position: absolute;
            transform: translate(-50%, -50%);
            top: 35%;
            left: 50%;
            /* border-radius: 24px; */
            /* backdrop-filter: blur(3px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 20px 10px; */
        }

        .logo-header {
            text-align: center;
            margin-top: -90px;
        }

        .font-header-back {
            color: #FFF;
            text-align: center;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-family: "Noto Looped Thai";
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            border-radius: 25px;
            padding: 10px 15px;
            background: rgba(255, 255, 255, 0.8);
            border: none;
        }

        .input-group-prepend {
            position: absolute;
            left: px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #535763;
            margin: auto;
        }

        .form-check-label {
            color: #fff;
        }

        .forgotpwd {
            color: #fff;
            float: right;

        }


        .support {
            color: #fff;
            text-align: center;
            margin-top: 15px;
        }

        .input-group {
            position: relative;
            margin: auto;
        }

        .input-group .form-control {
            padding-left: 40px;
        }

        .input-group .input-group-text {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #535763;
        }

        .center-text {
            text-align: center;
        }

        .check-border {
            width: 14.86px;
            height: 14.86px;
            flex-shrink: 0;
            border-radius: 3.715px;
            border: 1.857px solid #FFF;
        }

        .bg-submit-login {
            background-image: url('<?php echo base_url("docs/b.submit-login.png"); ?>');
            width: 264px;
            height: 67px;
            display: flex;
            justify-content: center;
            /* Center the button horizontally */
            align-items: center;
            /* Center the button vertically */
            border-radius: 30px;
            /* Rounded corners */
            overflow: hidden;
            /* Ensure the button stays within the rounded corners */
            margin: auto;

        }

        .bg-submit-login:hover {
            background-image: url('<?php echo base_url("docs/b.submit-login-hover.png"); ?>');
        }

        .loginBtn {
            background: transparent;
            /* Transparent background to show the image */
            border: none;
            /* Remove default button border */
            padding: 0;
            /* Remove default padding */
            font-size: 16px;
            /* Font size */
            font-weight: bold;
            /* Bold text */
            color: #000;
            /* Text color */
            cursor: pointer;
            /* Pointer cursor on hover */
            width: 100%;
            /* Make the button fill the container */
            height: 100%;
            /* Make the button fill the container */
            text-align: center;
            /* Center the text */
            line-height: 67px;
            /* Center the text vertically */
        }

        .loginBtn:hover {
            background: transparent;
            /* Ensure the background remains transparent on hover */
        }


        .font-service {
            color: #FFF;
            text-align: center;
            font-family: "Noto Looped Thai";
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .dot-news-animation {
            position: absolute;
            animation-name: blink;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }

        .dot-news-animation-1 {
            width: 35px;
            height: 35px;
        }

        .dot-news-animation-2 {
            width: 15px;
            height: 15px;
        }

        .dot-news-animation-3 {
            width: 25px;
            height: 25px;
        }

        .dot-news-animation-4 {
            width: 25px;
            height: 25px;
        }

        .dot-news-animation-5 {
            width: 35px;
            height: 35px;
        }

        .dot-news-animation-6 {
            width: 50px;
            height: 50px;
        }

        .dot-news-animation-7 {
            width: 20px;
            height: 20px;
        }

        .dot-news-animation-8 {
            width: 20px;
            height: 20px;
        }

        .dot-news-animation-9 {
            width: 15px;
            height: 15px;
        }

        .dot-news-animation-10 {
            width: 50px;
            height: 50px;
        }

        .dot-news-animation-11 {
            width: 15px;
            height: 15px;
        }

        .dot-news-animation-12 {
            width: 25px;
            height: 25px;
        }

        .dot-news-animation-13 {
            width: 25px;
            height: 25px;
        }

        .dot-news-animation-14 {
            width: 20px;
            height: 20px;
        }

        .dot-news-animation-15 {
            width: 20px;
            height: 20px;
        }

        .slideshow-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 560px;
        }

        .slideshow-container {
            max-width: 1480px;
            position: relative;
            margin: 10px;
            overflow: hidden;
            display: flex;
            cursor: grab;
        }

        .slideshow-container:active {
            cursor: grabbing;
        }

        .slide-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .card {
            width: 226px;
            height: 350px;
            flex-shrink: 0;
            margin: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            transform-origin: center center;
            z-index: 1;
        }

        .card:hover {
            transform: scale(1.05);
            z-index: 10;
        }

        .card-img-top {
            border-radius: 10px;
            background: url(<path-to-image>) lightgray 50% / cover no-repeat, #D9D9D9;
            width: 196px;
            height: 114px;
            flex-shrink: 0;
            margin: auto;
            /* padding-top: 20px; */
            margin-top: 15px;
        }

        .card-body {
            padding: 16px;
            margin-top: -5px;
        }

        .card-title {
            color: #000;
            font-family: Kanit;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
            text-align: center;
        }

        .card-text {
            color: #000;
            text-align: center;
            font-family: Kanit;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            /* ควบคุมความสูงของบรรทัด */
            height: 4.5em;
            /* แสดง 3 บรรทัด */
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* ความสูงของ container */
            background-color: #f0f0f0;
            /* ตัวอย่างสีพื้นหลังของ container */
        }

        .btn {
            width: 103px;
            height: 47.955px;
            flex-shrink: 0;
            border-radius: 30px;
            background: linear-gradient(94deg, #e0e0e0 10.32%, #eaeaea 87.35%);
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            /* เพิ่ม */
            bottom: 14px;
            /* กำหนดตำแหน่งด้านล่าง */
            left: 50%;
            /* จัดกึ่งกลางแนวนอน */
            transform: translateX(-50%);
            /* จัดกึ่งกลางแนวนอน */
        }

        .btn:hover {
            background: linear-gradient(94deg, #d1d1d1 10.32%, #dcdcdc 87.35%);
            /* สีเมื่อ hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            /* เงาเมื่อ hover */
        }

        .prev,
        .next {
            cursor: pointer;
            width: 55px;
            height: 76px;
            background-size: contain;
            background-repeat: no-repeat;
            transition: 0.6s ease;
            user-select: none;
            position: absolute;
            /* เปลี่ยนจาก relative เป็น absolute */
            margin-top: 80px;
            /* กำหนดให้ปุ่มอยู่ตรงกลางแนวตั้ง */
            transform: translateY(-50%);
            /* กำหนดให้ปุ่มอยู่ตรงกลางแนวตั้ง */
            z-index: 2;
        }

        .prev {
            left: 80px;
            /* กำหนดระยะห่างจากขอบซ้าย */
            background-image: url('<?php echo base_url("docs/s.pre-home2.png"); ?>');
        }

        .prev:hover {
            background-image: url('<?php echo base_url("docs/s.pre-home-hover.png"); ?>');
        }

        .next {
            right: 80px;
            /* กำหนดระยะห่างจากขอบขวา */
            background-image: url('<?php echo base_url("docs/s.next-home2.png"); ?>');
        }

        .next:hover {
            background-image: url('<?php echo base_url("docs/s.next-home-hover.png"); ?>');
        }

        .from-login {
            border-radius: 25px;
            box-shadow: 0px 2.88px 2.88px 0px rgba(0, 0, 0, 0.25);
            background: #FFF;
            padding: 0;
            display: flex;
            align-items: center;
            overflow: hidden;
            width: 280px;
            height: 50px;
            position: relative;
        }

        .input-group-prepend {
            background: transparent;
            border: none;
        }

        /* .input-group-text {
            background: transparent;
            border: none;
            color: #535763;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 10px;
            position: absolute;
            z-index: 2;
        } */

        .form-control {
            border: none;
            box-shadow: none;
            outline: none;
            width: 100%;
            height: 100%;
            padding: 0 15px;
            background: rgba(255, 255, 255, 0.8);
        }

        /* กำหนดรูปแบบสำหรับ input ที่มี placeholder */
        input[type="text"][placeholder] {
            padding-left: 50px;
            /* ปรับระยะห่างซ้ายเพื่อให้มีพื้นที่สำหรับไอคอน */
            background-position: left center;
            /* กำหนดตำแหน่งของไอคอน */
            background-repeat: no-repeat;
            /* หยุดการทำซ้ำของพื้นหลัง */
            background-size: 20px auto;
            /* กำหนดขนาดของไอคอน */
        }

        /* กำหนดรูปแบบสำหรับไอคอนใน input */
        input[type="text"][placeholder]+i.fa-user {
            position: absolute;
            left: 23%;
            top: 37.3%;
            transform: translateY(-50%);
            color: #535763;
            /* สีของไอคอน */
            pointer-events: none;
            /* ปิดการเชื่อมต่อแบบการคลิกกับไอคอน */
            padding-right: 10px;
            border-right: 1px solid #ccc;
            /* เพิ่มเส้นขอบด้านขวา */
        }

        /* กำหนดรูปแบบสำหรับ input ที่มี placeholder */
        input[type="password"][placeholder] {
            padding-left: 50px;
            /* ปรับระยะห่างซ้ายเพื่อให้มีพื้นที่สำหรับไอคอน */
            background-position: left center;
            /* กำหนดตำแหน่งของไอคอน */
            background-repeat: no-repeat;
            /* หยุดการทำซ้ำของพื้นหลัง */
            background-size: 20px auto;
            /* กำหนดขนาดของไอคอน */
        }

        /* กำหนดรูปแบบสำหรับไอคอนใน input */
        input[type="password"][placeholder]+i.fa-lock {
            position: absolute;
            left: 23%;
            top: 49%;
            transform: translateY(-50%);
            color: #535763;
            /* สีของไอคอน */
            pointer-events: none;
            /* ปิดการเชื่อมต่อแบบการคลิกกับไอคอน */
            padding-right: 10px;
            border-right: 1px solid #ccc;
            /* เพิ่มเส้นขอบด้านขวา */
        }
    </style>
</head>

<body>
    <main>
        <img class="dot-news-animation dot-news-animation-1" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
        <img class="dot-news-animation dot-news-animation-2" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
        <img class="dot-news-animation dot-news-animation-3" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
        <img class="dot-news-animation dot-news-animation-4" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
        <img class="dot-news-animation dot-news-animation-5" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
        <img class="dot-news-animation dot-news-animation-6" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
        <img class="dot-news-animation dot-news-animation-7" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
        <img class="dot-news-animation dot-news-animation-8" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
        <img class="dot-news-animation dot-news-animation-9" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
        <img class="dot-news-animation dot-news-animation-10" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
        <img class="dot-news-animation dot-news-animation-11" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
        <img class="dot-news-animation dot-news-animation-12" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
        <img class="dot-news-animation dot-news-animation-13" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
        <img class="dot-news-animation dot-news-animation-14" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
        <img class="dot-news-animation dot-news-animation-15" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
        <div class="bg">
            <div class="bg-content">
                <div class="logo-header">
                    <img src="<?php echo base_url("docs/logo.png"); ?>" width="180" height="180">
                </div>
                <div class="center-text">
                    <span class="font-header-back">ระบบแอดมิน</span>
                </div>
                <form id="reCAPTCHA3" action="<?php echo site_url('user/check2'); ?>" method="post">
                    <!-- ตรวจสอบว่ามีค่าในคุกกี้ remember หรือไม่ -->
                    <?php
                    if (isset($_COOKIE['remember'])) {
                        $remember_data = json_decode($_COOKIE['remember'], true);
                        $remember_id = $remember_data['id'];
                        $remember_password = $remember_data['data'];
                    } else {
                        $remember_id = '';
                        $remember_password = '';
                    }
                    ?>
                    <div class="row form-group" style="margin-top: 20px;">
                        <div class="col-6">
                            <div class="input-group from-login" style="margin-left: 200px;">
                                <input type="text" class="form-control" name="m_username" placeholder="ชื่อผู้ใช้งาน" value="<?php echo $remember_id; ?>">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group from-login" style="margin-right: 200px;">
                                <input type="password" class="form-control" name="m_password" placeholder="รหัสผ่าน" value="<?php echo $remember_password; ?>">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-6" style="padding-left: 350px;">
                            <input class="form-check-input check-border" type="checkbox" name="remember_me" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">จดจำรหัสผ่าน</label>
                        </div>
                        <div class="col-6" style="padding-right: 380px;">
                            <a class="forgotpwd underline" href="<?php echo site_url('user/forgotPassword'); ?>">ลืมรหัสผ่าน</a>
                        </div>
                    </div>





                    <div class="bg-submit-login">
                        <button data-action="submit" data-callback="onSubmit" data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" class="loginBtn g-recaptcha" id="loginBtn">เข้าสู่ระบบ</button>
                    </div>

                    <div class="center-text" style="padding-top: 20px;">
                        <span class="font-service">ติดปัญหาการใช้งานติดต่อ Support 043-009848 ต่อ 1 หรือ Line @assystem</span>
                    </div>
                </form>

            </div>

            <div class="slideshow-wrapper">
                <a class="prev" onclick="plusSlides(-1)"></a>
                <?php foreach ($api_data1 as $service) : ?>
                    <div class="slideshow-container" id="slideshow-container">
                        <div class="slide-track" id="slide-track">
                            <div class="card">
                                <img class="card-img-top" src="https://www.assystem.co.th/asset/img_services/<?php echo $service['service_img']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $service['service_title']; ?></h5>
                                    <p class="card-text"><?php echo $service['service_intro']; ?></p>
                                    <a href="https://www.assystem.co.th/service/detail/<?php echo $service['service_id']; ?>" target="blank" class="btn" style="color: #080027;">เพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <a class="next" onclick="plusSlides(1)"></a>
            </div>
        </div>
    </main>
</body>

<script src="https://www.google.com/recaptcha/api.js?hl=th"></script>
<!-- boostrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- เพิ่มลิงก์ไปยัง jQuery -->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- icon  -->
<script src="https://kit.fontawesome.com/74345a2175.js" crossorigin="anonymous"></script>
<script>
    function onSubmit(token) {
        document.getElementById("reCAPTCHA3").submit();
    }

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function randomizeAnimationDuration() {
        var minSeconds = 1; // Minimum seconds
        var maxSeconds = 6; // Maximum seconds
        var randomSeconds = getRandomInt(minSeconds, maxSeconds);
        return randomSeconds + 's';
    }

    function randomizePosition(element) {
        var maxWidth = 1920; // กำหนดขนาดความกว้างสูงสุด 1920px
        var maxHeight = 500; // กำหนดขนาดความสูงสูงสุด 1000px

        var randomMarginLeft = getRandomInt(0, maxWidth - element.width);
        var randomMarginTop = getRandomInt(0, maxHeight - element.height);

        element.style.marginLeft = randomMarginLeft + 'px';
        element.style.marginTop = randomMarginTop + 'px';
    }

    window.onload = function() {
        var animations = document.querySelectorAll('.dot-news-animation');
        animations.forEach(function(animation) {
            animation.style.animationDuration = randomizeAnimationDuration();
            randomizePosition(animation);
        });
    }

    let slideIndex = 0;
    let isDown = false;
    let startX;
    let scrollLeft;

    const slider = document.getElementById('slideshow-container');
    const track = document.getElementById('slide-track');

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2; // Adjust the multiplier for faster/slower scrolling
        slider.scrollLeft = scrollLeft - walk;
    });

    function plusSlides(n) {
        slideIndex += n;
        showSlides();
    }

    function showSlides() {
        let cardWidth = document.querySelector('.card').offsetWidth + 20; // Including margin
        let totalWidth = track.scrollWidth;
        let containerWidth = slider.offsetWidth;

        if (slideIndex * cardWidth >= totalWidth - containerWidth) {
            slideIndex = 0;
        } else if (slideIndex < 0) {
            slideIndex = Math.floor((totalWidth - containerWidth) / cardWidth);
        }

        track.style.transform = 'translateX(' + (-slideIndex * cardWidth) + 'px)';
    }

    showSlides();
</script>
</body>

</html>