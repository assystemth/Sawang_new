<div class="text-center" style="padding-top: 65px">
    <span class="font-pages-head">การปฏิบัติการป้องกันการทุจริต</span>
</div>
</div>

<div class="bg-pages">
    <div class="container-pages-detail">
        <div class="font-pages-content-head"><?= $rsData->operation_aca_name; ?></div>
        <div class="pages-content break-word mt-2">
            <span class="font-pages-content-detail"><?= $rsData->operation_aca_detail; ?></span>
            <br>
            <a class="font-26" href="<?= $rsData->operation_aca_link; ?>" target="_blank"><?= $rsData->operation_aca_link; ?></a>
            <?php if (!empty($rsDoc)) { ?>
                <span class="font-pages-content-detail">ไฟล์เอกสารเพิ่มเติม</span>&nbsp;&nbsp; : &nbsp;
                <?php foreach ($rsDoc as $doc) { ?>
                    <a class="font-doc" href="<?= base_url('docs/file/' . $doc->operation_aca_file_doc); ?>" target="_blank"><?= $doc->operation_aca_file_doc; ?></a> , &nbsp;
                <?php } ?>
            <?php } ?>
        </div>

        <?php foreach ($rsImg as $img) { ?>
            <div class="text-center">
                <img class="rounded-all" src="<?php echo base_url('docs/img/' . $img->operation_aca_img_img); ?>" width="1035" height="100%">
            </div>
            <br>
        <?php } ?>

        <?php foreach ($rsPdf as $file) { ?>
            <div class="row">
                <div class="col-6 mt-2">
                    <div class="d-flex justify-content-start">
                        <span class="font-page-detail-view-news">ดาวโหลดแล้ว <?= $file->operation_aca_file_download; ?> ครั้ง</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end">
                        <a onclick="downloadFile(event, <?= $file->operation_aca_file_id; ?>)" href="<?= base_url('docs/file/' . $file->operation_aca_file_pdf); ?>" download>
                            <img src="<?php echo base_url("docs/btn-download.png"); ?>" class="btn-download">
                        </a>
                        <script>
                            function downloadFile(event, operation_aca_file_id) {
                                // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลดพร้อมกับ ID
                                var xhr = new XMLHttpRequest();
                                xhr.open('GET', '<?= base_url('Pages/increment_download_operation_aca/'); ?>' + operation_aca_file_id, true);
                                xhr.send();

                                // ทำการเปิดไฟล์ PDF ในหน้าต่างใหม่
                                window.open(event.currentTarget.href, '_blank');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="blog-text mt-3 mb-5">
                <object data="<?= base_url('docs/file/' . $file->operation_aca_file_pdf); ?>" type="application/pdf" width="100%" height="1500px"></object>
            </div>
        <?php } ?>
        <div class="d-flex justify-content-start">
            <span class="font-page-detail-view-news">จำนวนผู้เข้าชม <?= $rsData->operation_aca_view; ?> ครั้ง</span>
        </div>
    </div>
</div>