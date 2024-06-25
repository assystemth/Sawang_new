<div class="text-center pages-head">
    <span class="font-pages-head">วิสัยทัศน์และพันธกิจ</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>


<div class="bg-pages">
    <div class="container-pages-detail">
        <?php foreach ($qVision as $rs) { ?>
            <div class="page-center-gi">
                <div>
                    <?php if (!empty($rs->vision_img)) : ?>
                        <div class="mt-gi"></div>
                        <img src="<?php echo base_url('docs/img/' . $rs->vision_img); ?>" width="545px" height="352px">
                    <?php else : ?>
                        <!-- <img src="<?php echo base_url('docs/logo.png'); ?>" width="545px" height="352px"> -->
                    <?php endif; ?>
                </div>
            </div>
            <div class="pages-content break-word mt-5">
                <span class="font-gi-head">วิสัยทัศน์</span><br>
                <span class="font-gi-content"><?= $rs->vision_vision; ?></span>
            </div>
            <div class="pages-content break-word mt-5">
                <span class="font-gi-head">พันธกิจ</span><br>
                <span class="font-gi-content"><?= $rs->vision_pantajit; ?></span>
            </div>
        <?php } ?>
    </div>
</div>