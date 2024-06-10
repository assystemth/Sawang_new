<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>องค์การบริหารส่วนตำบลสว่าง</title>
    <link rel="icon" href="<?php echo base_url("docs/logo.png"); ?>" type="image/x-icon">
</head>
<style>

</style>

<?php foreach ($qControl_important_day as $rs) { ?>
    <?php if ($rs->control_important_day_status == 1) { ?>
        <!-- เนื้อหาสำหรับ id 1 -->

        <body>
        <div class="buttons position-absolute top-50 start-50 translate-middle">
            <script>
                const currentYear = new Date().getFullYear(); // ดึงปีปัจจุบัน
                const holiday1Start = new Date(currentYear + "-01-06"); // วันเด็ก
                const holiday1End = new Date(currentYear + "-01-15");
                const holiday2Start = new Date(currentYear + "-02-16"); // วันมาฆบูชา
                const holiday2End = new Date(currentYear + "-02-26");
                const holiday3Start = new Date(currentYear + "-04-01"); // วันจักรี
                const holiday3End = new Date(currentYear + "-04-08");
                const holiday4Start = new Date(currentYear + "-04-09"); // วันสงกรานต์
                const holiday4End = new Date(currentYear + "-04-18");
                const holiday5Start = new Date(currentYear + "-04-27"); // วันฉัตรมงคล
                const holiday5End = new Date(currentYear + "-05-05");
                const holiday6Start = new Date(currentYear + "-05-06"); // วันพืชมงคล
                const holiday6End = new Date(currentYear + "-05-12");
                const holiday7Start = new Date(currentYear + "-05-15"); // วันวิสาขบูชา
                const holiday7End = new Date(currentYear + "-05-24");
                const holiday8Start = new Date(currentYear + "-05-27"); // วันเฉลิมพระชนมพรรษาสมเด็จพระนางเจ้าสุทิดา พัชรสุธาพิมลลักษณ พระบรมราชินี
                const holiday8End = new Date(currentYear + "-06-05");
                const holiday9Start = new Date(currentYear + "-07-24"); // วันเฉลิมพระชนมพรรษาพระบาทสมเด็จพระวชิรเกล้าเจ้าอยู่หัว
                const holiday9End = new Date(currentYear + "-07-30");
                const holiday10Start = new Date(currentYear + "-07-14"); // วันอาสาฬหบูชา
                const holiday10End = new Date(currentYear + "-07-20");
                const holiday11Start = new Date(currentYear + "-07-21"); // วันเข้าพรรษา
                const holiday11End = new Date(currentYear + "-07-23");
                const holiday12Start = new Date(currentYear + "-08-05"); // วันเฉลิมพระชนมพรรษาสมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ พระบรมราชชนนีพันปีหลวง
                const holiday12End = new Date(currentYear + "-08-14");
                const holiday13Start = new Date(currentYear + "-010-06"); // วันนวมินทรมหาราช
                const holiday13End = new Date(currentYear + "-10-15");
                const holiday14Start = new Date(currentYear + "-10-16"); // วันปิยมหาราช
                const holiday14End = new Date(currentYear + "-10-25");
                const holiday15Start = new Date(currentYear + "-11-08"); // วันลอยกระทง
                const holiday15End = new Date(currentYear + "-11-17");
                const holiday16Start = new Date(currentYear + "-11-28"); // วันคล้ายวันพระบรมราชสมภพ พระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร
                const holiday16End = new Date(currentYear + "-12-07");
                const holiday17Start = new Date(currentYear + "-12-08"); // วันรัฐธรรมนูญ
                const holiday17End = new Date(currentYear + "-12-12");
                const holiday18Start = new Date(currentYear + "-12-25"); // วันขึ้นปีใหม่
                const holiday18End = new Date(currentYear + "-01-02");
                const today = new Date();

                if (window.innerWidth < 600) {
                    window.location.href = '<?= base_url('Home') ?>';
                } else if ((today >= holiday1Start && today <= holiday1End) || (today >= holiday2Start && today <= holiday2End) ||
                    (today >= holiday3Start && today <= holiday3End) || (today >= holiday4Start && today <= holiday4End) ||
                    (today >= holiday5Start && today <= holiday5End) || (today >= holiday6Start && today <= holiday6End) ||
                    (today >= holiday7Start && today <= holiday7End) || (today >= holiday8Start && today <= holiday8End) ||
                    (today >= holiday9Start && today <= holiday9End) || (today >= holiday10Start && today <= holiday10End) ||
                    (today >= holiday11Start && today <= holiday11End) || (today >= holiday12Start && today <= holiday12End) ||
                    (today >= holiday13Start && today <= holiday13End) || (today >= holiday14Start && today <= holiday14End) ||
                    (today >= holiday15Start && today <= holiday15End) || (today >= holiday16Start && today <= holiday16End) ||
                    (today >= holiday17Start && today <= holiday17End) || (today >= holiday18Start && today <= holiday18End)) {
                    if (today >= holiday1Start && today <= holiday1End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/kid.jpg"; // วันเด็ก
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday2Start && today <= holiday2End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/makabucha.jpg"; // วันมาฆบูชา
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday3Start && today <= holiday3End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/6apr.jpg"; // วันจักรี
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday4Start && today <= holiday4End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/songkran.gif"; // วันสงกรานต์
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday5Start && today <= holiday5End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/4may.jpg"; // วันฉัตรมงคล
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday6Start && today <= holiday6End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/puechmongkol.jpg"; // วันพืชมงคล
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday7Start && today <= holiday7End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/wisakabucha.jpg"; // วันวิสาขบูชา
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday8Start && today <= holiday8End) {
                        document.getElementById("special-image").src = "https://assystem.co.th/Day/Kapchoeng/3june.jpg"; // วันเฉลิมพระชนมพรรษาสมเด็จพระนางเจ้าสุทิดา พัชรสุธาพิมลลักษณ พระบรมราชินี
                        // document.write('<a href="' + '<?= base_url('Home') ?>' + '"><img src="docs/to-web.png" alt="เข้าสู่เว็บไซต์" style="width: 17vw; height: auto; margin: 0 auto; margin-top: 250%;"></a>');
                        document.write('<div style="display: flex; justify-content: space-between; margin-left:33%; ">');
                        document.write('<a target="_blank" href="' + 'https://wellwishes.royaloffice.th/' + ' "style="width: 35vw; height: 30vh; margin: 0 auto; margin-top: 50%;" ></a>');
                        document.write('<a href="' + '<?= base_url('Home') ?>' + '"  style="width: 50vw; height: 30vh; margin: 0 auto; margin-top: 50%; "></a>');
                        document.write('</div>');
                    } else if (today >= holiday9Start && today <= holiday9End) {
                        document.getElementById("special-image").src = "https://assystem.co.th/Day/Kapchoeng/dad.jpg"; // วันเฉลิมพระชนมพรรษาสมเด็จพระนางเจ้าสุทิดา พัชรสุธาพิมลลักษณ พระบรมราชินี
                        // document.write('<a href="' + '<?= base_url('Home') ?>' + '"><img src="docs/to-web.png" alt="เข้าสู่เว็บไซต์" style="width: 17vw; height: auto; margin: 0 auto; margin-top: 250%;"></a>');
                        document.write('<div style="display: flex; justify-content: space-between; margin-left:33%; ">');
                        document.write('<a target="_blank" href="' + 'https://wellwishes.royaloffice.th/' + ' "style="width: 40vw; height: 30vh; margin: 0 auto; margin-top: 50%;" ></a>');
                        document.write('<a href="' + '<?= base_url('Home') ?>' + '"  style="width: 50vw; height: 30vh; margin: 0 auto; margin-top: 50%; "></a>');
                        document.write('</div>');
                    } else if (today >= holiday10Start && today <= holiday10End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/asarahabucha.jpg"; // วันอาสาฬหบูชา
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday11Start && today <= holiday11End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/kaupunsa.jpg"; // วันเข้าพรรษา
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday12Start && today <= holiday12End) {
                        document.getElementById("special-image").src = "https://assystem.co.th/Day/Kapchoeng/12aug.jpg"; // วันเฉลิมพระชนมพรรษาสมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ พระบรมราชชนนีพันปีหลวง
                        // document.write('<a href="' + '<?= base_url('Home') ?>' + '"><img src="docs/to-web.png" alt="เข้าสู่เว็บไซต์" style="width: 17vw; height: auto; margin: 0 auto; margin-top: 250%;"></a>');
                        document.write('<div style="display: flex; justify-content: space-between; margin-left:33%; ">');
                        document.write('<a target="_blank" href="' + 'https://wellwishes.royaloffice.th/' + ' "style="width: 35vw; height: 30vh; margin: 0 auto; margin-top: 50%;" ></a>');
                        document.write('<a href="' + '<?= base_url('Home') ?>' + '"  style="width: 50vw; height: 30vh; margin: 0 auto; margin-top: 50%; "></a>');
                        document.write('</div>');
                    } else if (today >= holiday13Start && today <= holiday13End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/13oct.jpg"; // วันนวมินทรมหาราช
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday14Start && today <= holiday14End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/23oct.jpg"; // วันปิยมหาราช
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday15Start && today <= holiday15End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/loykratong.jpg"; // วันลอยกระทง
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday16Start && today <= holiday16End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/5dec.jpg"; // วันคล้ายวันพระบรมราชสมภพ พระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday17Start && today <= holiday17End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/10dec.jpg"; // วันรัฐธรรมนูญ
                        specialImage.addEventListener("click", goToHome);
                    } else if (today >= holiday18Start && today <= holiday18End) {
                        const specialImage = document.getElementById("special-image");
                        specialImage.src = "https://assystem.co.th/Day/Kapchoeng/newyear.jpg"; // วันขึ้นปีใหม่
                        specialImage.addEventListener("click", goToHome);
                    }
                } else {
                    window.location.href = '<?= base_url('Home') ?>';
                }

                // ฟังก์ชัน goToHome ที่เรียกไปยัง controller "Home"
                function goToHome() {
                    window.location.href = '<?= base_url('Home') ?>';
                }
            </script>

        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


        </body>

    <?php } elseif ($rs->control_important_day_status == 2) { ?>
        <?php foreach ($qImportant_day as $rs) { ?>
            <?php if ($rs->important_day_id == 1) { ?>
                <!-- เนื้อหาสำหรับ id 1 -->

                <body>
                    manual


                </body>
            <?php } elseif ($rs->important_day_id == 2) { ?>
                <!-- เนื้อหาสำหรับ id 2 -->

                <body>
                    2
                </body>

            <?php } elseif ($rs->important_day_id == 3) { ?>
                <!-- เนื้อหาสำหรับ id 3 -->

                <body>
                    3
                </body>

            <?php } elseif ($rs->important_day_id == 4) { ?>
                <!-- เนื้อหาสำหรับ id 4 -->

                <body>
                    4
                </body>

            <?php } elseif ($rs->important_day_id == 5) { ?>
                <!-- เนื้อหาสำหรับ id 5 -->

                <body>
                    5
                </body>

            <?php } elseif ($rs->important_day_id == 6) { ?>
                <!-- เนื้อหาสำหรับ id 6 -->

                <body>
                    6
                </body>

            <?php } elseif ($rs->important_day_id == 7) { ?>
                <!-- เนื้อหาสำหรับ id 7 -->

                <body>
                    7
                </body>

            <?php } elseif ($rs->important_day_id == 8) { ?>
                <!-- เนื้อหาสำหรับ id 8 -->

                <body>
                    8
                </body>

            <?php } elseif ($rs->important_day_id == 9) { ?>
                <!-- เนื้อหาสำหรับ id 9 -->

                <body>
                    9
                </body>

            <?php } elseif ($rs->important_day_id == 10) { ?>
                <!-- เนื้อหาสำหรับ id 10 -->

                <body>
                    10
                </body>

            <?php } elseif ($rs->important_day_id == 11) { ?>
                <!-- เนื้อหาสำหรับ id 11 -->

                <body>
                    11
                </body>

            <?php } elseif ($rs->important_day_id == 12) { ?>
                <!-- เนื้อหาสำหรับ id 12 -->

                <body>
                    12
                </body>

            <?php } elseif ($rs->important_day_id == 13) { ?>
                <!-- เนื้อหาสำหรับ id 13 -->

                <body>
                    13
                </body>

            <?php } elseif ($rs->important_day_id == 14) { ?>
                <!-- เนื้อหาสำหรับ id 14 -->

                <body>
                    14
                </body>

            <?php } elseif ($rs->important_day_id == 15) { ?>
                <!-- เนื้อหาสำหรับ id 15 -->

                <body>
                    15
                </body>

            <?php } elseif ($rs->important_day_id == 16) { ?>
                <!-- เนื้อหาสำหรับ id 16 -->

                <body>
                    16
                </body>

            <?php } elseif ($rs->important_day_id == 17) { ?>
                <!-- เนื้อหาสำหรับ id 17 -->

                <body>
                    17
                </body>

            <?php } elseif ($rs->important_day_id == 18) { ?>
                <!-- เนื้อหาสำหรับ id 18 -->

                <body>
                    18
                </body>

            <?php } elseif ($rs->important_day_id == 19) { ?>
                <!-- เนื้อหาสำหรับ id 19 -->

                <body>
                    <?php
                    $url = "https://assystem.co.th/Day/demoassystem/main.php";
                    $base_url = "https://assystem.co.th/Day/demoassystem/";

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // ปิดการตรวจสอบ SSL ชั่วคราว
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // ปิดการตรวจสอบ SSL ชั่วคราว
                    curl_setopt($ch, CURLOPT_VERBOSE, true); // เปิดการดีบัก
                    $verbose = fopen('php://temp', 'w+');
                    curl_setopt($ch, CURLOPT_STDERR, $verbose);

                    $content = curl_exec($ch);

                    if (curl_errno($ch)) {
                        $error_message = curl_error($ch);
                        rewind($verbose);
                        $verbose_log = stream_get_contents($verbose);
                        fclose($verbose);
                        curl_close($ch);
                        die("ไม่สามารถดึงข้อมูลจาก URL ที่ระบุได้: " . $error_message . "\nVerbose information:\n" . $verbose_log);
                    }

                    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    curl_close($ch);

                    if ($http_code != 200) {
                        die("ไม่สามารถดึงข้อมูลจาก URL ที่ระบุได้: HTTP Status Code " . $http_code);
                    }

                    // เปลี่ยน URL สัมพัทธ์ให้เป็น URL สัมบูรณ์โดยใช้ HTTPS
                    $content = preg_replace_callback('/(href|src)="(?!https?)([^"]*)"/i', function ($matches) use ($base_url) {
                        $url = filter_var($matches[2], FILTER_SANITIZE_URL);
                        return $matches[1] . '="' . $base_url . $url . '"';
                    }, $content);

                    // แก้ไข URL สำหรับ CSS โดยใช้ HTTPS
                    $content = preg_replace_callback('/url\((\'|")?(?!https?)([^\'")]+)(\'|")?\)/i', function ($matches) use ($base_url) {
                        $url = filter_var($matches[2], FILTER_SANITIZE_URL);
                        $quote1 = isset($matches[1]) ? $matches[1] : '';
                        $quote3 = isset($matches[3]) ? $matches[3] : '';
                        return 'url(' . $quote1 . $base_url . $url . $quote3 . ')';
                    }, $content);

                    // แก้ไข URL สำหรับรูปภาพใน tag <img> โดยใช้ HTTPS
                    $content = preg_replace_callback('/<img[^>]+src="(?!https?)([^"]+)"/i', function ($matches) use ($base_url) {
                        $url = filter_var($matches[1], FILTER_SANITIZE_URL);
                        return str_replace($matches[1], $base_url . $url, $matches[0]);
                    }, $content);

                    // ทำความสะอาดเนื้อหาหลังจากการเปลี่ยน URL
                    $content = str_replace('/>', '>', $content);

                    echo $content;
                    ?>
                </body>
            <?php } ?>
        <?php } ?>
    <?php } ?>
<?php } ?>


</html>