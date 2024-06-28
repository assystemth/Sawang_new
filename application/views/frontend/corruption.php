<div class="text-center pages-head">
    <span class="font-pages-head">ช่องทางแจ้งเรื่องทุจริตหน่วยงานภาครัฐ</span>
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-news" style="position: relative; z-index: 10;">
        <div class="d-flex justify-content-end">
            <div class="form-group">
                <div class="col-sm-12">
                    <select class="form-select custom-select" id="ChangPagesComplain">
                        <option value="" disabled selected>แจ้งเรื่องทุจริตหน่วยงานภาครัฐ</option>
                        <option value="esv_ods">ยื่นเอกสารออนไลน์</option>
                        <option value="suggestions">รับฟังความคิดเห็น</option>
                        <option value="complain">ร้องเรียน/ร้องทุกข์</option>
                        <option value="follow-complain">ติดตามสถานะเรื่องร้องเรียน</option>
                    </select>
                </div>
            </div>
        </div>
        <div class=" underline">
            <form id="reCAPTCHA3" action=" <?php echo site_url('Pages/add_corruption'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                <br>
                <div class="form-group">
                    <div class="col-sm-3 control-label font-e-service-complain">เรื่องเหตุการทุจริต <span class="red-font">*</span></div>
                    <div class="col-sm-12 mt-2">
                        <input type="text" name="corruption_topic" class="form-control font-label-e-service-complain" required placeholder="กรอกเรื่องร้องเรียน..." value="<?php echo set_value('corruption_topic'); ?>">
                        <span class="red"><?= form_error('corruption_topic'); ?></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <div class="col-sm-12 control-label  font-e-service-complain">ชื่อ-นามสกุล <span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="text" name="corruption_by" class="form-control font-label-e-service-complain" required placeholder="นางสาวน้ำใส ใจชื่นบาน" value="<?php echo set_value('corruption_by'); ?>">
                                <span class="red"><?= form_error('corruption_by'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <div class="col-sm-12 control-label  font-e-service-complain">เบอร์โทรศัพท์ <span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="tel" name="corruption_phone" class="form-control font-label-e-service-complain" required placeholder="กรอกเบอร์โทรศัพท์" value="<?php echo set_value('corruption_phone'); ?>" pattern="\d{10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 10 ตัว">
                                <span class="red"><?= form_error('corruption_phone'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <div class="col-sm-12 control-label  font-e-service-complain">อีเมล </div>
                            <div class="col-sm-12 mt-2">
                                <input type="email" name="corruption_email" class="form-control font-label-e-service-complain" placeholder="example@youremail.com" value="<?php echo set_value('corruption_email'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-2 control-label font-e-service-complain">ที่อยู่ <span class="red-font">*</span></div>
                    <div class="col-sm-12 mt-2">
                        <input type="text" name="corruption_address" class="form-control font-label-e-service-complain" required placeholder="กรอกข้อมูลที่อยู่ของคุณ" value="<?php echo set_value('corruption_address'); ?>">
                        <span class="red"><?= form_error('corruption_address'); ?></span>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label font-e-service-complain">รายละเอียด <span class="red-font">*</span></label>
                    <div class="col-sm-12">
                        <textarea name="corruption_detail" class="form-control font-label-e-service-complain" id="exampleFormControlTextarea1" rows="6" placeholder="กรอกรายละเอียดเพิ่มเติม..."><?php echo set_value('corruption_detail'); ?></textarea>
                        <span class="red"><?= form_error('corruption_detail'); ?></span>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-7 control-label font-e-service-complain">รูปภาพเพิ่มเติม(สามารถเพิ่มได้หลายรูป) </div>
                    <div class="col-sm-12 mt-2">
                        <input type="file" name="corruption_imgs[]" class="form-control" accept="image/*" multiple>
                    </div>
                </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 font-thx-curruption">
                <span>ขอขอบพระคุณที่แจ้งเหตุพบเห็นการทุจริตหน่วยงานภาครัฐ</span>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-end">
                    <!-- <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableLoginButton"></div> -->
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-end">
                    <!-- <button type="submit" id="loginBtn" class="btn" disabled><img src="<?php echo base_url("docs/s.btn-add-q-a.png"); ?>"></button> -->
                    <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" id="loginBtn" class="btn g-recaptcha"><img src="<?php echo base_url("docs/s.btn-add-q-a.png"); ?>"></button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<script>
    // เมื่อ reCAPTCHA ผ่านการตรวจสอบ
    // function enableLoginButton() {
    //     document.getElementById("loginBtn").removeAttribute("disabled");
    // }
</script>