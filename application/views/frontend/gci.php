<div class="text-center pages-head">
    <span class="font-pages-head">ข้อมูลสภาพทั่วไป</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-detail">
        <?php foreach ($qGci as $rs) { ?>
            <div class="page-center-gi">
                <div>
                    <?php if (!empty($rs->gci_img)) : ?>
                        <div class="mt-gi"></div>
                        <img src="<?php echo base_url('docs/img/' . $rs->gci_img); ?>" width="545px" height="352px">
                    <?php else : ?>
                        <!-- <img src="<?php echo base_url('docs/logo.png'); ?>" width="545px" height="352px"> -->
                    <?php endif; ?>
                </div>
            </div>
            <div class="pages-content break-word mt-5">
                <span class="font-gi-head">1.ลักษณะตำบล</span><br>
                <span class="font-gi-content"><?= $rs->gci_location; ?></span>
            </div>
            <div class="pages-content break-word mt-5">
                <span class="font-gi-head">2.อาณาเขต</span><br>
                <span class="font-gi-content"><?= $rs->gci_territory; ?></span>
            </div>
            <div class="pages-content break-word mt-5">
                <span class="font-gi-head">3.ลักษณะภูมิประเทศ</span><br>
                <span class="font-gi-content"><?= $rs->gci_terrain; ?></span>
            </div>
            <div class="pages-content break-word mt-5">
                <span class="font-gi-head">4.พื้นที่องค์การบริหารส่วนตำบล</span><br>
                <span class="font-gi-content"><?= $rs->gci_area; ?></span>
            </div>
        <?php } ?>
    </div>
</div>