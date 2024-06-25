<div class="text-center pages-head">
    <span class="font-pages-head">กระทู้ถาม - ตอบ</span>
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-news" style="position: relative; z-index: 10;">
        <div class=" underline">
            <form id="reCAPTCHA3" action=" <?php echo site_url('Pages/add_q_a'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                <br>
                <div class="form-group">
                    <div class="col-sm-12 control-label font-e-service-complain">หัวข้อคำถาม<span class="red-font">*</span></div>
                    <div class="col-sm-12 mt-2">
                        <input type="text" name="q_a_msg" class="form-control font-label-e-service-complain" required placeholder="กรอกคำถาม...">
                        <span class="red"><?= form_error('q_a_msg'); ?></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="col-sm-2 control-label font-e-service-complain">ชื่อ<span class="red-font">*</span></div>
                            <div class="col-sm-12 mt-2">
                                <input type="text" name="q_a_by" class="form-control font-label-e-service-complain" required placeholder="กรอกชื่อผู้ตั้งกระทู้">
                                <span class="red"><?= form_error('q_a_by'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="col-sm-2 control-label font-e-service-complain">อีเมล</div>
                            <div class="col-sm-12 mt-2">
                                <input type="email" name="q_a_email" class="form-control font-label-e-service-complain" required placeholder="example@youremail.com">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label font-e-service-complain">รายละเอียด</label>
                    <div class="col-sm-12">
                        <textarea name="q_a_detail" class="form-control font-label-e-service-complain" id="exampleFormControlTextarea1" rows="6" placeholder="กรอกรายละเอียดเพิ่มเติม..."></textarea>
                    </div>
                </div>
                <br>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="d-flex justify-content-end">
                    <!-- <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableLoginButton"></div> -->
                    <!-- <div class="g-recaptcha" style="display: none;" data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" data-callback="onSubmit"></div> -->
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
    // function onSubmit(token) {
    //     document.getElementById("loginBtn").removeAttribute("disabled");
    // }
    // grecaptcha.ready(function() {
    //     grecaptcha.execute('6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x', {
    //         action: 'submit'
    //     }).then(onSubmit);
    // });
</script>