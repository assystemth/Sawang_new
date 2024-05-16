<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>องค์การบริหารส่วนตำบลสว่าง</title>
    <link rel="icon" href="<?php echo base_url("docs/logo.png"); ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet" />
</head>
<style>
    body {
        background-image: url(docs/bg-main11.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100vh;
        overflow: hidden;
    }


    .fadein4 {
        -webkit-animation: fadein 4s linear forwards;
        animation: fadein 4s linear forwards;
    }

    .fadein6 {
        -webkit-animation: fadein 6s linear forwards;
        animation: fadein 6s linear forwards;
    }

    .fadein8 {
        -webkit-animation: fadein 8s linear forwards;
        animation: fadein 8s linear forwards;
    }

    @-webkit-keyframes fadein {

        0%,
        100% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .moveup4 {
        animation: MoveUp 4s ease forwards;
        position: absolute;
        left: 0;
        bottom: 0px;
    }

    @keyframes MoveUp {
        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-290px);
        }
    }

    .moveup4delay {
        animation: MoveUp 4s ease forwards;
        position: absolute;
        left: 0;
        bottom: 0;
        animation-delay: 1s;
    }

    .moveup6delay {
        animation: MoveUp 4s ease forwards;
        position: absolute;
        left: 0;
        bottom: 0;
        animation-delay: 2s;
    }

    @keyframes MoveUp {
        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-290px);
        }
    }

    .star {
        position: absolute;
        top: -20px;
        width: 30px;
        /* ปรับขนาดของภาพตามต้องการ */
        height: 30px;
        /* ปรับขนาดของภาพตามต้องการ */
        background-image: url("docs/lightv2.png");
        /* เพิ่ม URL ของภาพที่ต้องการแสดง */
        background-size: cover;
        /* ให้ภาพปรับขนาดให้พอดีกับขนาดของ .star */
        animation: star 3s linear forwards;
        z-index: 1;
    }

    @keyframes star {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
        }

        80% {
            opacity: 1;
        }

        100% {
            transform: translateY(80vh) rotate(0deg);
            opacity: 0;
        }
    }

    .textfild {
        background-image: url(docs/textfill14.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        /* เปลี่ยนเป็น cover */
        width: 100%;
        max-width: 719px;
        height: 34vh;
        -webkit-animation: fadein 6s linear forwards;
        animation: fadein 6s linear forwards;
        z-index: 10;
    }

    .font-content {
        font-size: 1.2vw;
        font-family: charm;
        color: #c1940b;
        text-shadow: 0.3px 0 0 #d0a879, 0 0.3px 0 #d0a879, -0.3px 0 0 #d0a879,
            0 -0.3px 0 #d0a879;
    }
</style>
</head>

<body>
    <div class="row" style="padding-top: 11vh;">
        <div class="col-sm-6" style="margin-left: 4vw; ">
            <div class="cloud">
                <img class="fadein4" src="docs/w10v3.png" style="width: 50vw; max-width: 888px; height: auto; z-index: 10; position: absolute; object-fit: cover;">
            </div>
            <!-- <div class="fadein4" style="padding-left: 760px; margin-top: -15px; z-index: 12">
                <img class="fadein4" src="docs/tpj.png" />
            </div> -->
        </div>
        <div class="col-sm-5 text-center" style="padding-top: 1vh">
            <div class="fadein4">
                <img src="docs/logo-w10.png" style="width: 12vw; max-width: 231px; height: auto; z-index: 10; position: relative; object-fit: cover; margin-right: 2vw;" />
            </div>

            <div class="fadein4" style=" z-index: 10; position: relative; ">
                <div class="textfild text-center">
                    <span class="font-content">
                        <br />
                        &nbsp;เฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว<br />
                        เนื่องในโอกาสพระราชพิธีมหามงคลเฉลิมพระชนมพรรษา ๖ รอบ
                        <br />๒๘ กรกฎาคม ๒๕๖๗ <br />ขอพระราชทานถวายพระพรชัยมงคล
                        ทรงพระเจริญยิ่งยืนนาน <br />ด้วยเกล้าด้วยกระหม่อม ขอเดชะ
                        <br />ข้าพระพุทธเจ้า คณะผู้บริหาร สมาชิกสภา พนักงานส่วนตำบลและพนักงานจ้าง
                        <br />องค์การบริหารส่วนตำบลสว่าง อำเภอโพนทอง จังหวัดร้อยเอ็ด
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="row fadein6 text-center" style="z-index: 100; position: relative; padding-top: 3vh;">
        <div class="col-sm-6 d-flex justify-content-end">
            <!-- <img src="docs/sign.png" width="280" height="84" /> -->
            <a href="http://forking.moi.go.th/page/index.php" target="_blank" onmouseover="changeImage('docs/main-inname-hover.png')" onmouseout="restoreImage('docs/main-inname.png')">
                <img id="searchImage" src="docs/main-inname.png" style="width: 25vw; max-width: 280px; height: auto; z-index: 10; position: relative; object-fit: cover;" />
            </a>
        </div>
        <div class="col-sm-6 d-flex justify-content-start">
            <a href="<?php echo site_url('Home'); ?>" onmouseover="changeImage2('docs/main-inweb-hover.png')" onmouseout="restoreImage2('docs/main-inweb.png')">
                <img id="searchImage2" src="docs/main-inweb.png" style="width: 25vw; max-width: 280px; height: auto; z-index: 10; position: relative; object-fit: cover;" />
            </a>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function stars() {
            let e = document.createElement("div");
            let size = Math.random() * 12;
            let duration = Math.random() * 3;

            e.setAttribute("class", "star");
            document.body.appendChild(e);

            e.style.left = Math.random() * (innerWidth - 100) + "px"; // ปรับให้ไม่เกินขอบทางขวา 800px
            e.style.fontSize = 12 + size + "px";
            e.style.animationDuration = 4 + duration + "s";

            setTimeout(function() {
                document.body.removeChild(e);
            }, 5000);
        }

        setInterval(function() {
            stars();
        }, 100);

        // ฟังก์ชันเปลี่ยนรูปภาพเมื่อ hover
        function changeImage(imageUrl) {
            document.getElementById("searchImage").src = imageUrl;
        }

        // ฟังก์ชันคืนค่ารูปภาพเดิมเมื่อเม้าส์ออกจากลิงก์
        function restoreImage(originalUrl) {
            document.getElementById("searchImage").src = originalUrl;
        }
        // ฟังก์ชันเปลี่ยนรูปภาพเมื่อ hover
        function changeImage2(imageUrl) {
            document.getElementById("searchImage2").src = imageUrl;
        }

        // ฟังก์ชันคืนค่ารูปภาพเดิมเมื่อเม้าส์ออกจากลิงก์
        function restoreImage2(originalUrl) {
            document.getElementById("searchImage2").src = originalUrl;
        }

        // Function to check screen width and redirect to home controller if less than 600px
        function checkScreenWidthAndRedirect() {
            if (window.innerWidth < 600) {
                window.location.href = "<?php echo site_url('Home'); ?>";
            }
        }

        // Call the function initially
        checkScreenWidthAndRedirect();

        // Add event listener for window resize
        window.addEventListener('resize', checkScreenWidthAndRedirect);
    </script>
</body>

</html>