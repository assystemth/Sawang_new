<div class="text-center pages-head">
    <span class="font-pages-head">ภารกิจและความรับผิดชอบ</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-detail">
        <?php foreach ($qMission as $rs) { ?>
            <div class="page-center-gi">
                <div>
                    <?php if (!empty($rs->mission_img)) : ?>
                        <div class="mt-gi"></div>
                        <img src="<?php echo base_url('docs/img/' . $rs->mission_img); ?>" width="545px" height="352px">
                    <?php else : ?>
                        <!-- <img src="<?php echo base_url('docs/logo.png'); ?>" width="545px" height="352px"> -->
                    <?php endif; ?>
                </div>
            </div>
            <div class="pages-content break-word mt-5">
                <!-- <span class="font-gi-head">อบต. มีหน้าที่ตามพระราชบัญญัติสภาตำบล และองค์การบริหารส่วน ตำบล พ.ศ. 2537 และ แก้ไขเพิ่มเติม (ฉบับที่ 3 พ.ศ. 2542)</span><br> -->
                <span class="font-gi-content"><?= $rs->mission_detail; ?></span>
            </div>
        <?php } ?>
    </div>
</div>