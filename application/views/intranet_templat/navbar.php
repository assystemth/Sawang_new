    <!-- ส่วนทางซ้าย -->
    <div class="flex-item-left">
        <div class="bg-navbar">
            <!-- <div class="mb-4 text-center" style="padding-top: 20px;">
                <span class="font-head"><b>งานบริการภายใน</b></span>
            </div>
            <div class="border-navbar"></div> -->

            <div class="navbar-right">
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover1v3.png"); ?>" href="<?php echo site_url('System_intranet'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn1v3.png"); ?>" width="100%" height="100%" style="padding-top: 13%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover2v3.png"); ?>" href="<?php echo site_url('Intra_form'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn2v3.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover3v3.png"); ?>" href="<?php echo site_url('Intra_announce'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn3v3.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover4v3.png"); ?>" href="<?php echo site_url('Intra_discipline'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn4v3.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover5v3.png"); ?>" href="<?php echo site_url('Intra_share_file'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn5v3.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover6v3.png"); ?>" href="<?php echo site_url('Intra_gallery'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn6v3.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover7v3.png"); ?>" href="<?php echo site_url('Intra_e_book'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn7v3.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover8.1v3.png"); ?>" href="<?php echo site_url('Intra_egp'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn8.1v3.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover8.2v3.png"); ?>" href="<?php echo site_url('Intra_report'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn8.2v3.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
                <br>
                <a class="navbar-link" data-image-src="<?php echo base_url("docs/intranet/s.nav-intranet-btn-hover9v2.png"); ?>" href="<?php echo site_url('Intra_it'); ?>">
                    <img src="<?php echo base_url("docs/intranet/s.nav-intranet-btn9v2.png"); ?>" width="100%" height="100%" style="padding-top: 5%;">
                </a>
            </div>
        </div>

    </div>

    <?php
    // ฟังก์ชัน setThaiMonth อยู่นอก foreach loop
    function setThaiMonth($dateString)
    {
        $thaiMonths = [
            'January' => 'มกราคม',
            'February' => 'กุมภาพันธ์',
            'March' => 'มีนาคม',
            'April' => 'เมษายน',
            'May' => 'พฤษภาคม',
            'June' => 'มิถุนายน',
            'July' => 'กรกฎาคม',
            'August' => 'สิงหาคม',
            'September' => 'กันยายน',
            'October' => 'ตุลาคม',
            'November' => 'พฤศจิกายน',
            'December' => 'ธันวาคม',
        ];

        foreach ($thaiMonths as $english => $thai) {
            $dateString = str_replace($english, $thai, $dateString);
        }

        return $dateString;
    }
    ?>