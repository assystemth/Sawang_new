<div class="text-center font-head-top">
    <span>ระบบแชร์ไฟล์</span>
</div>
</div>

<div class="crop">

    <div class="main-container">
        <div class="main-sidebar">
            <a href="<?php echo site_url('System_intranet'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon1.png"); ?>">&nbsp;&nbsp;ข่าวภายในองค์กร
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_form'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon2.png"); ?>">&nbsp;&nbsp;แบบฟอร์ม
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_announce'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon3.png"); ?>">&nbsp;&nbsp;คำสั่ง / ประกาศ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_discipline'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon4.png"); ?>">&nbsp;&nbsp;ระเบียบ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_share_file'); ?>" class="font-nav">
                <div class="navbars-active" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon5.png"); ?>">&nbsp;&nbsp;ระบบแชร์ไฟล์
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_gallery'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon6.png"); ?>">&nbsp;&nbsp;คลังรูปภาพ / วิดีโอ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_e_book'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon7.png"); ?>">&nbsp;&nbsp;E-Book
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_egp'); ?>" class="font-nav">
                <div class="navbars">
                    <img src="<?php echo base_url("docs/intranet/intra-icon89.png"); ?>">&nbsp;&nbsp;รายงาน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;งบประมาณและโครงการ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_report'); ?>" class="font-nav">
                <div class="navbars">
                    <img src="<?php echo base_url("docs/intranet/intra-icon89.png"); ?>">&nbsp;&nbsp;รายงาน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แจ้งเรื่องร้องเรียน
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_it'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon10.png"); ?>">&nbsp;&nbsp;เทคโนโลยี / สารสนเทศ
                </div>
            </a>
            <div class="border-nav"></div>
        </div>
        <div class="main-content">
            <div class="divcontent">
                <div class="mt-4" style="width: 50%;">
                    <!-- Dropdown Card Example -->
                    <div class="card shadow mb-4" style="border-radius: 20px;">
                        <!-- Card Header - Dropdown -->
                        <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                            <h5 class="m-0 font-weight-bold text-black ml-4">พื้นที่ให้บริการ</h5>
                            <!-- <a class="open-button btn btn-sky btn-sm mr-3" id="myBtn">
                        Upgrade</a> -->
                        </div>
                        <!-- Card Body -->
                        <div class="card-body" style="margin-top: -45px;">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <?php foreach ($storage as $server) : ?>
                                        <?php
                                        $serverStorage = $server->server_storage;
                                        $serverCurrent = $server->server_current;
                                        $percentage = ($serverCurrent / $serverStorage) * 100;
                                        $color = 'green'; // เริ่มต้นเป็นสีเขียว (1-69%)
                                        if ($percentage >= 70 && $percentage <= 89) {
                                            $color = 'orange'; // 70-89% ให้เปลี่ยนเป็นสีส้ม
                                        } elseif ($percentage >= 90) {
                                            $color = 'red'; // 90% ขึ้นไป ให้เปลี่ยนเป็นสีแดง
                                        }
                                        ?>

                                </div>
                            </div>
                            <h5 style="margin-top:20px;">
                                <!-- <?php
                                        ?>
                        <?php echo number_format($percentage, 2); ?>% -->
                            </h5>
                            <div class="progress progress-sm mr-6">
                                <div class="progress-bar" role="progressbar" style="background-color: <?php echo $color; ?>; width: <?php echo $percentage; ?>%" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- color: <?php echo $color; ?>; -->
                            <div class="mt-3 row">
                                <div class="col-sm-4">
                                    <div class="d-flex justify-content-start">
                                        <span style="font-size: 13px; color: #888;">Used space: <?php echo number_format($serverCurrent, 2); ?> GB</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="d-flex justify-content-center">
                                        <span style="font-size: 13px; color: #888;">Free space: <?php echo number_format($serverStorage - $serverCurrent, 2); ?> GB</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="d-flex justify-content-end">
                                        <span style="font-size: 13px; color: #888;">Capacity: <?php echo number_format($serverStorage, 2); ?> GB</span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 mt-2">
                        <div class="box-folder mb-4">
                            <div class="align-items-center">
                                <a href="<?= site_url('Intra_share_file/sf_all'); ?>" class="underline">
                                    <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                    <span class="font-folder mx-3">แชร์ภายในองค์กร</span>
                                </a>
                            </div>
                        </div>
                    </div>

                     <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 3) : ?>
                        <div class="col-sm-4 mt-2">
                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/sf_executives'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">คณะผู้บริหาร</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 4) : ?>
                        <div class="col-sm-4 mt-2">
                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/sf_audit'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">หน่วยตรวจสอบภายใน</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 5) : ?>
                        <div class="col-sm-4 mt-2">
                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/sf_treasury'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">กองคลัง</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 6) : ?>
                        <div class="col-sm-4 mt-2">

                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/sf_maintenance'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">กองช่าง</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 7) : ?>
                        <div class="col-sm-4 mt-2">
                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/p_deputy'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">สำนักปลัด</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 8) : ?>
                        <div class="col-sm-4 mt-2">
                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/sf_maintenance'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">สมาชิกสภาตำบล</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 9) : ?>
                        <div class="col-sm-4 mt-2">
                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/p_council'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">นักบริหารงานท้องถิ่น</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 10) : ?>
                        <div class="col-sm-4 mt-2">
                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/p_unit_leaders'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">หัวหน้าส่วนราชการ</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 11) : ?>
                        <div class="col-sm-4 mt-2">
                            <div class="box-folder mb-4">
                                <div class="align-items-center">
                                    <a href="<?= site_url('Intra_share_file/p_education'); ?>" class="underline">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                                        <span class="font-folder mx-3">กองสวัสดิการสังคม</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>