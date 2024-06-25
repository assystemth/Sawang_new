<div class="text-center pages-head" >
    <span class="font-pages-head">อำนาจหน้าที่</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-detail">
        <?php foreach ($qAuthority as $rs) { ?>
            <div class="page-center-gi">
                <div>
                    <?php if (!empty($rs->authority_img)) : ?>
                        <div class="mt-gi"></div>
                        <img src="<?php echo base_url('docs/img/' . $rs->authority_img); ?>" width="545px" height="352px">
                    <?php else : ?>
                        <!-- <img src="<?php echo base_url('docs/logo.png'); ?>" width="545px" height="352px"> -->
                    <?php endif; ?>
                </div>
            </div>
            <div class="pages-content break-word mt-5">
                <!-- <span class="font-pages-content-head">พระราชบัญญัติกำหนดแผนและขั้นตอนการกระจายอำนาจให้แก่องค์กรปกครองท้องถิ่น พ.ศ. 2542 กำหนดให้ อบต.มีอำนาจและหน้าที่ในการจัดระบบการบริการสาธารณะ <br> เพื่อประโยชน์ของประชาชนในท้องถิ่นของตนเองตามมาตรา 16 ดังนี้</span><br> -->
                <span class="font-gi-content"><?= $rs->authority_detail; ?></span>
            </div>
        <?php } ?>
    </div>
</div>