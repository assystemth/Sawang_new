<div class="image-slide-stick-mid">
    <a href="https://itas.nacc.go.th/go/eit/u4gpi2" target="_blank" rel="noopener noreferrer">
        <img src="docs/eit-slide-mid.png">
    </a>
    <img src="docs/eit-slide-close.png" class="close-button-slide-mid" onclick="closeImageSlideMid()">
</div>

<div class="welcome">

    <!-- <div class="tab-container">
        <img src="docs/item-news-top.png" width="324" height="100" style="position: absolute; z-index: 2;">
        <div id="marquee-container">
            <div class="marquee">
                <div>
                    <?php
                    $maxIterations = 1000;
                    $iteration = 0;
                    while ($iteration < $maxIterations) {
                        foreach ($qHotnews as $index => $hotnews) {
                            echo '<span>' . $hotnews->hotNews_text . '</span>';
                        }
                        $iteration++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div> -->
</div>

<div class="welcome-btm">
    <div class="text-center" style="padding-top:15.5%;">
        <span class="font-welcome-btm">องค์การบริหารส่วนตำบลสว่าง</span>
    </div>
    <div class="d-flex justify-content-center">
        <div class="welcome-btm-text-run">
            <div class="row">
                <div class="col-2">
                    <span class="font-left-text-run">ประกาศ</span>
                </div>
                <div class="col-10">
                    <div class="tab-container">
                        <?php
                        $news = $this->HotNews_model->hotnews_frontend();

                        echo '<div class="text-run-update">';
                        foreach ($news as $item) {
                            echo '<p>' . $item->hotNews_text . '</p>';
                        }
                        echo '</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="image-slide-stick-mid">
    <a href="https://itas.nacc.go.th/go/eit/u4gpi2" target="_blank" rel="noopener noreferrer">
        <img src="docs/eit-slide-mid.png">
    </a>
    <img src="docs/eit-slide-close.png" class="close-button-slide-mid" onclick="closeImageSlideMid()">
</div> -->




<div class="bg-banner">
    <div class="crop">
        <div class="row weather">
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <img src="docs/weather_icon.png" alt="">
                    </div>
                    <div class="col-11 font-text-run" style="margin-top: 5px;">
                        <marquee direction="left"> รายงานสภาวะอากาศ - ร้อยเอ็ด : อ.เมือง จ.ร้อยเอ็ด วันที่ : 27/04/2024 เวลา
                            16:00 นาฬิกา อุณหภูมิ : 42.5 องศาเซลเซียส ความชื้นสัมพัทธ์ : 24 % ความกดอากาศ : 1000.10
                            มิลลิบาร์ </marquee>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end" style="width: 309px; margin-top: -5px;">
                <div class="gcse-search"></div>
            </div>
        </div>
        <div class="row" style="margin-top: -80px;">
            <div class="col-6 content-banner">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="z-index: 10;">
                    <div class="carousel-inner">
                        <?php foreach ($qBanner as $index => $img_banner) { ?>
                            <div class="carousel-item <?= ($index === 0) ? "active" : ""; ?>" data-bs-interval="5000">
                                <a href="<?= $img_banner->banner_link; ?>" target="_blank">
                                    <img src="docs\img\<?= $img_banner->banner_img; ?>" class="d-block w-100">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="carousel-indicators">
                        <?php
                        foreach ($qBanner as $index => $img_banner) {
                            $active = ($index === 0) ? "active" : "";
                            echo '<button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-current="true" aria-label="Slide ' . ($index + 1) . '"></button>';
                        }
                        ?>
                    </div>
                </div>
                <div class="banner-cartoon">
                    <div style="margin-left: 200px; padding: 45px; text-align: center;">
                        <span class="font-banner-cartoon">องค์การบริหารส่วนตำบลสว่าง<br>ยินดีต้อนรับค่ะ</span>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="banner-calendar">
                </div>
                <div class="row">
                    <div class="col-6 underline">
                        <a href="<?php echo site_url('Pages/ita_all'); ?>">
                            <div class="banner-button-green" style="margin-top: 80px;">
                                <div class="row">
                                    <div class="col-7" style="padding: 10px 10px 0px 50px;">
                                        <span class="font-banner-button-green">การประเมินคุณธรรม<br>&nbsp;&nbsp;และความโปร่งใส</span>
                                    </div>
                                    <div class="col" style="padding: 25px 25px">
                                        <span class="font-banner-button-green">ITA</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="https://itas.nacc.go.th/go/iit/u4gpi2" target="_blank">
                            <div class="banner-button-green" style="margin-top: 45px;">
                                <div class="row">
                                    <div class="col-8" style="padding: 22px 10px 0px 38px;">
                                        <span class="font-banner-button-green">แบบวัดการรับรู้ภายใน</span>
                                    </div>
                                    <div class="col" style="padding: 25px 0px 0px 0px; margin-left: -10px;">
                                        <span class="font-banner-button-green">IIT</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="https://itas.nacc.go.th/go/eit/u4gpi2" target="_blank">
                            <div class="banner-button-green" style="margin-top: 45px;">
                                <div class="row">
                                    <div class="col-8" style="padding: 22px 10px 0px 33px;">
                                        <span class="font-banner-button-green">แบบวัดการรับรู้ภายนอก</span>
                                    </div>
                                    <div class="col" style="padding: 25px 0px 0px 0px; margin-left: -10px;">
                                        <span class="font-banner-button-green">EIT</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 underline">
                        <a href="<?php echo site_url('Pages/msg_pres'); ?>">
                            <div class="banner-button-green" style="margin-top: 80px;">
                                <div class="row">
                                    <div class="col-8" style="padding: 22px 10px 0px 70px;">
                                        <span class="font-banner-button-green">สารจากนายก</span>
                                    </div>
                                    <div class="col" style="padding: 25px 0px 0px 0px; margin-left: -15px;">
                                        <span class="font-banner-button-green">MES</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('Pages/questions'); ?>">
                            <div class="banner-button-green" style="margin-top: 45px;">
                                <div class="row">
                                    <div class="col-8" style="padding: 22px 10px 0px 70px;">
                                        <span class="font-banner-button-green">คำถามที่พบบ่อย</span>
                                    </div>
                                    <div class="col" style="padding: 25px 0px 0px 0px; margin-left: -15px;">
                                        <span class="font-banner-button-green">FAQ</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('Pages/contact'); ?>">
                            <div class="banner-button-green" style="margin-top: 45px;">
                                <div class="row">
                                    <div class="col-8" style="padding: 22px 10px 0px 70px;">
                                        <span class="font-banner-button-green">ติดต่อสอบถาม</span>
                                    </div>
                                    <div class="col" style="padding: 25px 0px 0px 0px; margin-left: -15px;">
                                        <span class="font-banner-button-green">CON</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="bg-activity2">
    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 3%;">
            <span class="font-header-activity">กิจกรรม</span>
        </div>
        <div class="row d-flex justify-content-center">
                <?php foreach ($qActivity as $activity) { ?>
                    <div class="card-activity col-2 mx-4" style="margin-top: 40px;">
                        <?php if (!empty($activity->activity_img)) : ?>
                            <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                                <img src="<?php echo base_url('docs/img/' . $activity->activity_img); ?>" width="245px" height="182px" style="border-radius: 24px 24px 0 0;">
                            </a>
                        <?php else : ?>
                            <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                                <img src="<?php echo base_url('docs/coverphoto.png'); ?>">
                            </a>
                        <?php endif; ?>
                        <br>
                        <div class="box-activity">
                            <div class="text-activity underline">
                                <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                                    <span><?= $activity->activity_name; ?>
                                </a>
                            </div>
                            <a class="underline" href="<?php echo site_url('Pages/activity_detail/' . $activity->activity_id); ?>">

                            </a>
                            &nbsp;
                            <?php
                            // วันที่ของข่าว
                            $activity_date = new DateTime($activity->activity_date);

                            // วันที่ปัจจุบัน
                            $current_date = new DateTime();

                            // คำนวณหาความต่างของวัน
                            $interval = $current_date->diff($activity_date);
                            $days_difference = $interval->days;

                            // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                            if ($days_difference > 30) {
                                // ไม่แสดงรูปภาพ
                            } else {
                                // แสดงรูปภาพ
                                echo '<img src="docs/activity-new.gif">';
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-3">
                                <span class="span-time-home "><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-calendar-minus-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1z" />
                                    </svg>
                                    <?php
                                    // ในการใช้งาน setThaiMonth
                                    $date = new DateTime($activity->activity_date);
                                    $day_th = $date->format('d');
                                    $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                    $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                    $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                    echo $formattedDate;
                                    ?>
                                </span>
                                <!-- <span class="span-time-home">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                                class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg>
                            <?php
                            $date = new DateTime($activity->activity_date);
                            $formattedTime = $date->format('H:i'); // เวลา
                            echo $formattedTime;
                            ?>
                            น.</span> -->
                            </div>
                            <div class="col-5">
                                <div class="font-12 underline d-flex justify-content-end mt-4">
                                    <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                        </svg>เปิดดู : <span><?= $activity->activity_view; ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
            <a href="<?php echo site_url('pages/activity'); ?>">
                <div class="button-actifity-all">
                    <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                </div>
            </a>
        </div>
    </div>
</div>


<div class="bg-public-news">
    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 3%;">
            <span class="font-header-home">งานประชาสัมพันธ์</span>
        </div>
        <div id="myDIV" class="underline" style="margin-top: 20px;">
            <div class="tab-container2 d-flex justify-content-center">
                <div class="tab-link-two" onclick="openTabTwo('tabtwo1')">
                    <div class="public-button active-public">
                        <span class="font-public-button">ข่าวประชาสัมพันธ์</span>
                    </div>
                </div>
                <div class="tab-link-two" onclick="openTabTwo('tabtwo2')">
                    <!-- <img src="docs/public_button.png" alt="Tab 2"> -->
                    <div class="public-button" style="padding: 10px 60px;">
                        <span class="font-public-button">ข้อบัญญัติ</span>
                    </div>
                </div>
                <div class="tab-link-two" onclick="openTabTwo('tabtwo3')">
                    <!-- <img src="docs/public_button.png" alt="Tab 3"> -->
                    <div class="public-button" style="padding: 10px 80px;">
                        <span class="font-public-button">คำสั่ง</span>
                    </div>
                </div>
                <div class="tab-link-two" onclick="openTabTwo('tabtwo4')">
                    <!-- <img src="docs/public_button.png" alt="Tab 4"> -->
                    <div class="public-button" style="padding: 10px 70px;">
                        <span class="font-public-button">ประกาศ</span>
                    </div>
                </div>

            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div id="tabtwo1" class="tab-content-two">
                    <?php foreach ($qNews as $news) { ?>
                        <div class="content-news-detail">
                            <a href="<?php echo site_url('Pages/news_detail/' . $news->news_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($news->news_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time" style="padding-left: 30px;">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($news->news_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $news_date = new DateTime($news->news_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($news_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/news'); ?>">
                            <div class="button-new-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tabtwo2" class="tab-content-two">
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_bgps'); ?>">
                            <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติงบประมาณ</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_chh'); ?>">
                            <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการควบคุมกิจการที่เป็นอันตรายต่อสุขภาพ</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_ritw'); ?>">
                            <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการติดตั้งระบบบำบัดน้ำเสียในอาคาร</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_market'); ?>">
                            <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติตลาด</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_rmwp'); ?>">
                            <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการจัดการสิ่งปฏิกูลและมูลฝอย</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_rcsp'); ?>">
                            <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติหลักเกณฑ์การคัดมูลฝอย</span>
                        </a>
                    </div>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/canon_rcp'); ?>">
                            <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการควบคุมการเลี้ยงหรือปล่อยสุนัขและแมว</span>
                        </a>
                    </div>
                </div>
                <div id="tabtwo3" class="tab-content-two">
                    <?php foreach ($qOrder as $gw) { ?>
                        <div class="content-news-detail">
                            <a href="<?php echo site_url('Pages/order_detail/' . $gw->order_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($gw->order_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start ">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($gw->order_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $order_date = new DateTime($gw->order_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($order_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/order'); ?>">
                            <div class="button-new-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tabtwo4" class="tab-content-two">
                    <?php foreach ($qAnnounce as $gw) { ?>
                        <div class="content-news2-detail">
                            <a href="<?php echo site_url('Pages/announce_detail/' . $gw->announce_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($gw->announce_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($gw->announce_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $announce_date = new DateTime($gw->announce_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($announce_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/announce'); ?>">
                            <div class="button-new-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-public-news2">
    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 3%;">
            <span class="font-header-home">งานจัดซื้อจัดจ้าง</span>
        </div>
        <div id="myDIV2" class="underline" style="margin-top: 20px;">
            <div class="tab-container2 d-flex justify-content-center">
                <div class="tab-link" onclick="openTab('tab1')">
                    <!-- <img src="docs/news_button.png" alt="Tab 1"> -->
                    <div class="new-button active-new" style="padding: 10px 60px;">
                        <span class="font-new-button">ข่าวจัดซื้อจัดจ้าง</span>
                    </div>
                </div>
                <div class="tab-link" onclick="openTab('tab2')">
                    <!-- <img src="docs/news_button.png" alt="Tab 2"> -->
                    <div class="new-button" style="padding: 10px 50px;">
                        <span class="font-new-button">จัดซื้อจัดจ้าง e-GP</span>
                    </div>
                </div>
                <div class="tab-link" onclick="openTab('tab3')">
                    <!-- <img src="docs/news_button.png" alt="Tab 3"> -->
                    <div class="new-button" style="padding: 10px 0px;">
                        <span class="font-new-button">รายงานใช้จ่ายงบประมาณ</span>
                    </div>
                </div>
                <div class="tab-link" onclick="openTab('tab4')">
                    <!-- <img src="docs/news_button.png" alt="Tab 4"> -->
                    <div class="new-button" style="padding: 10px 0px;">
                        <span class="font-new-button">รายงานผลการดำเนินงาน</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div id="tab1" class="tab-content">
                    <?php foreach ($qProcurement as $pcm) { ?>
                        <div class="content-news2-detail">
                            <a href="<?php echo site_url('Pages/procurement_detail/' . $pcm->procurement_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($pcm->procurement_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($pcm->procurement_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $procurement_date = new DateTime($pcm->procurement_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($procurement_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/procurement'); ?>">
                            <div class="button-new2-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tab2" class="tab-content">
                    <?php
                    // เพิ่มตัวแปร $limited_data เพื่อจัดเก็บ array ที่จะใช้กับ array_slice
                    $limited_data = [];

                    foreach ($json_data as $key1 => $value1) :
                        if (is_array($value1)) :
                            foreach ($value1 as $key2 => $value2) :
                                if (is_array($value2)) :
                                    foreach ($value2 as $key3 => $value3) :
                                        if ($key3 === 'project_id') :
                                            $url = 'https://process3.gprocurement.go.th/egp2procmainWeb/jsp/procsearch.sch?servlet=gojsp&proc_id=ShowHTMLFile&processFlows=Procure&projectId=' . $value3 . '&templateType=W2&temp_Announ=A&temp_itemNo=0&seqNo=1';
                                        endif;
                                        if ($key3 === 'project_name') :
                                            // ใส่ข้อมูลลงใน $limited_data
                                            $limited_data[] = [
                                                'url' => $url,
                                                'project_name' => $value3,
                                            ];
                                        endif;
                                    endforeach;
                                endif;
                            endforeach;
                        endif;
                    // Add a new line after each subarray at the first level
                    endforeach;

                    // เรียงลำดับ $limited_data ตาม 'project_id' ล่าสุด
                    usort($limited_data, function ($a, $b) {
                        return $b['url'] <=> $a['url'];
                    });

                    // ในกรณีที่ต้องการแสดงเฉพาะ 4 แถวล่าสุด
                    $limited_data = array_slice($limited_data, 0, 9);

                    // ตรวจสอบว่ามีข้อมูลหรือไม่และแสดงผลลัพธ์
                    if (!empty($limited_data)) :
                        foreach ($limited_data as $data) :
                    ?>
                            <div class="content-news2-detail">
                                <span class="text-news"><a href="<?= htmlspecialchars($data['url']) ?>" target="_blank">
                                        <img src="<?php echo base_url("docs/e-gp.png"); ?>" style="width: 40; height: 40px;">
                                        <?= htmlspecialchars($data['project_name']) ?></a></span>
                            </div>
                        <?php
                        endforeach;
                    else :
                        ?>
                        <span class="text-center align-center" style="font-size: 36px;">ไม่สามารถดึงข้อมูลจากระบบจัดซือจัดจ้างภาครัฐได้
                            กรุณาโหลดหน้าเว็บใหม่อีกครั้ง</span>
                    <?php
                    endif;
                    ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/e_gp'); ?>">
                            <div class="button-new2-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tab3" class="tab-content">
                    <?php foreach ($qP_reb as $anou) { ?>
                        <div class="content-news2-detail">
                            <a href="<?php echo site_url('Pages/p_reb_detail/' . $anou->p_reb_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($anou->p_reb_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($anou->p_reb_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $p_reb_date = new DateTime($anou->p_reb_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($p_reb_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/p_reb'); ?>">
                            <div class="button-new2-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="tab4" class="tab-content">
                    <?php foreach ($qP_rpo as $anou) { ?>
                        <div class="content-news2-detail">
                            <a href="<?php echo site_url('Pages/p_rpo_detail/' . $anou->p_rpo_id); ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($anou->p_rpo_name); ?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="d-flex justify-content-start">
                                                    <span class="text-news-time">
                                                        <?php
                                                        // ในการใช้งาน setThaiMonth
                                                        $date = new DateTime($anou->p_rpo_date);
                                                        $day_th = $date->format('d');
                                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                        echo $formattedDate;
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-2" style="margin-top: -27px;">
                                                <?php
                                                // วันที่ของข่าว
                                                $p_rpo_date = new DateTime($anou->p_rpo_date);

                                                // วันที่ปัจจุบัน
                                                $current_date = new DateTime();

                                                // คำนวณหาความต่างของวัน
                                                $interval = $current_date->diff($p_rpo_date);
                                                $days_difference = $interval->days;

                                                // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                                if ($days_difference > 30) {
                                                    // ไม่แสดงรูปภาพ
                                                } else {
                                                    // แสดงรูปภาพ
                                                    echo '<img src="docs/news-new.gif" width="40" height="16">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center underline" style="margin-top: 80px;">
                        <a href="<?php echo site_url('pages/p_rpo'); ?>">
                            <div class="button-new2-all" style="margin-top: -50px;">
                                <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bg-otop">
    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 3%; color: #fff;">
            <div class="otop-box">
                <span class="font-header-otop d-flex justify-content-center">ผลิตภัณฑ์ชุมชน</span>
            </div>
        </div>
        <div class="otop-content">
            <div class="text-center">
                <div class="row">
                    <div class="col-3" style="margin-top: -50px;">
                        <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                            <img src="docs\s.item-otop1.png">
                            <div>

                            </div>
                        </a>
                    </div>
                    <div class="col-3" style="padding-top: 0;">
                        <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                            <img src="docs\s.item-otop2.png">
                        </a>
                    </div>
                    <div class="col-3" style="padding-top: 40px;">
                        <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                            <img src="docs\s.item-otop3.png">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                            <img src="docs\s.item-otop4.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center" style="padding-top: 3%; color: #fff;">
            <div class="otop-box">
                <span class="font-header-otop d-flex justify-content-center">สถานที่ท่องเที่ยว</span>
            </div>
        </div>
        <div class="travel-content" style="margin-left: 300px;">
            <div class="slick-carousel d-flex justify-content-center" style="margin-top: -105px;">
                <?php foreach ($qTravel as $travel) { ?>
                    <div class="text-center">
                        <a href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                            <img src="<?php echo base_url('docs/img/' . $travel->travel_img); ?>" width="239px" height="239px" class="image-with-shadow-travel">
                        </a>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a class="underline" href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                                <?php
                                $imageName = '';
                                switch ($travel->travel_id) {
                                    case 1:
                                        $imageName = 's.text-travel1.png';
                                        break;
                                    case 2:
                                        $imageName = 's.text-travel2.png';
                                        break;
                                    case 3:
                                        $imageName = 's.text-travel3.png';
                                        break;
                                    case 4:
                                        $imageName = 's.text-travel4.png';
                                        break;
                                    case 5:
                                        $imageName = 's.text-travel5.png';
                                        break;
                                    case 6:
                                        $imageName = 's.text-travel6.png';
                                        break;
                                    default:
                                        $imageName = 'default.jpg';
                                        break;
                                }
                                ?>
                                <img src="<?php echo base_url('docs/' . $imageName); ?>" alt="Image for ID <?php echo $travel->travel_id; ?>">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>





<div class="bg-service">
    <div class="crop">
        <div class="d-flex justify-content-center" style="padding-top: 3%;">
            <div class="service-cartoon">

            </div>
        </div>

    </div>
</div>

<div class="bg-link">
    <div class="crop">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="https://www.roiet.go.th/101province/" target="_blank"><img src="docs/s.link-link1.png"></a></div>
                <div class="swiper-slide"><a href="https://www.pao-roiet.go.th/" target="_blank"><img src="docs/s.link-link2.png"></a></div>
                <div class="swiper-slide"><a href="http://www.sasuk101.moph.go.th/" target="_blank"><img src="docs/s.link-link3.png"></a></div>
                <div class="swiper-slide"><a href="https://www.cgd.go.th/cs/internet/internet/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%812.html?page_locale=th_TH" target="_blank"><img src="docs/s.link-link4.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/" target="_blank"><img src="docs/s.link-link5.png"></a></div>
                <div class="swiper-slide"><a href="https://www.doe.go.th/" target="_blank"><img src="docs/s.link-link6.png"></a></div>
                <div class="swiper-slide"><a href="https://www.nhso.go.th/" target="_blank"><img src="docs/s.link-link7.png"></a></div>
                <div class="swiper-slide"><a href="https://www.roiet.go.th/dumrong/" target="_blank"><img src="docs/s.link-link8v2.png"></a></div>
                <div class="swiper-slide"><a href="https://www.admincourt.go.th/admincourt/site/09illustration.html" target="_blank"><img src="docs/s.link-link9.png"></a></div>
                <div class="swiper-slide"><a href="https://www.dla.go.th/index.jsp" target="_blank"><img src="docs/s.link-link10.png"></a></div>
                <div class="swiper-slide"><a href="https://info.go.th/" target="_blank"><img src="docs/s.link-link11.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/about-us/%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%9B%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81/%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%94%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%8A%E0%B8%A7%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B9%89/" target="_blank"><img src="docs/s.link-link12.png"></a></div>
                <div class="swiper-slide"><a href="n" target="_blank"><img src="docs/s.link-link13.png"></a></div>
                <div class="swiper-slide"><a href="https://www.oic.go.th/web2017/km/index.html" target="_blank"><img src="docs/s.link-link15.png"></a></div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
            <div class="custom-button-prev">
                <img src="docs/s.previous-travel.png" alt="Prev">
            </div>
            <div class="custom-button-next">
                <img src="docs/s.next-travel.png" alt="Next">
            </div>
        </div>
    </div>

</div>