<div class="text-center" style="padding-top: 65px">
    <span class="font-pages-head">นโยบายของผู้บริหาร</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>

<div class="bg-pages">
    <div class="container-pages-detail">
        <div class="mt-gi">

            <?php foreach ($qExecutivepolicy as $rs) { ?>
                <div class="pages-content break-word">
                    <span class="font-gi-head">เรื่อง <?= $rs->executivepolicy_name; ?></span>
                    <br>
                    <span class="font-pages-content"><?= $rs->executivepolicy_detail; ?></span>
                </div>
                <!-- <div class="row">
                        <div class="col-6 mt-3">
                            <div class="d-flex justify-content-start">
                                <span class="font-page-detail-view-news">ดาวโหลดแล้ว <?= $rs->executivepolicy_download; ?> ครั้ง</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <div class="d-flex justify-content-end">
                                    <a onclick="downloadFile(event)" href="<?= base_url('docs/file/' . $rs->executivepolicy_pdf); ?>" download>
                                        <img src="<?php echo base_url("docs/s.btn-download.png"); ?>">
                                    </a>
                                    <script>
                                        function downloadFile(event) {
                                            // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลด
                                            var xhr = new XMLHttpRequest();
                                            xhr.open('GET', '<?= base_url('Pages/increment_download_executivepolicy'); ?>', true);
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
                        <object data="<?= base_url('docs/file/' . $rs->executivepolicy_pdf); ?>" type="application/pdf" width="100%" height="1500px"></object>
                    </div> -->
            <?php } ?>
            <div class="d-flex justify-content-start">
                <span class="font-page-detail-view-news">จำนวนผู้เข้าชม <?= $rs->executivepolicy_view; ?> ครั้ง</span>
            </div>
        </div>
    </div>
</div>