<div class="text-center" style="padding-top: 65px">
    <span class="font-pages-head">ประวัติความเป็นมา</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>

<div class="bg-pages mt-1">
    <?php foreach ($qHistory as $rs) { ?>
        <div class="bg-pages-in">
            <div class="crop">
                <div class="page-center-gi">
                    <div>
                        <?php if (!empty($rs->history_img)) : ?>
                            <img src="<?php echo base_url('docs/img/' . $rs->history_img); ?>" width="545px" height="352px">
                        <?php else : ?>
                            <!-- <img src="<?php echo base_url('docs/logo.png'); ?>" width="545px" height="352px"> -->
                        <?php endif; ?>
                    </div>
                </div>
                <!-- <div class="scrollable-container-gi"> -->
                <span class="font-other-head">สภาพทั่วไป</span>
                <div class="pages-content break-word mt-5">
                    <span class="font-other-content"><?= $rs->history_name; ?></span>
                </div>
                <!-- </div> -->
                <!-- <div class="margin-top-delete-topic d-flex justify-content-end">
                    <a href="<?php echo site_url('Home'); ?>"><img src="<?php echo base_url("docs/s.btn-back.png"); ?>"></a>
                </div> -->
            </div>
        </div>
    <?php } ?>
</div>
</div>