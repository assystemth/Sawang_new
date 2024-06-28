<div class="text-center font-head-top">
    <span>ข้อมูลส่วนตัว</span>
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
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon10.png"); ?>">&nbsp;&nbsp;เทคโนโลยี / สารสนเทศ
                </div>
            </a>
            <div class="border-nav"></div>
        </div>
        <div class="main-content">
            <div class="divcontent">


                <div class="container bg-edit-profile mt-4">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-7">
                            <h4>ข้อมูลส่วนตัว</h4>
                            <form action=" <?php echo site_url('System_intranet/edit_Member/' . $rsedit->m_id); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">โปรไฟล์</div>
                                    <?php
                                    $img_path = !empty($rsedit->m_img) ? 'docs/img/' . $rsedit->m_img : 'docs/img/default_user.png';
                                    ?>

                                    <div class="col-sm-5">
                                        ภาพเก่า <br>
                                        <img src="<?= base_url($img_path); ?>" width="220px" height="180">
                                        <br>
                                        เลือกใหม่
                                        <br>
                                        <input type="file" name="m_img" class="form-control" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">ชื่อผู้ใช้งาน</div>
                                    <div class="col-sm-5">
                                        <input type="text" name="m_username" class="form-control" value="<?php echo $rsedit->m_username; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">รหัสผ่าน</div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <input type="password" id="m_password" name="current_password" class="form-control" placeholder="****************">
                                            <button type="button" class="btn btn-outline-secondary" onclick="swapPasswordType('m_password')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">ยืนยัน รหัสผ่าน</div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <input type="password" id="confirm_password" name="current_password2" class="form-control" placeholder="****************">
                                            <button type="button" class="btn btn-outline-secondary" onclick="swapPasswordTypeConfirm('confirm_password')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">ชื่อตำแหน่งงาน</div>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="ref_pid" readonly>
                                            <option value="<?php echo $rsedit->ref_pid; ?>"><?php echo $rsedit->pname; ?></option>
                                            <?php foreach ($rspo as $rs) { ?>
                                                <option value="<?php echo $rs->pid; ?>"><?php echo $rs->pname; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">ชื่อ</div>
                                    <div class="col-sm-5">
                                        <input type="text" name="m_fname" class="form-control" required value="<?php echo $rsedit->m_fname; ?>">
                                        <span class="red">กรุณากรอกคำนำหน้าชื่อ</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">นามสกุล</div>
                                    <div class="col-sm-5">
                                        <input type="text" name="m_lname" class="form-control" required value="<?php echo $rsedit->m_lname; ?>">

                                        <input type="hidden" name="m_id" class="form-control" required value="<?php echo $rsedit->m_id; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">E-mail</div>
                                    <div class="col-sm-5">
                                        <input type="email" name="m_email" class="form-control" required value="<?php echo $rsedit->m_email; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label">เบอร์มือถือ</div>
                                    <div class="col-sm-4">
                                        <input type="text" name="m_phone" class="form-control" pattern="\d{10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 10 ตัว" value="<?php echo $rsedit->m_phone; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 control-label"></div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                                        <a class="btn btn-danger" onclick="history.go(-1);">ยกเลิก</a>
                                    </div>
                                </div>
                            </form>
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