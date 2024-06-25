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

                <h4 class="black"><b>แก้ไขข้อมูลข่าวประชาสัมพันธ์</b></h4>
                <form action=" <?php echo site_url('System_intranet/edit/' . $rsedit->intra_news_id); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">เรื่อง</div>
                        <div class="col-sm-9">
                            <input type="text" name="intra_news_topic" required class="form-control" value="<?= $rsedit->intra_news_topic; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">รายละเอียด</div>
                        <div class="col-sm-9">
                            <textarea name="intra_news_detail" id="intra_news_detail"><?= $rsedit->intra_news_detail; ?></textarea>
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
                        <div class="col-sm-3 control-label">รูปภาพหน้าปก</div>
                        <div class="col-sm-6">
                            ภาพเก่า <br>
                            <img src="<?= base_url('docs/intranet/img/' . $rsedit->intra_news_img); ?>" width="250px" height="210">
                            <br>
                            เลือกใหม่
                            <br>
                            <input type="file" name="intra_news_img" class="form-control" accept="image/*">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-3 control-label">รูปภาพเพิ่มเติม</div>
                        <div class="col-sm-6">
                            รูปภาพเก่า: <br>
                            <?php if (!empty($rsImg)) { ?>
                                <?php foreach ($rsImg as $img) { ?>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img src="<?= base_url('docs/intranet/img/' . $img->intra_news_img_img); ?>" width="140px" height="100px">
                                            <a class="btn btn-danger btn-sm mb-2" href="#" role="button" onclick="confirmDeleteImg(<?= $img->intra_news_img_id; ?>, '<?= $img->intra_news_img_img; ?>');">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                                </svg> ลบไฟล์
                                            </a>
                                        </div>
                                    </div>
                                    <script>
                                        function confirmDeleteImg(file_id, file_name) {
                                            Swal.fire({
                                                title: 'คุณแน่ใจหรือไม่?',
                                                text: 'คุณต้องการลบไฟล์ ' + file_name + ' ใช่หรือไม่?',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'ใช่, ต้องการลบ!',
                                                cancelButtonText: 'ยกเลิก'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // หลังจากคลิกยืนยันให้เรียก Controller ที่ใช้ในการลบไฟล์ PDF
                                                    window.location.href = "<?= site_url('System_intranet/del_img/'); ?>" + file_id;
                                                }
                                            });
                                        }
                                    </script>
                                <?php } ?>
                            <?php } ?>
                            เลือกใหม่: <br>
                            <input type="file" name="intra_news_img_img[]" class="form-control" accept="image/*" multiple>
                            <span class="black-add">สามารถอัพโหลดได้หลายไฟล์</span>
                            <br>
                            <span class="red-add">(เฉพาะไฟล์ .JPG/.JPEG/.PNG)</span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-3 control-label">ไฟล์เอกสารเพิ่มเติม</div>
                        <div class="col-sm-6">
                            <?php if (!empty($rsFile)) { ?>
                                <?php foreach ($rsFile as $file) { ?>
                                    <a class="btn btn-info btn-sm mb-2" href="<?= base_url('docs/intranet/file/' . $file->intra_news_file_pdf); ?>" target="_blank">ดูไฟล์ <?= $file->intra_news_file_pdf; ?></a>
                                    <a class="btn btn-danger btn-sm mb-2" href="#" role="button" onclick="confirmDelete(<?= $file->intra_news_file_id; ?>, '<?= $file->intra_news_file_pdf; ?>');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                        </svg> ลบไฟล์
                                    </a>
                                    <br>
                                <?php } ?>
                            <?php } ?>
                            <script>
                                function confirmDelete(file_id, file_name) {
                                    Swal.fire({
                                        title: 'คุณแน่ใจหรือไม่?',
                                        text: 'คุณต้องการลบไฟล์ ' + file_name + ' ใช่หรือไม่?',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'ใช่, ต้องการลบ!',
                                        cancelButtonText: 'ยกเลิก'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // หลังจากคลิกยืนยันให้เรียก Controller ที่ใช้ในการลบไฟล์ PDF
                                            window.location.href = "<?= site_url('System_intranet/del_pdf/'); ?>" + file_id;
                                        }
                                    });
                                }
                            </script>
                            <input type="file" name="intra_news_file_pdf[]" class="form-control mt-1" accept="application/pdf" multiple>
                            <span class="black-add">สามารถอัพโหลดได้หลายไฟล์</span>
                            <br>
                            <span class="red-add">(เฉพาะไฟล์ PDF)</span>
                        </div>
                    </div>
                    <br>
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