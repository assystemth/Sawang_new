<div class="text-center font-head-top">
    <span>เทคโนโลยี / สารสนเทศ</span>
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
                <div class="navbars">
                    <img src="<?php echo base_url("docs/intranet/intra-icon89.png"); ?>">&nbsp;&nbsp;รายงาน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แจ้งเรื่องร้องเรียน
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_it'); ?>" class="font-nav">
                <div class="navbars-active" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon10.png"); ?>">&nbsp;&nbsp;เทคโนโลยี / สารสนเทศ
                </div>
            </a>
            <div class="border-nav"></div>
        </div>
        <div class="main-content">
            <div class="divcontent" style="padding-left: 50px;">
                <!-- <?php foreach ($api_data1 as $service) : ?>
            <div>
                <h2><?php echo $service['service_title']; ?></h2>
                <p><?php echo $service['service_intro']; ?></p>
                <img src="<?php echo $service['service_img']; ?>" alt="<?php echo $service['service_title']; ?>">
                <p><?php echo $service['service_detail']; ?></p>
                <p>Date: <?php echo $service['service_date']; ?></p>
            </div>
        <?php endforeach; ?> -->
                <!-- <br>
        <?php foreach ($api_data2 as $sale) : ?>
            <div>
                <h2><?php echo $sale['sale_fname']; ?></h2>
                <p><?php echo $sale['sale_lname']; ?></p>
                <img src="<?php echo $sale['sale_img']; ?>" alt="<?php echo $service['service_title']; ?>">
                <p><?php echo $sale['sale_nickname']; ?></p>
                <p><?php echo $sale['sale_phone']; ?></p>
            </div>
        <?php endforeach; ?> -->

                <div class="row">
                    <?php foreach ($api_data1 as $service) : ?>
                        <div class="col-3 mb-5">
                            <div class="card-all-it">
                                <div class="row">
                                    <img src="https://www.assystem.co.th/asset/img_services/<?php echo $service['service_img']; ?>" style="border-radius: 15px;" height="114">
                                    <div class="text-center mt-2">
                                        <h5 class="card-service-top"><?php echo $service['service_title']; ?></h5>
                                        <p class="card-service limit-font-six mt-3"><?php echo $service['service_intro']; ?>
                                        </p>
                                        <a href="https://www.assystem.co.th/service/detail/<?php echo $service['service_id']; ?>" target="blank" class="btn btn-all-it">เพิ่มเติม
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-3 mb-3">
                    <h5 class="card-sale text-center" style="margin-top: -15px;">สอบถามข้อมูล<br>
                        บริษัท เอเอส ซิสเต็ม จำกัด<br>
                        โทร : 043-009-848</h5>
                </div>
                <div>
                    <div class="row text-center">
                        <?php foreach ($api_data2 as $sale) : ?>
                            <div class="col">
                                <img class="sale-img" src="https://www.assystem.co.th/asset/img_sale/<?php echo $sale['sale_img']; ?>"><br>
                                <span class="card-sale">โทร : <?php echo $sale['sale_phone']; ?></span><br>
                                <span class="card-sale">Line : <?php echo $sale['sale_line']; ?></span><br>
                                <span class="card-sale">(<?php echo $sale['sale_nickname']; ?>)</span><br>
                            </div>
                        <?php endforeach; ?>
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