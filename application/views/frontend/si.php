<div class="text-center" style="padding-top: 65px">
    <span class="font-pages-head">ยุทธศาสตร์การพัฒนาด้านโครงสร้างพื้นฐาน</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-detail">
        <div class="mt-gi">
            <?php foreach ($qSi as $rs) { ?>
                <div class="pages-content break-word mt-5">
                    <span class="font-gi-head"><?= $rs->si_topic; ?></span><br>
                    <div class="font-gi-content mt-4 pl-20">
                        <span class="">เป้าหมาย</span><br>
                        <div class="pl-13p font-gi-content">
                            <span><?= $rs->si_target; ?></span>
                        </div>
                    </div>
                    <div class="font-gi-content mt-4 pl-20">
                        <span class="">แนวทางการพัฒนา</span><br>
                        <div class="pl-13p font-gi-content">
                            <span><?= $rs->si_guide; ?></span>
                        </div>
                    </div>
                    <div class="font-gi-content mt-4 pl-20">
                        <span class="">ตัวชี้วัด</span><br>
                        <div class="pl-13p font-gi-content">
                            <span><?= $rs->si_indicators; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>