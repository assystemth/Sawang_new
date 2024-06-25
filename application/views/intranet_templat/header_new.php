<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />
<script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script> -->
    <link rel="icon" href="<?php echo base_url("docs/logo.png"); ?>" type="image/x-icon">

    <title>องค์การบริหารส่วนตำบลสว่าง - ระบบอินทราเน็ต</title>
    <!-- boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- icon -->
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <!-- icon boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- CKEditor word -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <!-- sweetalert 2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css">
    <!-- CCTV video -->
    <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.14.3/video.js"></script>


    <!-- admin Dashboard -->
    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- รูปภาพ preview -->
    <link href="<?= base_url('asset/'); ?>lightbox2/src/css/lightbox.css" rel="stylesheet">

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>

</head>

<body>
    <main>
        <div class="bg-top-nav">
            <div class="row">
                <div class="col-7 d-flex justify-content-end mt-3">
                    <span class="font-top-nav">ระบบ Back Office</span>
                </div>
                <div class="col-5 d-flex justify-content-end mt-2">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="row" style="width: 300px;">
                                <div class="col-8">
                                    <span class="font-header-name limit-font-one"><?php echo $this->session->userdata('m_fname'); ?>&nbsp;<?php echo $this->session->userdata('m_lname'); ?></span>
                                    <span class="font-header-rank limit-font-one">
                                        <?php
                                        $m_level = $this->session->userdata('m_level');
                                        if ($m_level == 1) {
                                            echo "System Admin";
                                        } elseif ($m_level == 2) {
                                            echo "Super Admin";
                                        } elseif ($m_level == 3) {
                                            echo "คณะผู้บริหาร";
                                        } elseif ($m_level == 4) {
                                            echo "หน่วยตรวจสอบภายใน";
                                        } elseif ($m_level == 5) {
                                            echo "กองคลัง";
                                        } elseif ($m_level == 6) {
                                            echo "กองช่าง";
                                        } elseif ($m_level == 7) {
                                            echo "สำนักปลัด";
                                        } elseif ($m_level == 8) {
                                            echo "สมาชิกสภาตำบล";
                                        } elseif ($m_level == 9) {
                                            echo "นักบริหารงานท้องถิ่น";
                                        } elseif ($m_level == 10) {
                                            echo "หัวหน้าส่วนราชการ";
                                        } elseif ($m_level == 11) {
                                            echo "กองสวัสดิการสังคม";
                                        } else {
                                            echo "ตำแหน่งไม่ถูกต้อง";
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="col-4 mt-1" style="margin-left: -20px;">
                                    <img class="img-profile rounded-circle" src="<?php echo base_url('docs/img/') . $this->session->userdata('m_img'); ?>">
                                </div>
                            </div>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <!-- Dropdown เนื้อหาที่นี่ -->
                            <!-- <a class="dropdown-item" href="<?php echo site_url('system_admin/profile'); ?>">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
    </a> -->
                            <div class="row">
                                <div class="col-3" style="padding-left: 15px;">
                                    <img class="img-profile rounded-circle" src="<?php echo base_url('docs/img/') . $this->session->userdata('m_img'); ?>">
                                </div>
                                <div class="col-9">
                                    <span class="font-dropdown-name"><?php echo $this->session->userdata('m_fname'); ?>&nbsp;<?php echo $this->session->userdata('m_lname'); ?></span>
                                    <br><span class="">
                                        <?php
                                        $m_level = $this->session->userdata('m_level');
                                        if ($m_level == 1) {
                                            echo "System Admin";
                                        } elseif ($m_level == 2) {
                                            echo "Super Admin";
                                        } elseif ($m_level == 3) {
                                            echo "คณะผู้บริหาร";
                                        } elseif ($m_level == 4) {
                                            echo "หน่วยตรวจสอบภายใน";
                                        } elseif ($m_level == 5) {
                                            echo "กองคลัง";
                                        } elseif ($m_level == 6) {
                                            echo "กองช่าง";
                                        } elseif ($m_level == 7) {
                                            echo "สำนักปลัด";
                                        } elseif ($m_level == 8) {
                                            echo "สมาชิกสภาตำบล";
                                        } elseif ($m_level == 9) {
                                            echo "นักบริหารงานท้องถิ่น";
                                        } elseif ($m_level == 10) {
                                            echo "หัวหน้าส่วนราชการ";
                                        } elseif ($m_level == 11) {
                                            echo "กองสวัสดิการสังคม";
                                        } else {
                                            echo "ตำแหน่งไม่ถูกต้อง";
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <!-- เพิ่มรายการเมนูอื่น ๆ ตามต้องการ -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo site_url('System_intranet/profile'); ?>">
                                ข้อมูลส่วนตัว
                            </a>
                            <a class="dropdown-item" href="<?php echo site_url('Login_intranet/logout'); ?>">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-other">
            <img class="wel-other-img-cloud1" src="<?php echo base_url('docs/wel-other-cloud1.png'); ?>">
            <img class="wel-other-img-cloud2" src="<?php echo base_url('docs/wel-other-cloud2.png'); ?>">
            <img class="wel-other-img-cloud3" src="<?php echo base_url('docs/wel-other-cloud3v2.png'); ?>">

            <img class="wel-other-img-monk" src="<?php echo base_url('docs/wel-other-monk.png'); ?>">
            <img class="wel-other-img-hwoat" src="<?php echo base_url('docs/wel-other-hwoat.png'); ?>">
        </div>
        <div class="welcome-btm-other">
            <img class="dot-updown-animation-1" src="<?php echo base_url('docs/lightv2.png'); ?>" width="25" height="25">
            <img class="dot-updown-animation-2" src="<?php echo base_url('docs/lightv2.png'); ?>" width="15" height="15">
            <img class="dot-updown-animation-3" src="<?php echo base_url('docs/lightv2.png'); ?>" width="45" height="45">
            <img class="dot-updown-animation-4" src="<?php echo base_url('docs/lightv2.png'); ?>" width="65" height="65">
            <img class="dot-updown-animation-5" src="<?php echo base_url('docs/lightv2.png'); ?>" width="25" height="25">
            <img class="dot-updown-animation-6" src="<?php echo base_url('docs/lightv2.png'); ?>" width="35" height="35">
            <img class="dot-updown-animation-7" src="<?php echo base_url('docs/lightv2.png'); ?>" width="25" height="25">
            <img class="dot-updown-animation-8" src="<?php echo base_url('docs/lightv2.png'); ?>" width="15" height="15">
            <img class="dot-updown-animation-9" src="<?php echo base_url('docs/lightv2.png'); ?>" width="45" height="45">
            <img class="dot-updown-animation-10" src="<?php echo base_url('docs/lightv2.png'); ?>" width="65" height="65">
            <div class="text-center" style="padding-top: 310px;">
                <span class="font-welcome-btm-other1">องค์การบริหารส่วนตำบลสว่าง</span>
                <span class="font-welcome-btm-other2">องค์การบริหารส่วนตำบลสว่าง</span>
            </div>