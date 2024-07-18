<div class="text-center pages-head">
    <span class="font-pages-head">เงินอุดหนุนเด็กแรกเกิด</span>
</div>
</div>

<div class="bg-pages" style="margin-top: -50px;">
    <div class="row">
        <div class="col-6 d-flex justify-content-end underline">
            <a href="#">
                <div class="bg-btn-head-elderly-aw-active">
                    <span>ยื่นเอกสารเงินอุดหนุนเด็กแรกเกิด</span>
                </div>
            </a>
        </div>
        <div class="col-6 d-flex justify-content-start underline">
            <a href="<?php echo site_url('Pages/kid_aw'); ?>">
                <div class="bg-btn-head-elderly-aw">
                    <span>ตรวจสอบเงินอุดหนุนเด็กแรกเกิด</span>
                </div>
            </a>
        </div>
    </div>

    <div class="container-pages-news" style="position: relative; z-index: 10; margin-top: 55px; ">
        <span class="font-elderly-aw-ods">แบบฟอร์มเงินอุดหนุนเด็กแรกเกิด</span>
        <div class="box-form-elderly-aw-ods-download">
            <?php foreach ($kid_aw_form as $rs) : ?>
                <div class="space-between underline">
                    <span class="font-form-elderly-aw-ods-download"><?= $rs->kid_aw_form_name; ?></span>
                    <a href="<?= base_url('docs/file/' . $rs->kid_aw_form_file); ?>" download>
                        <div class="btn-download-el-aw">ดาวน์โหลด</div>
                    </a>
                </div>
                <hr style="height:2px;border-width:0; background: linear-gradient(90deg, #785829 2.85%, #E1A44D 26.17%, #906831 41.25%, #B1803A 53.59%, #B1803A 70.05%, #F6E587 91.99%, #B1803A 112.57%, #F6DE7C 127.65%, #F5DB7A 133.14%, #F2D373 135.88%, #EDC668 137.25%, #E6B259 138.62%, #E1A44D 139.99%);">
            <?php endforeach; ?>
        </div>
        <span class="font-elderly-aw-ods">ยื่นเอกสารเงินอุดหนุนเด็กแรกเกิด</span>
        <form id="reCAPTCHA3" action=" <?php echo site_url('Pages/add_kid_aw_ods'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
            <br>
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <div class="col-sm-12 control-label  font-e-service-complain">ชื่อ-นามสกุล <span class="red-font">*</span></div>
                        <div class="col-sm-12 mt-2">
                            <input type="text" name="kid_aw_ods_by" class="form-control font-label-e-service-complain" required placeholder="นางสาวน้ำใส ใจชื่นบาน" value="<?php echo set_value('kid_aw_ods_by'); ?>">
                            <span class="red"><?php echo form_error('kid_aw_ods_by'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <div class="col-sm-12 control-label  font-e-service-complain">เบอร์โทรศัพท์ <span class="red-font">*</span></div>
                        <div class="col-sm-12 mt-2">
                            <input type="tel" name="kid_aw_ods_phone" class="form-control font-label-e-service-complain" required placeholder="กรอกเบอร์โทรศัพท์" value="<?php echo set_value('kid_aw_ods_phone'); ?>" pattern="\d{10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 10 ตัว">
                            <span class="red"><?= form_error('kid_aw_ods_phone'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <div class="col-sm-12 control-label  font-e-service-complain">หมายเลขประจำตัวประชาชน <span class="red-font">*</span></div>
                        <div class="col-sm-12 mt-2">
                            <input type="text" name="kid_aw_ods_number" class="form-control font-label-e-service-complain" placeholder="เลขบัตรประจำตัวประชาชน" value="<?php echo set_value('kid_aw_ods_number'); ?>" pattern="\d{10}" title="กรุณากรอกเป็นตัวเลข">
                            <span class="red"><?= form_error('kid_aw_ods_number'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label font-e-service-complain">ที่อยู่ <span class="red-font">*</span></label>
                <div class="col-sm-12">
                    <textarea name="kid_aw_ods_address" class="form-control font-label-e-service-complain" id="exampleFormControlTextarea1" rows="6" placeholder="กรอกรายละเอียดเพิ่มเติม..."><?php echo set_value('kid_aw_ods_address'); ?></textarea>
                    <span class="red"><?php echo form_error('kid_aw_ods_address'); ?></span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-7 control-label font-e-service-complain">แนบสำเนาบัตรประชาชน <span class="red-font">* (เอกสารต้องเซ็นสำเนาถูกต้อง)</span></div>
                <div class="col-sm-12 mt-2">
                    <input type="file" name="kid_aw_ods_file1" class="form-control" accept="all/*">
                    <!-- <span class="red"><?= form_error('kid_aw_ods_file1'); ?></span> -->
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-7 control-label font-e-service-complain">แนบใบฟอร์มขึ้นทะเบียนเงินอุดหนุนเด็กแรกเกิด <span class="red-font">*</span></div>
                <div class="col-sm-12 mt-2">
                    <input type="file" name="kid_aw_ods_file2" class="form-control" accept="all/*">
                    <!-- <span class="red"><?= form_error('kid_aw_ods_file2'); ?></span> -->
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-7 control-label font-e-service-complain">แนบแบบฟอร์มหนังสือมอบอำนาจ <span class="red-font">(ถ้ามี)</span></div>
                <div class="col-sm-12 mt-2">
                    <input type="file" name="kid_aw_ods_file3" class="form-control" accept="all/*">
                </div>
            </div>
    </div>
    <div class="row mt-4" style="margin-left: 200px;">
        <div class="col-8 font-note-elderly-aw d-flex justify-content-center">
            <span>หมายเหตุ<br>
                1.ผู้ประสงค์ลงทะเบียนสามารถดำเนินการได้ทั้งแบบ ยื่นเอกสารออนไลน์และดำเนินการ ณ ที่ทำการ<br>
                2.การยื่นเอกสารออนไลน์ต้องมี การลงลายมือรับรองพร้อมข้อความ "สำเนาถูกต้องประกอบการลงทะเบียนรับเบี้ยยังชีพ"<br>
                3.การกรอกข้อมูลต้องถูกต้องและครบถ้วน เพื่อเป็นการรักษาสิทธิ์ของผู้รับสิทธิ์เอง</span>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-center">
                <!-- <button type="submit" id="loginBtn" class="btn" disabled><img src="<?php echo base_url("docs/s.btn-add-q-a.png"); ?>"></button> -->
                <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" id="loginBtn" class="btn g-recaptcha"><img src="<?php echo base_url("docs/s.btn-add-q-a.png"); ?>"></button>
            </div>
        </div>
    </div>
    </form>
</div>