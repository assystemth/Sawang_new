<div class="text-center font-head-top">
    <span>รายงานแจ้งเรื่องร้องเรียน</span>
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
                <div class="navbars" style="padding-top: 27px;">
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
                <div class="navbars-active">
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

                <div class="all-report mt-5">
                    <h4 class="font-topic-all-report">รายงานภาพรวม</h4>
                    <div class="card-all-report mt-3">
                        <h5 class="font-head-all-report">ภาพรวมแจ้งเรื่องร้องเรียน ประจำปี 2567</h5>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mypiechart" style="text-align: center; display: flex; justify-content: center; align-items: center;">
                                    <canvas id="myCanvas" width="200px" height="280px"></canvas>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box-content-report1 mt-4">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <span class="font-detail-all-report">จำนวนเรื่องร้องเรียน</span>
                                        </div>
                                        <div class="col-sm-5 d-flex justify-content-end">
                                            <span class="font-detail-all-report"><?php echo $total_complain_year; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content-report2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <span class="font-detail-all-report">ดำเนินการเรียบร้อย</span>
                                        </div>
                                        <div class="col-sm-5 d-flex justify-content-end">
                                            <span class="font-detail-all-report"><?php echo $total_complain_success; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content-report3 mt-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="font-detail-all-report">รอดำเนินการ</span>
                                        </div>
                                        <div class="col-sm-6 d-flex justify-content-end">
                                            <span class="font-detail-all-report"><?php echo $total_complain_operation; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content-report4 mt-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="font-detail-all-report">รับเรื่องแล้ว</span>
                                        </div>
                                        <div class="col-sm-6 d-flex justify-content-end">
                                            <span class="font-detail-all-report"><?php echo $total_complain_accept; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box-content-report5 mt-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="font-detail-all-report">กำลังดำเนินการ</span>
                                        </div>
                                        <div class="col-sm-6 d-flex justify-content-end">
                                            <span class="font-detail-all-report"><?php echo $total_complain_doing; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content-report6 mt-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="font-detail-all-report">รอรับเรื่อง</span>
                                        </div>
                                        <div class="col-sm-6 d-flex justify-content-end">
                                            <span class="font-detail-all-report"><?php echo $total_complain_wait; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content-report7 mt-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="font-detail-all-report">ยกเลิก</span>
                                        </div>
                                        <div class="col-sm-6 d-flex justify-content-end">
                                            <span class="font-detail-all-report"><?php echo $total_complain_cancel; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="all-complain mt-5">
                    <h4 class="font-topic-all-report">เรื่องร้องเรียน</h4>
                    <div class="card-all-complain">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="small-font">เรื่อง</p>
                            </div>
                            <div class="col-sm-3">
                                <p class="small-font">ผู้แจ้ง</p>
                            </div>
                            <div class="col-sm-3">
                                <p class="small-font">สถานะ</p>
                            </div>
                            <div class="col-sm-3">
                                &nbsp;
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($rs_complain as $key => $rs) { ?>
                                <?php
                                // สร้าง class สำหรับเส้นทางซ้าย
                                $line_class = ($key % 2 == 0) ? 'line-complain-left1' : 'line-complain-left2';
                                ?>

                                <div class="col-sm-3 <?= $line_class; ?>">
                                    <span class="limit-font-one black"><?= $rs->complain_topic; ?></span>
                                    <?php
                                    // วันที่จากฐานข้อมูลหรือตัวแปรอื่น ๆ
                                    $complain_date = $rs->complain_datesave;

                                    // แปลงวันที่เป็นวัตถุ DateTime
                                    $datetime = new DateTime($complain_date);

                                    // วันที่ปัจจุบัน
                                    $today = new DateTime();

                                    // เปรียบเทียบวันที่
                                    if ($datetime->format('Y-m-d') === $today->format('Y-m-d')) {
                                        // วันนี้
                                        $formatted_date = 'วันนี้';
                                    } elseif ($datetime->format('Y-m-d') === $today->modify('-1 day')->format('Y-m-d')) {
                                        // เมื่อวาน
                                        $formatted_date = 'เมื่อวาน';
                                    } else {
                                        // วันที่อื่น ๆ
                                        $formatted_date = $datetime->format('วันที่ d/m/Y');
                                    }

                                    // เวลา
                                    $formatted_time = $datetime->format('H:i');

                                    // แสดงผล
                                    ?>
                                    <span style="font-size: 13; color: #888;"><?= $formatted_date . ' ' . $formatted_time; ?></span>
                                </div>
                                <div class="col-sm-3 mt-2">
                                    <p class="small-font limit-font-one black" style="font-size: 16px;"><?= $rs->complain_by; ?></p>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <p class="small-font text-center" style=" font-size: 14px; background-color:
                <?php if ($rs->complain_status === 'รับเรื่องแล้ว') : ?>
                    #D9EAFF;
                <?php elseif ($rs->complain_status === 'กำลังดำเนินการ') : ?>
                    #CFD7FE;
                <?php elseif ($rs->complain_status === 'รอดำเนินการ') : ?>
                    #FFECE7;
                <?php elseif ($rs->complain_status === 'ดำเนินการเรียบร้อย') : ?>
                    #DBFFDD;
                <?php elseif ($rs->complain_status === 'ยกเลิก') : ?>
                    #FFE3E3;
                <?php else : ?>
                    #FFFBDC; /* สีเริ่มต้นหากไม่ตรงกับเงื่อนไขใดๆ */
                <?php endif; ?>
                ; color:
                <?php if ($rs->complain_status === 'รับเรื่องแล้ว') : ?>
                    #4C97EE;
                <?php elseif ($rs->complain_status === 'กำลังดำเนินการ') : ?>
                    #3D5AF1;
                <?php elseif ($rs->complain_status === 'รอดำเนินการ') : ?>
                    #E05A33;
                <?php elseif ($rs->complain_status === 'ดำเนินการเรียบร้อย') : ?>
                    #00B73E;
                <?php elseif ($rs->complain_status === 'ยกเลิก') : ?>
                    #FF0202;
                <?php else : ?>
                    #FFC700; /* สีเริ่มต้นหากไม่ตรงกับเงื่อนไขใดๆ */
                <?php endif; ?>
                border: 1.3px solid
                <?php if ($rs->complain_status === 'รับเรื่องแล้ว') : ?>
                    #4C97EE;
                <?php elseif ($rs->complain_status === 'กำลังดำเนินการ') : ?>
                    #3D5AF1;
                <?php elseif ($rs->complain_status === 'รอดำเนินการ') : ?>
                    #E05A33;
                <?php elseif ($rs->complain_status === 'ดำเนินการเรียบร้อย') : ?>
                    #00B73E;
                <?php elseif ($rs->complain_status === 'ยกเลิก') : ?>
                    #FF0202;
                <?php else : ?>
                    #FFC700; /* สีเริ่มต้นหากไม่ตรงกับเงื่อนไขใดๆ */
                <?php endif; ?>
                ;
                border-radius: 12.887px; /* เพิ่มเส้นโค้ง */
                padding: 5px; /* เพิ่มขอบรอบตัวอักษร */
                ">
                                        <?= $rs->complain_status; ?>
                                    </p>
                                </div>
                                <div class="col-sm-2 mt-2 text-center">
                                    <a href="<?= site_url('Intra_report/complain_detail/' . $rs->complain_id); ?>"><span style="color: #AA8DFF;"><i class="fa fa-eye" aria-hidden="true"></i> view</span></a>
                                </div>
                            <?php } ?>
                            <div class="col-sm-1">
 
                            </div>
                            <div class="text-center">
                                <a href="<?= site_url('Intra_report/complain_all'); ?>" class="btn btn-all-complain">ดูทั้งหมด </a>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- <div class="d-flex justify-content-end">
                        <a class="underline insert-vulgar-btn" data-target="#popupInsert">
                            <div class="btn-add">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg> เพิ่มข้อมูล
                            </div>
                        </a>
                    </div>
                    <div id="popupInsert" class="popup">
                        <div class="popup-content">
                            <h4>เพิ่มข้อมูลข่าวภายในองค์กร</h4>
                            <form action="<?php echo site_url('vulgar_backend/add'); ?> " method="post" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">ข้อความ</div>
                                    <div class="col-sm-5">
                                        <input type="text" name="vulgar_com" required class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-2 control-label"></div>
                                    <div class="col-sm-5">
                                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                                        <a class="close-button btn btn-danger" data-target="#popupInsert" role="button">ยกเลิก</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->