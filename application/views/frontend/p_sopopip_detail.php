<div class="bg-pages-news">
    <div class="container-pages-news">
        <div class="page-center">
            <div class="head-pages-three">
                <span class="font-pages-head-long">รายงานสรุปผลการจัดซื้อจัดจ้าง<br>หรือการจัดหาพัสดุประจำปี</span>
            </div>
        </div>
        <div class="row">
            <div class="path1-1">
                <span class="font-path-1 underline"><a href="<?php echo site_url('Home'); ?>">หน้าแรก</a></span>
            </div>
            <div class="path2-4">
                <span class="font-path-2 underline"><a href="#">การจัดซื้อจัดจ้าง</a></span>
            </div>
        </div>
        <div class="bg-pages-in">
            <div class="scrollable-container-news">
                <div class="font-pages-content-head"><?= $rsData->p_sopopip_name; ?></div>
                <div class="pages-content break-word mt-2">
                    <span class="font-pages-content-detail"><?= $rsData->p_sopopip_detail; ?></span>
                    <br>
                    <a class="font-26" href="<?= $rsData->p_sopopip_link; ?>" target="_blank"><?= $rsData->p_sopopip_link; ?></a>
                    <?php if (!empty($rsDoc)) { ?>
                        <span class="font-pages-content-detail">ไฟล์เอกสารเพิ่มเติม</span>
                        <?php foreach ($rsDoc as $doc) { ?>
                            <a class="font-doc" href="<?= base_url('docs/file/' . $doc->p_sopopip_file_doc); ?>" target="_blank"><?= $doc->p_sopopip_file_doc; ?></a>,&nbsp;
                        <?php } ?>
                    <?php } ?>
                </div>
                <?php foreach ($rsImg as $img) { ?>
                    <div class="col-3 mb-3">
                        <img class="rounded-all" src="<?php echo base_url('docs/img/' . $img->p_sopopip_img_img); ?>" width="950px" height="100%">
                    </div>
                <?php } ?>
                <?php foreach ($rsPdf as $file) { ?>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <div class="d-flex justify-content-start">
                                <span class="font-page-detail-view-news">ดาวโหลดแล้ว <?= $file->p_sopopip_pdf_download; ?> ครั้ง</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <a onclick="downloadFile(event, <?= $file->p_sopopip_pdf_id; ?>)" href="<?= base_url('docs/file/' . $file->p_sopopip_pdf_pdf); ?>" download>
                                    <img src="<?php echo base_url("docs/s.btn-download.png"); ?>">
                                </a>
                                <script>
                                    function downloadFile(event, p_sopopip_pdf_id) {
                                        // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลดพร้อมกับ ID
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('GET', '<?= base_url('Pages/increment_download_p_sopopip/'); ?>' + p_sopopip_pdf_id, true);
                                        xhr.send();

                                        // ทำการเปิดไฟล์ PDF ในหน้าต่างใหม่
                                        window.open(event.currentTarget.href, '_blank');
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="blog-text mt-3 mb-5">
                        <object data="<?= base_url('docs/file/' . $file->p_sopopip_pdf_pdf); ?>" type="application/pdf" width="100%" height="1500px"></object>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="d-flex justify-content-start">
                        <span class="font-page-detail-view-news">จำนวนผู้เข้าชม <?= $rsData->p_sopopip_view; ?> ครั้ง</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="margin-top-delete-topic d-flex justify-content-end">
                        <a href="<?php echo site_url('Pages/news'); ?>"><img src="<?php echo base_url("docs/s.btn-back.png"); ?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>