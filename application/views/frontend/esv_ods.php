<div class="text-center pages-head">
    <span class="font-pages-head">ยื่นเอกสารออนไลน์</span>
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-news" style="position: relative; z-index: 10;">
        <div class="d-flex justify-content-end">
            <div class="form-group">
                <div class="col-sm-12">
                    <select class="form-select custom-select" id="ChangPagesComplain">
                        <option value="" disabled selected>ยื่นเอกสารออนไลน์</option>
                        <option value="suggestions">รับฟังความคิดเห็น</option>
                        <option value="complain">ร้องเรียน/ร้องทุกข์</option>
                        <option value="follow-complain">ติดตามสถานะเรื่องร้องเรียน</option>
                        <option value="corruption">แจ้งเรื่องทุจริตหน่วยงานภาครัฐ</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="underline">
            <form id="reCAPTCHA3" action=" <?php echo site_url('Pages/add_esv_ods'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                <br>
                <div class="form-group">
                    <div class="col-sm-6 control-label font-e-service-complain">เรื่องที่ต้องการยื่นเอกสาร <span class="red-font">*</span></div>
                    <div class="col-sm-12 mt-2">
                        <input type="text" name="esv_ods_topic" class="form-control font-label-e-service-complain" required placeholder="กรอกเรื่องร้องเรียน...">
                        <!-- <span class="red"><?= form_error('esv_ods_topic'); ?></span> -->
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <div class="col-sm-12 control-label  font-e-service-complain">ชื่อ-นามสกุล <span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="text" name="esv_ods_by" class="form-control font-label-e-service-complain" required placeholder="นางสาวน้ำใส ใจชื่นบาน">
                                <!-- <span class="red"><?= form_error('esv_ods_by'); ?></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <div class="col-sm-12 control-label  font-e-service-complain">เบอร์โทรศัพท์ <span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="tel" name="esv_ods_phone" class="form-control font-label-e-service-complain" required placeholder="กรอกเบอร์โทรศัพท์" pattern="\d{10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 10 ตัว">
                                <!-- <span class="red"><?= form_error('esv_ods_phone'); ?></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <div class="col-sm-12 control-label font-e-service-complain">อีเมล </div>
                            <div class="col-sm-12 mt-2">
                                <input type="email" name="esv_ods_email" class="form-control font-label-e-service-complain" required placeholder="example@youremail.com">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-2 control-label font-e-service-complain">ที่อยู่ <span class="red-font">*</span></div>
                    <div class="col-sm-12 mt-2">
                        <input type="text" name="esv_ods_address" class="form-control font-label-e-service-complain" required placeholder="กรอกข้อมูลที่อยู่ของคุณ">
                        <!-- <span class="red"><?= form_error('esv_ods_address'); ?></span> -->
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label font-e-service-complain">รายละเอียด <span class="red-font">*</span></label>
                    <div class="col-sm-12">
                        <textarea name="esv_ods_detail" class="form-control font-label-e-service-complain" id="exampleFormControlTextarea1" rows="6" placeholder="กรอกรายละเอียดเพิ่มเติม..."></textarea>
                        <!-- <span class="red"><?= form_error('esv_ods_detail'); ?></span> -->
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-7 control-label font-e-service-complain">แนบเอกสาร <span class="red-font">*</span></div>
                    <div class="col-sm-12 mt-2">
                        <input type="file" name="esv_ods_file" class="form-control" accept=".pdf, .docx, .doc, .jpg, .jpeg, .png" required>
                        <!-- <span class="red"><?= form_error('esv_ods_file'); ?></span> -->
                    </div>
                </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 font-e-service-danger">
                <span><b>หมายเหตุ</b><br>
                    1.ผู้ยื่นคำขอดาวน์โหลดเอกสารเพื่อกรอกข้อมูล<br>
                    ในใบคำขอต่างๆและแนบเอกสารในช่องส่งฟอร์มเอกสาร<br>
                    2.เจ้าหน้าที่รับเรื่อง พิจารณาเอกสาร<br>
                    3.แจ้งผลการดำเนินงานทางเบอร์โทรหรืออีเมลที่ผู้ยื่นคำขอแจ้งใว้</span>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-end">
                    <!-- <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableLoginButton"></div> -->
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-end">
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