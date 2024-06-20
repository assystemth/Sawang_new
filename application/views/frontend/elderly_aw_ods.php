<div class="text-center" style="padding-top: 65px">
    <span class="font-pages-head">เบี้ยยังชีพผู้สูงอายุ / ผู้พิการ</span>
</div>
</div>

<div class="bg-pages" style="margin-top: -50px;">
    <div class="row">
        <div class="col-6 d-flex justify-content-end underline">
            <a href="#">
                <div class="bg-btn-head-elderly-aw-active">
                    <span>ยื่นเอกสารเบี้ยยังชีพผู้สูงอายุ / ผู้พิการ</span>
                </div>
            </a>
        </div>
        <div class="col-6 d-flex justify-content-start underline">
            <a href="<?php echo site_url('Pages/elderly_aw'); ?>">
                <div class="bg-btn-head-elderly-aw">
                    <span>ตรวจสอบเบี้ยยังชีพผู้สูงอายุ / ผู้พิการ</span>
                </div>
            </a>
        </div>
    </div>

    <div class="container-pages-news" style="position: relative; z-index: 10; margin-top: 55px; ">
        <span class="font-elderly-aw-ods">แบบฟอร์มเบี้ยยังชีพผู้สูงอายุ / พิการ</span>
        <div class="box-form-elderly-aw-ods-download">
            <?php foreach ($elderly_aw_form as $rs) : ?>
                <div class="space-between underline">
                    <span class="font-form-elderly-aw-ods-download"><?= $rs->elderly_aw_form_name; ?></span>
                    <a href="<?= base_url('docs/file/' . $rs->elderly_aw_form_file); ?>" download>
                        <div class="btn-download-el-aw">ดาวน์โหลด</div>
                    </a>
                </div>
                <hr style="height:2px;border-width:0; background: linear-gradient(90deg, #785829 2.85%, #E1A44D 26.17%, #906831 41.25%, #B1803A 53.59%, #B1803A 70.05%, #F6E587 91.99%, #B1803A 112.57%, #F6DE7C 127.65%, #F5DB7A 133.14%, #F2D373 135.88%, #EDC668 137.25%, #E6B259 138.62%, #E1A44D 139.99%);">
            <?php endforeach; ?>
        </div>
        <span class="font-elderly-aw-ods">ยื่นเอกสารเบี้ยยังชีพผู้สูงอายุ / พิการ</span>
        <form id="reCAPTCHA3" action=" <?php echo site_url('Pages/add_elderly_aw_ods'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
            <br>
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <div class="col-sm-12 control-label  font-e-service-complain">ชื่อ-นามสกุล <span class="red-font">*</span></div>
                        <div class="col-sm-12 mt-2">
                            <input type="text" name="elderly_aw_ods_by" class="form-control font-label-e-service-complain" required placeholder="นางสาวน้ำใส ใจชื่นบาน">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <div class="col-sm-12 control-label  font-e-service-complain">เบอร์โทรศัพท์ <span class="red-font">*</span></div>
                        <div class="col-sm-12 mt-2">
                            <input type="tel" name="elderly_aw_ods_phone" class="form-control font-label-e-service-complain" required placeholder="กรอกเบอร์โทรศัพท์" pattern="\d{10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 10 ตัว">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <div class="col-sm-12 control-label  font-e-service-complain">หมายเลขประจำตัวประชาชน <span class="red-font">*</span></div>
                        <div class="col-sm-12 mt-2">
                            <input type="elderly_aw_ods_address" name="elderly_aw_ods_number" class="form-control font-label-e-service-complain" placeholder="เลขบัตรประจำตัวประชาชน">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label font-e-service-complain">ที่อยู่ <span class="red-font">*</span></label>
                <div class="col-sm-12">
                    <textarea name="elderly_aw_ods_address" class="form-control font-label-e-service-complain" id="exampleFormControlTextarea1" rows="6" placeholder="กรอกรายละเอียดเพิ่มเติม..."></textarea>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-7 control-label font-e-service-complain">แนบสำเนาบัตรประชาชน <span class="red-font">* (เอกสารต้องเซ็นสำเนาถูกต้อง)</span></div>
                <div class="col-sm-12 mt-2">
                    <input type="file" name="elderly_aw_ods_file1" class="form-control" accept="all/*">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-7 control-label font-e-service-complain">แนบใบฟอร์มขึ้นทะเบียนผู้พิการ/ลงทะเบียนเบี้ยยังชีพผู้สูงอายุ <span class="red-font">*</span></div>
                <div class="col-sm-12 mt-2">
                    <input type="file" name="elderly_aw_ods_file2" class="form-control" accept="all/*">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-7 control-label font-e-service-complain">แนบแบบฟอร์มหนังสือมอบอำนาจ <span class="red-font">(ถ้ามี)</span></div>
                <div class="col-sm-12 mt-2">
                    <input type="file" name="elderly_aw_ods_file3" class="form-control" accept="all/*">
                </div>
            </div>
    </div>
    <div class="row mt-4" style="margin-left: 80px;">
        <div class="col-6 font-note-elderly-aw d-flex justify-content-center">
            <span>หมายเหตุ<br>
                1.ผู้ยื่นคำขอดาวน์โหลดเอกสารเพื่อกรอกข้อมูล<br>
                ในใบคำขอต่างๆและแนบเอกสารในช่องส่งฟอร์มเอกสาร<br>
                2.เจ้าหน้าที่รับเรื่อง พิจารณาเอกสาร<br>
                3.แจ้งผลการดำเนินงานทางเบอร์โทรหรืออีเมลที่ผู้ยื่นคำขอแจ้งใว้</span>
        </div>
        <div class="col-6">
            <div class="d-flex justify-content-center">
                <!-- <button type="submit" id="loginBtn" class="btn" disabled><img src="<?php echo base_url("docs/s.btn-add-q-a.png"); ?>"></button> -->
                <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" id="loginBtn" class="btn g-recaptcha"><img src="<?php echo base_url("docs/s.btn-add-q-a.png"); ?>"></button>
            </div>
        </div>
    </div>
    </form>
</div>