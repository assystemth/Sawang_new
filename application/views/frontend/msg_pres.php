<div class="text-center" style="padding-top: 65px">
    <span class="font-pages-head">สารจากนายก</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-detail">
        <?php foreach ($query as $rs) { ?>
            <div class="pages-content break-word mt-5">
                <!-- <span class="font-gi-head">อบต. มีหน้าที่ตามพระราชบัญญัติสภาตำบล และองค์การบริหารส่วน ตำบล พ.ศ. 2537 และ แก้ไขเพิ่มเติม (ฉบับที่ 3 พ.ศ. 2542)</span><br> -->
                <span class="font-gi-content"><?= $rs->msg_pres_detail; ?></span>
            </div>
            <!-- <div class="pages-content break-word">
                        <span class="font-gi-head">เรื่อง <?= $rs->msg_pres_name; ?></span>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-3">
                            <div class="d-flex justify-content-start">
                                <span class="font-page-detail-view-news">ดาวโหลดแล้ว <?= $rs->msg_pres_download; ?> ครั้ง</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <div class="d-flex justify-content-end">
                                    <a onclick="downloadFile(event)" href="<?= base_url('docs/file/' . $rs->msg_pres_pdf); ?>" download>
                                        <img src="<?php echo base_url("docs/s.btn-download.png"); ?>">
                                    </a>
                                    <script>
                                        function downloadFile(event) {
                                            // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลด
                                            var xhr = new XMLHttpRequest();
                                            xhr.open('GET', '<?= base_url('Pages/increment_download_msg_pres'); ?>', true);
                                            xhr.send();

                                            // ทำการเปิดไฟล์ PDF ในหน้าต่างใหม่
                                            window.open(event.currentTarget.href, '_blank');
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-text mt-5">
                        <object data="<?= base_url('docs/file/' . $rs->msg_pres_pdf); ?>" type="application/pdf" width="100%" height="1500px"></object>
                    </div> -->
        <?php } ?>
        <div class="d-flex justify-content-start">
            <span class="font-page-detail-view-news">จำนวนผู้เข้าชม <?= $rs->msg_pres_view; ?> ครั้ง</span>
        </div>
    </div>
</div>