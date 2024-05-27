<div class="text-center" style="padding-top: 65px">
    <span class="font-pages-head">แผนผังโครงสร้างรวม</span>
</div>
<div class="text-center" style="padding-top: 50px">
    <img src="<?php echo base_url('docs/logo.png'); ?>" width="174px" height="174px">
</div>
</div>

<div class="bg-pages ">
    <div class="container-pages-detail" style="margin-top: 150px; margin-bottom: 50px;" >
        <?php foreach ($query as $rs) { ?>
            <div>
                <img src="<?php echo base_url('docs/img/' . $rs->site_map_img); ?>" width="100%" height="100%">
            </div>
        <?php  } ?>
    </div>
</div>