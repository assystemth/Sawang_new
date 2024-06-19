<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <link rel="icon" href="<?php echo base_url("docs/logo.png"); ?>" type="image/x-icon">

    <title>องค์การบริหารส่วนตำบลสว่าง</title>
    <!-- icon -->
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Stylesheet-->
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
            /* The image used */
            background-image: url('<?php echo base_url("docs/s.bg-login.png"); ?>');
            /* width: 1920px; */
            /* height: 1000px; */
            /* Full height */
            height: 100vh;
            width: 100vw;
            /* Center the image horizontally and vertically */
            background-position: center center;
            /* Do not repeat the background image */
            background-repeat: no-repeat;
            /* Cover the entire div with the background image */
            background-size: cover;
        }

        .bg-content {
            width: 1075px;
            height: 383px;
            flex-shrink: 0;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.50);
            /* background-color: rgba(255, 255, 255, 0.13); */
            /* background-color: rgba(255, 255, 255, 0.0); */
            position: absolute;
            transform: translate(-50%, -50%);
            top: 33%;
            left: 50%;
            /* border-radius: 24px; */
            /* backdrop-filter: blur(3px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 20px 10px; */
        }

        h2 {
            color: #FFF;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
            font-family: Kanit;
            font-style: normal;
            font-weight: 500;
            line-height: 48.167px;
            /* 185.258% */
        }

        h3 {
            color: #FFF;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
            font-family: Kanit;
            font-style: normal;
            font-weight: 500;
            line-height: 48.167px;
            margin-top: -20px;
        }

        .logo-header {
            text-align: center;
            margin-top: -90px;
        }

        .bg-login-back-office {
            background-image: url('<?php echo base_url("docs/b.btn-login-back-office1.png"); ?>');
            width: 312px;
            height: 196px;
        }

        .bg-login-back-office:hover {
            background-image: url('<?php echo base_url("docs/b.btn-login-back-office1-hover.png"); ?>');
            width: 312px;
            height: 196px;
        }

        .font-back-office {
            color: #000;
            text-align: center;
            font-family: "Noto Looped Thai";
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        .bg-login-admin {
            background-image: url('<?php echo base_url("docs/b.btn-login-admin1.png"); ?>');
            width: 312px;
            height: 196px;
        }

        .bg-login-admin:hover {
            background-image: url('<?php echo base_url("docs/b.btn-login-admin1-hover.png"); ?>');
            width: 312px;
            height: 196px;
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
            padding-top: 520px;
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
    </style>
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

                <div class="row">
                    <div class="col-6">
                        <a href="<?php echo site_url('Login_intranet'); ?>" style="text-decoration: none;">
                            <div class="bg-login-back-office text-center" style="margin-left: 130px; padding-top: 140px;">
                                <span class="font-back-office">ระบบ Back Office</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="<?php echo site_url('User'); ?>" style="text-decoration: none;">
                            <div class="bg-login-admin text-center" style="margin-left: 90px; padding-top: 140px;">
                                <span class="font-back-office">ระบบแอดมิน</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="text-center" style="padding-top: 45px;">
                    <span class="font-service">ติดปัญหาการใช้งานติดต่อ Support 043-009848 ต่อ 1 หรือ Line @assystem</span>
                </div>
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