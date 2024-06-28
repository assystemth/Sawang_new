<div class="text-center font-head-top">
    <span>ข่าวภายในองค์กร</span>
</div>
</div>

<div class="crop">

    <div class="main-container">
        <div class="main-sidebar">
            <a href="<?php echo site_url('System_intranet'); ?>" class="font-nav">
                <div class="navbars-active" style="padding-top: 27px;">
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

                <h4 class="black"><b>เพิ่มข้อมูลข่าวประชาสัมพันธ์</b></h4>
                <form action=" <?php echo site_url('System_intranet/add'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">เรื่อง</div>
                        <div class="col-sm-7">
                            <input type="text" name="intra_news_topic" required class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">รายละเอียด</div>
                        <div class="col-sm-7">
                            <textarea name="intra_news_detail" id="intra_news_detail"></textarea>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#intra_news_detail'), {
                                        toolbar: {
                                            items: [
                                                'undo', 'redo',
                                                '|', 'heading',
                                                '|', 'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor',
                                                '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                                                '|', 'alignment',
                                                '|', 'bulletedList', 'numberedList', 'todoList',
                                                '|', 'insertTable', 'horizontalLine',
                                                '|', 'removeFormat', 'insertImage', 'insertVideo', 'insertFile',
                                                '|', 'undo', 'redo'
                                            ]
                                        },
                                        shouldNotGroupWhenFull: true
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">รูปหน้าปก</div>
                        <div class="col-sm-4">
                            <input type="file" name="intra_news_img" class="form-control" accept="image/*" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">รูปภาพเพิ่มเติม</div>
                        <div class="col-sm-4">
                            <input type="file" name="intra_news_img_img[]" class="form-control" accept="image/*" multiple>
                            <span class="black-add">สามารถอัพโหลดได้หลายไฟล์</span>
                            <br>
                            <span class="red-add">(เฉพาะไฟล์ .JPG/.JPEG/.PNG)</span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">ไฟล์เอกสารเพิ่มเติม</div>
                        <div class="col-sm-4">
                            <input type="file" name="intra_news_file_pdf[]" class="form-control" accept=".pdf, .doc, .docx, .xls, .xlsx, .ppt, .pptx" multiple>
                            <span class="black-add">สามารถอัพโหลดได้หลายไฟล์</span>
                            <br>
                            <!-- <span class="red-add">(เฉพาะไฟล์ PDF)</span> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                            <a class="btn btn-danger" href="<?php echo site_url('System_intranet'); ?>">ยกเลิก</a>
                        </div>
                    </div>
                </form>
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