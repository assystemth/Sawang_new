<div class="image-slide-stick-mid">
    <a href="https://itas.nacc.go.th/go/eit/u4gpi2" target="_blank" rel="noopener noreferrer">
        <img src="docs/eit-slide-mid.png">
    </a>
    <img src="docs/eit-slide-close.png" class="close-button-slide-mid" onclick="closeImageSlideMid()">
</div>

<div class="welcome">

    <!-- <div class="tab-container">
        <img src="docs/item-news-top.png" width="324" height="100" style="position: absolute; z-index: 2;">
        <div id="marquee-container">
            <div class="marquee">
                <div>
                    <?php
                    $maxIterations = 1000;
                    $iteration = 0;
                    while ($iteration < $maxIterations) {
                        foreach ($qHotnews as $index => $hotnews) {
                            echo '<span>' . $hotnews->hotNews_text . '</span>';
                        }
                        $iteration++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div> -->
</div>

<div class="welcome-btm">
    <div class="text-center" style="padding-top:15.5%;">
        <span class="font-welcome-btm">องค์การบริหารส่วนตำบลสว่าง</span>
    </div>
    <div class="d-flex justify-content-center">
        <div class="welcome-btm-text-run">
            <div class="row">
                <div class="col-2">
                    <span class="font-left-text-run">ประกาศ</span>
                </div>
                <div class="col-10">
                    <div class="tab-container">
                        <?php
                        $news = $this->HotNews_model->hotnews_frontend();

                        echo '<div class="text-run-update">';
                        foreach ($news as $item) {
                            echo '<p>' . $item->hotNews_text . '</p>';
                        }
                        echo '</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="tab-container">
    <div class="rectangle1"><span class="news-update">&nbsp;<i>ข่าวสารอัพเดต</i></span></div>
    <div class="rectangle2"></div>
    <?php foreach ($qHotnews as $hotnews) { ?>
        <div class="running-text"><?= $hotnews->hotNews_text; ?></div>
    <?php } ?>
</div> -->

<div class="bg-main">
    <!-- แทบวิ่ง  -->
    <!-- <img src="docs/s.item-news-top3.png" width="290" height="88" style="position: absolute; z-index: 2; margin-top: -7px;">

    <div class="tab-container">
        <?php
        $news = $this->HotNews_model->hotnews_frontend();

        echo '<div class="text-run-update">';
        foreach ($news as $item) {
            echo '<p>' . $item->hotNews_text . '</p>';
        }
        echo '</div>';
        ?>
    </div> -->

    <!-- วิสัยทัศน์  -->
    <div class="vision mt-5">
        <div class="row" style="padding-top: 35%;">
            <div class="col-4" style="text-align: right;">
                <a href="<?php echo site_url('Pages/ita_all'); ?>" class="zoom-otop">
                    <img class="mark-logo" src="docs/s.item-vision1v3.png">
                </a>
                <br>
                <a href="https://itas.nacc.go.th/go/iit/u4gpi2" target="_blank" class="zoom-otop">
                    <img class="mark-logo" src="docs/s.item-vision2v3.png">
                </a>
            </div>
            <div class="col-7">
                <a href="<?php echo site_url('Pages/msg_pres'); ?>" class="zoom-otop">
                    <img class="mark-logo" src="docs/s.item-vision3v3.png">
                </a>
                <br>
                <a href="https://itas.nacc.go.th/go/eit/u4gpi2" target="_blank" class="zoom-otop">
                    <img class="mark-logo" src="docs/s.item-vision4v3.png">
                </a>
            </div>
        </div>
    </div>

    <div class="head-activity p-3">
        <div class="dropdown-container">
            <!-- Dropdown 1 -->
            <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 45px; padding-top:10px;">
                <img src="docs/navmid-head1.png" data-non-active-src="docs/navmid-head1.png" data-active-src="docs/navmid-head1-active.png">
            </button>
            <div class="dropdown-content">
                <ul class="no-bullets mt-4">
                    <div class="dropdown-left">
                        <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/s.navmid-head1.png"></div>
                        </li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/history'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.0-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.0.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.0.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/gci'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.1.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.1.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/vision'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.2.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.2.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/authority'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.3.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.3.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/mission'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.4.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.4.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/executivepolicy'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.5.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.5.png"></a></li>
                    </div>
                    <div class="dropdown-center">
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/ci'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.7.png'); ?>`)"><img src="docs/s.item-nav-mid1.7.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/travel'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.8.png'); ?>`)"><img src="docs/s.item-nav-mid1.8.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/otop'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.6.png'); ?>`)"><img src="docs/s.item-nav-mid1.6.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/si'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.10-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.10.png'); ?>`)"><img src="docs/s.item-nav-mid1.10.png"></a></li>
                        <!-- <li><a class="dropdown-item" href="<?php echo site_url('Pages/travel'); ?>"><img src="docs/navmid-head1.9.png"></a></li> -->
                    </div>
                </ul>
            </div>

            <!-- Dropdown 2 -->
            <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 43px;">
                <img src="docs/navmid-head2.png" data-non-active-src="docs/navmid-head2.png" data-active-src="docs/navmid-head2-active.png">
            </button>
            <div class="dropdown-content">
                <ul class="no-bullets mt-4">
                    <div class="dropdown-left">
                        <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head21.png"></div>
                        </li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/site_map'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.1.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.1.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_executives'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.2.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.2.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_council'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.3.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.3.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_unit_leaders'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.4.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.4.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_deputy'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.5.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.5.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_treasury'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.6.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.6.png"></a></li>
                    </div>
                    <div class="dropdown-center">
                        <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="" src="docs/navmid-head22.png"></div>
                        </li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_maintenance'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.7.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.7.png"></a></li>
                        <li><a class="dbropdown-item" href="<?php echo site_url('Pages/p_education'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.8.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.8.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_audit'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.9-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.9.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.9.png"></a></li>
                    </div>
                </ul>
            </div>

            <!-- Dropdown 3 -->
            <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 48px;">
                <img src="docs/navmid-head3.png" data-non-active-src="docs/navmid-head3.png" data-active-src="docs/navmid-head3-active.png">
            </button>
            <div class="dropdown-content">
                <ul class="no-bullets mt-4">
                    <div class="dropdown-left">
                        <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head6.png"></div>
                        </li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_cac'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.1.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.1.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_cig'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.2.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.2.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_cjc'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.3.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.3.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_sags'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.4.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.4.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/adding_suggestions'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.5.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.5.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/q_a'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.6.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.6.png"></a></li>
                    </div>
                    <div class="dropdown-center">
                        <!-- <li>
                            <div class="dropdown-item" href="#"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.6.png"></div>
                        </li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/questions'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.7.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.7.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_oppr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.8.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.8.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_ems'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.9-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.9.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.9.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_ahs'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.10-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.10.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.10.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_e_book'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.11-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.11.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.11.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/adding_corruption'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.12-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.12.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.12.png"></a></li>
                    </div>
                    <div class="dropdown-right">
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/adding_complain'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.13-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.13.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.13.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/contact'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.14-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.14.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.14.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_gup'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.15-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.15.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.15.png"></a></li>
                    </div>
                </ul>
            </div>

            <!-- Dropdown 4 -->
            <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 55px;">
                <img src="docs/navmid-head4.png" data-non-active-src="docs/navmid-head4.png" data-active-src="docs/navmid-head4-active.png">

            </button>
            <div class="dropdown-content">
                <ul class="no-bullets mt-4">
                    <div class="dropdown-left">
                        <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head5.png"></div>
                        </li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pdl'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.1.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.1.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pc3y'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.2.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.2.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pds3y'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.3.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.3.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pdpa'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.4.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.4.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_dpy'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.11-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.11.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.11.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_poa'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.5.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.5.png"></a></li>
                    </div>
                    <div class="dropdown-center">
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pcra'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.6.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.6.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pop'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.7.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.7.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_paca'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.8.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.8.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_psi'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.9-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.9.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.9.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pmda'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.10-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.10.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.10.png"></a></li>
                    </div>
                </ul>
            </div>

            <!-- Dropdown 5 -->
            <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 45px;">
                <img src="docs/navmid-head5.png" data-non-active-src="docs/navmid-head5.png" data-active-src="docs/navmid-head5-active.png">

            </button>
            <div class="dropdown-content">
                <ul class="no-bullets mt-4">
                    <div class="dropdown-left">
                        <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head6.png"></div>
                        </li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_reauf'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v7.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v7.1.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v7.1.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_aca'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.2.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.2.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_mcc'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.3.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.3.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_sap'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.4.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.4.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_pgn'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.5.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.5.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_po'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.6.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.6.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_eco_topic'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.7.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.7.png"></a></li>
                    </div>
                    <div class="dropdown-center">
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/ita_all'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.8.png'); ?>`)"><img class="mar-left-5" src="docs/s.item-nav-mid6v2.8.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/lpa'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.9-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.9.png'); ?>`)"><img class="mar-left-5" src="docs/s.item-nav-mid6v2.9.png"></a></li>
                        <li>
                            <div class="dropdown-item mt-3" href="#" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.10-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.10.png'); ?>`)"><img class="mar-left-8" src="docs/s.item-nav-mid6v2.10.png"></div>
                        </li>
                        <li><a class="dropdown-item mt-2" href="<?php echo site_url('Pages/operation_policy_hr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.11-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.11.png'); ?>`)"><img class="mar-left-12" src="docs/s.item-nav-mid6v2.11.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_am_hr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.12-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.12.png'); ?>`)"><img class="mar-left-12" src="docs/s.item-nav-mid6v2.12.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_rdam_hr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.13-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.13.png'); ?>`)"><img class="mar-left-12" src="docs/s.item-nav-mid6v2.13.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_cdm_topic'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.14-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.14.png'); ?>`)"><img class="mar-left-12" src="docs/s.item-nav-mid6v2.14.png"></a></li>
                    </div>
                    <div class="dropdown-right">
                        <!-- <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_procurement'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.15-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.15.png'); ?>`)"><img class="mar-left-5" src="docs/s.item-nav-mid6v2.15.png"></a></li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_aa'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.16-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.16.png'); ?>`)"><img class="mar-left-3" src="docs/s.item-nav-mid6v2.16.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_pm'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.17-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.17.png'); ?>`)"><img class="mar-left-3" src="docs/s.item-nav-mid6v2.17.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_aditn'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.18-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.18.png'); ?>`)"><img class="mar-left-3" src="docs/s.item-nav-mid6v2.18.png"></a></li>
                        <li>
                            <div class="dropdown-item mt-3" href="#" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v3.19-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v3.19.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v3.19.png"></div>
                        </li>
                        <li><a class="dropdown-item mt-2" href="<?php echo site_url('Pages/p_rpobuy'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v3.20-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v3.20.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v3.20.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_sopopip'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v3.21-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v3.21.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v3.21.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_sopopaortsr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v3.22-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v3.22.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v3.22.png"></a></li>
                    </div>
                </ul>
            </div>

            <!-- Dropdown 6 -->
            <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 45px;">
                <img src="docs/navmid-head6.png" data-non-active-src="docs/navmid-head6.png" data-active-src="docs/navmid-head6-active.png">

            </button>
            <div class="dropdown-content">
                <ul class="no-bullets mt-4">
                    <div class="dropdown-left">
                        <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head6.png"></div>
                        </li> -->
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/order'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.1.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.1.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/announce'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.2.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.2.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/mui'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.3.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.3.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/guide_work'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.4.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.4.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/km'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.6.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.6.png"></a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('Pages/loadform'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.5.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.5.png"></a></li>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-5 d-flex justify-content-center">
        <img src="docs/s.img-bottom-vision.png" alt="">
    </div>

    <div class="content-banner">
        <!-- <div class="text-center mb-5">
            <a href="<?php echo site_url('Pages/executivepolicy'); ?>">
                <img src="docs/top-banner-san.png" width="315" height="76">
            </a>
        </div> -->
        <img src="docs/s.bg-banner2.png" height="668px" width="1152px" class="frame-main">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="z-index: 10;">
            <div class="carousel-indicators">
                <?php
                foreach ($qBanner as $index => $img_banner) {
                    $active = ($index === 0) ? "active" : "";
                    echo '<button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-current="true" aria-label="Slide ' . ($index + 1) . '"></button>';
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php foreach ($qBanner as $index => $img_banner) { ?>
                    <div class="carousel-item <?= ($index === 0) ? "active" : ""; ?>" data-bs-interval="5000">
                        <a href="<?= $img_banner->banner_link; ?>" target="_blank">
                            <img src="docs\img\<?= $img_banner->banner_img; ?>" class="d-block w-100">
                        </a>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="bg-activity">
            <div class="d-flex justify-content-center" style="padding-top: 5%;">
                <a href="<?php echo site_url('pages/activity'); ?>">
                    <img src="docs/s.head-activity.png">
                </a>
            </div>
            <div class="row d-flex justify-content-center">
                <?php foreach ($qActivity as $activity) { ?>
                    <div class="card-activity col-4 mx-4" style="margin-top: 40px;">
                        <?php if (!empty($activity->activity_img)) : ?>
                            <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                                <img src="<?php echo base_url('docs/img/' . $activity->activity_img); ?>" width="230px" height="169px" style="border-radius: 24px 24px 0 0;">
                            </a>
                        <?php else : ?>
                            <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                                <img src="<?php echo base_url('docs/coverphoto.png'); ?>">
                            </a>
                        <?php endif; ?>
                        <br>
                        <div class="box-activity">
                            <div class="text-activity underline">
                                <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                                    <span><?= $activity->activity_name; ?></span>
                                </a>
                            </div>
                            <a class="underline" href="<?php echo site_url('Pages/activity_detail/' . $activity->activity_id); ?>">
                                <span class="span-time-home"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-calendar-minus-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1z" />
                                    </svg>
                                    <?php
                                    // ในการใช้งาน setThaiMonth
                                    $date = new DateTime($activity->activity_date);
                                    $day_th = $date->format('d');
                                    $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                    $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                    $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                    echo $formattedDate;
                                    ?>
                                </span>
                                <span class="span-time-home">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    </svg>
                                    <?php
                                    $date = new DateTime($activity->activity_date);
                                    $formattedTime = $date->format('H:i'); // เวลา
                                    echo $formattedTime;
                                    ?>
                                    น.</span>
                            </a>
                            &nbsp;
                            <?php
                            // วันที่ของข่าว
                            $activity_date = new DateTime($activity->activity_date);

                            // วันที่ปัจจุบัน
                            $current_date = new DateTime();

                            // คำนวณหาความต่างของวัน
                            $interval = $current_date->diff($activity_date);
                            $days_difference = $interval->days;

                            // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                            if ($days_difference > 30) {
                                // ไม่แสดงรูปภาพ
                            } else {
                                // แสดงรูปภาพ
                                echo '<img src="docs/activity-new.gif">';
                            }
                            ?>
                        </div>
                        <div class="font-12 underline d-flex justify-content-end mt-4">
                            <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">รายละเอียด <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 5%;">
                <a href="<?php echo site_url('pages/activity'); ?>">
                    <img src="docs/s.btn-all.png">
                </a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center" style="margin-top:1200px;">
        <img src="docs/s.linethai1.png">
    </div>

    <div class="content-news-bg  underline">
        <div class="tab-container2">
            <div class="tab-link-two" onclick="openTabTwo('tabtwo1')">
                <img src="docs/s.news-head5v3.png" alt="Tab 1">
            </div>
            <div class="tab-link-two" onclick="openTabTwo('tabtwo2')">
                <img src="docs/s.news-head6v3.png" alt="Tab 2">
            </div>
            <div class="tab-link-two" onclick="openTabTwo('tabtwo3')">
                <img src="docs/s.news-head7v3.png" alt="Tab 3">
            </div>
            <div class="tab-link-two" onclick="openTabTwo('tabtwo4')">
                <img src="docs/s.news-head8v3.png" alt="Tab 4">
            </div>

        </div>
        <br>
        <div id="tabtwo1" class="tab-content-two">
            <?php foreach ($qNews as $news) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/news_detail/' . $news->news_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($news->news_name); ?></span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // ในการใช้งาน setThaiMonth
                                                $date = new DateTime($news->news_date);
                                                $day_th = $date->format('d');
                                                $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                echo $formattedDate;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -35px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $news_date = new DateTime($news->news_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($news_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-end" style="margin-top: -28px;">
                <a href="<?php echo site_url('pages/news'); ?>">
                    <img src="docs/s.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tabtwo2" class="tab-content-two">
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_bgps'); ?>">
                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติงบประมาณ</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_chh'); ?>">
                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการควบคุมกิจการที่เป็นอันตรายต่อสุขภาพ</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_ritw'); ?>">
                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการติดตั้งระบบบำบัดน้ำเสียในอาคาร</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_market'); ?>">
                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติตลาด</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_rmwp'); ?>">
                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการจัดการสิ่งปฏิกูลและมูลฝอย</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_rcsp'); ?>">
                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติหลักเกณฑ์การคัดมูลฝอย</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_rcp'); ?>">
                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการควบคุมการเลี้ยงหรือปล่อยสุนัขและแมว</span>
                </a>
            </div>
        </div>
        <div id="tabtwo3" class="tab-content-two">
            <?php foreach ($qOrder as $gw) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/order_detail/' . $gw->order_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($gw->order_name); ?></span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // ในการใช้งาน setThaiMonth
                                                $date = new DateTime($gw->order_date);
                                                $day_th = $date->format('d');
                                                $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                echo $formattedDate;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -35px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $order_date = new DateTime($gw->order_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($order_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-end" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/order'); ?>">
                    <img src="docs/s.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tabtwo4" class="tab-content-two">
            <?php foreach ($qAnnounce as $gw) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/announce_detail/' . $gw->announce_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($gw->announce_name); ?></span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // ในการใช้งาน setThaiMonth
                                                $date = new DateTime($gw->announce_date);
                                                $day_th = $date->format('d');
                                                $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                echo $formattedDate;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -35px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $announce_date = new DateTime($gw->announce_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($announce_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-end" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/announce'); ?>">
                    <img src="docs/s.btn-all.png">
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 50px;">
        <img src="docs/s.linethai2.png">
    </div>
    <div class="content-news-bg-two underline">
        <div class="tab-container2">
            <div class="tab-link" onclick="openTab('tab1')">
                <img src="docs/s.news-head1v3.png" alt="Tab 1">
            </div>
            <div class="tab-link" onclick="openTab('tab2')">
                <img src="docs/s.news-head2v3.png" alt="Tab 2">
            </div>
            <div class="tab-link" onclick="openTab('tab3')">
                <img src="docs/s.news-head3v3.png" alt="Tab 3">
            </div>
            <div class="tab-link" onclick="openTab('tab4')">
                <img src="docs/s.news-head4v3.png" alt="Tab 4">
            </div>
        </div>
        <br>
        <div id="tab1" class="tab-content">
            <?php foreach ($qProcurement as $pcm) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/procurement_detail/' . $pcm->procurement_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($pcm->procurement_name); ?></span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // ในการใช้งาน setThaiMonth
                                                $date = new DateTime($pcm->procurement_date);
                                                $day_th = $date->format('d');
                                                $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                echo $formattedDate;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -35px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $procurement_date = new DateTime($pcm->procurement_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($procurement_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-end" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/procurement'); ?>">
                    <img src="docs/s.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tab2" class="tab-content">
            <?php
            // เพิ่มตัวแปร $limited_data เพื่อจัดเก็บ array ที่จะใช้กับ array_slice
            $limited_data = [];

            foreach ($json_data as $key1 => $value1) :
                if (is_array($value1)) :
                    foreach ($value1 as $key2 => $value2) :
                        if (is_array($value2)) :
                            foreach ($value2 as $key3 => $value3) :
                                if ($key3 === 'project_id') :
                                    $url = 'https://process3.gprocurement.go.th/egp2procmainWeb/jsp/procsearch.sch?servlet=gojsp&proc_id=ShowHTMLFile&processFlows=Procure&projectId=' . $value3 . '&templateType=W2&temp_Announ=A&temp_itemNo=0&seqNo=1';
                                endif;
                                if ($key3 === 'project_name') :
                                    // ใส่ข้อมูลลงใน $limited_data
                                    $limited_data[] = [
                                        'url' => $url,
                                        'project_name' => $value3,
                                    ];
                                endif;
                            endforeach;
                        endif;
                    endforeach;
                endif;
            // Add a new line after each subarray at the first level
            endforeach;

            // เรียงลำดับ $limited_data ตาม 'project_id' ล่าสุด
            usort($limited_data, function ($a, $b) {
                return $b['url'] <=> $a['url'];
            });

            // ในกรณีที่ต้องการแสดงเฉพาะ 4 แถวล่าสุด
            $limited_data = array_slice($limited_data, 0, 8);

            // ตรวจสอบว่ามีข้อมูลหรือไม่และแสดงผลลัพธ์
            if (!empty($limited_data)) :
                foreach ($limited_data as $data) :
            ?>
                    <div class="content-news-detail">
                        <span class="text-news"><a href="<?= htmlspecialchars($data['url']) ?>" target="_blank">
                                <img src="<?php echo base_url("docs/e-gp.png"); ?>" style="width: 40; height: 40px;">
                                <?= htmlspecialchars($data['project_name']) ?></a></span>
                    </div>
                <?php
                endforeach;
            else :
                ?>
                <span class="text-center align-center" style="font-size: 36px;">ไม่สามารถดึงข้อมูลจากระบบจัดซือจัดจ้างภาครัฐได้ กรุณาโหลดหน้าเว็บใหม่อีกครั้ง</span>
            <?php
            endif;
            ?>

            <div class="d-flex justify-content-end" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/e_gp'); ?>">
                    <img src="docs/s.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tab3" class="tab-content">
            <?php foreach ($qP_reb as $anou) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/p_reb_detail/' . $anou->p_reb_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($anou->p_reb_name); ?></span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // ในการใช้งาน setThaiMonth
                                                $date = new DateTime($anou->p_reb_date);
                                                $day_th = $date->format('d');
                                                $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                echo $formattedDate;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -35px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $p_reb_date = new DateTime($anou->p_reb_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($p_reb_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-end" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/p_reb'); ?>">
                    <img src="docs/s.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tab4" class="tab-content">
            <?php foreach ($qP_rpo as $anou) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/p_rpo_detail/' . $anou->p_rpo_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($anou->p_rpo_name); ?></span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // ในการใช้งาน setThaiMonth
                                                $date = new DateTime($anou->p_rpo_date);
                                                $day_th = $date->format('d');
                                                $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                echo $formattedDate;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -35px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $p_rpo_date = new DateTime($anou->p_rpo_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($p_rpo_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-end" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/p_rpo'); ?>">
                    <img src="docs/s.btn-all.png">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- <div class="bg-news2">
</div> -->
<div class="bg-otop">
    <div class="otop-content">
        <div class="text-center">
            <div class="row">
                <div class="col-3" style="margin-top: -50px;">
                    <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                        <img src="docs\s.item-otop1.png">
                    </a>
                </div>
                <div class="col-3" style="padding-top: 0;">
                    <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                        <img src="docs\s.item-otop2.png">
                    </a>
                </div>
                <div class="col-3" style="padding-top: 40px;">
                    <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                        <img src="docs\s.item-otop3.png">
                    </a>
                </div>
                <div class="col-3">
                    <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                        <img src="docs\s.item-otop4.png">
                    </a>
                    <div class="d-flex justify-content-center" style="margin-top: 8%;">
                        <a href="<?php echo site_url('pages/otop'); ?>">
                            <img src="docs/s.btn-all.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="bg-travel">
    <div class="travel-content">
        <div class="slick-carousel ">
            <?php foreach ($qTravel as $travel) { ?>
                <div class="text-center zoom-otop mt-5">
                    <a href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                        <img src="<?php echo base_url('docs/img/' . $travel->travel_img); ?>" width="234px" height="295px" class="image-with-shadow-travel">
                    </a>
                    <br>
                    <a class="underline" href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                        <span class="text-travel"><?= $travel->travel_name; ?></span>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-end" style="margin-top: 3%;">
            <a href="<?php echo site_url('pages/travel'); ?>">
                <img src="docs/s.btn-all.png">
            </a>
        </div>
    </div>
</div> -->

<div class="bg-travel">
    <div class="travel-content">
        <div class="slick-carousel ">
            <?php foreach ($qTravel as $travel) { ?>
                <div class="text-center zoom-otop mt-5">
                    <a href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                        <img src="<?php echo base_url('docs/img/' . $travel->travel_img); ?>" width="234px" height="295px" class="image-with-shadow-travel">
                    </a>
                    <br>
                    <div class="d-flex justify-content-center" style="margin-left: 25px;">
                        <a class="underline" href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                            <?php
                            $imageName = '';
                            switch ($travel->travel_id) {
                                case 1:
                                    $imageName = 's.text-travel1.png';
                                    break;
                                case 2:
                                    $imageName = 's.text-travel2.png';
                                    break;
                                case 3:
                                    $imageName = 's.text-travel3.png';
                                    break;
                                case 4:
                                    $imageName = 's.text-travel4.png';
                                    break;
                                case 5:
                                    $imageName = 's.text-travel5.png';
                                    break;
                                case 6:
                                    $imageName = 's.text-travel6.png';
                                    break;
                                default:
                                    $imageName = 'default.jpg';
                                    break;
                            }
                            ?>
                            <img src="<?php echo base_url('docs/' . $imageName); ?>" alt="Image for ID <?php echo $travel->travel_id; ?>">
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-end" style="margin-top: 3%;">
            <a href="<?php echo site_url('pages/travel'); ?>">
                <img src="docs/s.btn-all.png">
            </a>
        </div>
    </div>
</div>


<!-- <div class="bg-travel">
    <div class="travel-content text-center">
        <div class="up-down">
            <a href="<?php echo site_url('pages/travel'); ?>">
                <img class="mark-logo mt-5" src="docs\icon-map.png" width="210px" height="342px">
            </a>
        </div>
    </div>
</div> -->



<div class="bg-page-bottom">
    <div class="d-flex justify-content-center" style="padding-top: 120px;">
        <img src="docs/s.head-e-service.png">
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <span class="font-e-service-32">บริการยื่นคำร้องออนไลน์ 24 ชั่วโมง</span>
    </div>
    <div class="row d-flex justify-content-center underline" style="padding-top: 70px;">
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_complain'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service1.png">
                <br>
                <span class="font-e-service-25">ร้องเรียนร้องทุกข์</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_corruption'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service2.png">
                <br>
                <span class="font-e-service-25">แจ้งเรื่องทุจริต</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_suggestions'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service3.png">
                <br>
                <span class="font-e-service-25">รับฟังความคิดเห็น</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/q_a'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service4.png">
                <br>
                <span class="font-e-service-25">กระทู้ถาม-ตอบ</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/contact'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service5.png">
                <br>
                <span class="font-e-service-25">ติดต่อสอบถาม</span>
            </a>
        </div>
    </div>
    <div class="row underline" style="padding-top: 70px;">
        <div class="col-4 text-end">
            <a href="<?php echo site_url('Pages/e_service'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-1v2.png">
            </a>
            <div class="mar-es-intra"></div>
            <a href="<?php echo site_url('Pages/pbsv_e_book'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-2v1.png">
            </a>
            <div class="mar-es-intra"></div>
            <a href="<?php echo site_url('Pages/newsletter'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-3v1.png">
            </a>
            <div class="mar-fb">
                <a href="https://www.nacc.go.th/NACCPPWFC?" target="_blank" rel="noopener noreferrer">
                    <img src="docs/btn-corruption.jpg">
                </a>
                <div class="mar-es-intra"></div>
                <div id="carouselExampleAutoplayingITA" class="carousel slide" data-bs-ride="carousel" style="z-index: 10; left: 35px; margin-top: -80px;">
                    <div class="carousel-indicators">
                        <?php
                        foreach ($qPublicize_ita as $index => $img_banner) {
                            $active = ($index === 0) ? "active" : "";
                            echo '<button type="button" data-bs-target="#carouselExampleAutoplayingITA" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-current="true" aria-label="Slide ' . ($index + 1) . '"></button>';
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php foreach ($qPublicize_ita as $index => $img_publicize_ita) { ?>
                            <div class="carousel-item <?= ($index === 0) ? "active" : ""; ?>" data-bs-interval="3000">
                                <a href="<?= $img_publicize_ita->publicize_ita_link; ?>" target="_blank">
                                    <img src="docs\img\<?= $img_publicize_ita->publicize_ita_img; ?>" class="d-block " style="height: 550px; width: 320px;">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplayingITA" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplayingITA" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- <?php foreach ($qPublicize_ita as $index => $rs) { ?>
                    <a href="<?= $rs->publicize_ita_name; ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo base_url('docs/img/' . $rs->publicize_ita_img); ?>" width="320px" height="520px">
                    </a>
                <?php } ?> -->
            </div>
        </div>

        <div class="col-4 text-center">
            <a target="_blank" href="https://dbdregcom.dbd.go.th/mainsite/index.php?id=28" class="zoom-otop">
                <img src="docs/s.menu-e-service-4v1.png">
            </a>
            <div class="mar-es-intra"></div>
            <a href="https://www.oic.go.th/INFOCENTER78/7852/" target="_blank" class="zoom-otop">
                <img src="docs/s.menu-e-service-5v1.png">
            </a>
            <div class="mar-es-intra"></div>
            <a href="<?php echo site_url('Pages/laws_topic'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-6v2.png">
            </a>
            <div class="mar-fb">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100068445171570&tabs=timeline&width=331&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="331" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>

        <div class="col-4">
            <div class="bg-view">
                <div class="head-view text-center ">
                    <span class="font-view">จำนวนผู้เข้าชมเว็บไซต์</span>
                </div>
                <div class="content-view">
                    <div class="mypiechart text-center mt-4">
                        <canvas id="myCanvas" width="150px" height="200px"></canvas>
                    </div>
                    <div class="row" style="margin-top: -5px;">
                        <div class="col-6">
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFE4E2;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">ออนไลน์</span><span style="padding-left: 15px;"><?php echo $onlineUsersCount; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #D7D7D7;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">วันนี้</span><span style="padding-left: 38px;"><?php echo $onlineUsersDay; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFE1BA;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">สัปดาห์นี้</span> <span style="padding-left: 5px;">
                                    <?php if (!empty($onlineUsersWeek)) : ?>
                                        <?php echo $onlineUsersWeek[0]->user_count; ?>
                                    <?php else : ?>
                                        0
                                    <?php endif; ?>
                                    &nbsp;&nbsp;&nbsp;คน
                                </span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFE98E;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">เดือนนี้</span> <span style="padding-left: 15px;"><?php echo $onlineUsersMonth; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFBE5C;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">ปีนี้</span> <span style="padding-left: 37px;"><?php echo $onlineUsersYear; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                            <div class="card-view" style="margin-left: 10px;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #D6AE8B;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">ทั้งหมด</span> <span style="padding-left: 10px;"><?php echo $onlineUsersAll; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-like ">
                <div class="head-like text-center ">
                    <span class="font-like">แบบสอบถามความพึงพอใจ</span>
                </div>
                <div class="content-like">
                    <div class="row">
                        <div class="col-6" style="margin-top: -25px;">
                            <form action="<?php echo site_url('home/addLike'); ?>" id="reCAPTCHA3" method="post">
                                <div class="form-check">
                                    <input class="form-check-input border-like" type="radio" value="ดีมาก" id="flexCheckDefault1" name="like_name" onclick="toggleCheckbox('flexCheckDefault1')" />
                                    <label class="form-check-label font-like-label" for="ดีมาก">ดีมาก</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input border-like" type="radio" value="ดี" id="flexCheckDefault2" name="like_name" onclick="toggleCheckbox('flexCheckDefault2')" />
                                    <label class="form-check-label font-like-label" for="ดี">ดี</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input border-like" type="radio" value="พอใช้" id="flexCheckDefault3" name="like_name" onclick="toggleCheckbox('flexCheckDefault3')" />
                                    <label class="form-check-label font-like-label" for="ปานกลาง">ปานกลาง</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input border-like" type="radio" value="พอใช้" id="flexCheckDefault4" name="like_name" onclick="toggleCheckbox('flexCheckDefault4')" />
                                    <label class="form-check-label font-like-label" for="พอใช้">พอใช้</label>
                                </div>
                                <button style="display: none;" type="button" class="btn"><img src="docs/s.btn-sent.png"></button>
                                <div id="submitSection">
                                    <!-- <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableSubmit"></div> -->
                                    <div class="form-group row mt-3">
                                        <div class="col-3">
                                        </div>
                                        <div class="col-9">
                                            <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" class="btn g-recaptcha"><img src="docs/s.btn-sent.png"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6" style="margin-left: -10%; margin-top: -25px;">
                            <div class="content-like-detail" style="display: none;">
                                <div style="display: flex; align-items: center;">
                                    <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $countExcellent; ?>%;" aria-valuenow="<?= $countExcellent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span style="font-size: 20px;">&nbsp;<?= $countExcellent; ?></span>
                                </div>
                                <div class="mt-3" style="display: flex; align-items: center;">
                                    <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $countGood; ?>%;" aria-valuenow="<?= $countGood; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span style="font-size: 20px;">&nbsp;<?= $countGood; ?></span>
                                </div>
                                <div class="mt-3" style="display: flex; align-items: center;">
                                    <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $countAverage; ?>%;" aria-valuenow="<?= $countAverage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span style="font-size: 20px;">&nbsp;<?= $countAverage; ?></span>
                                </div>
                                <div class="mt-3" style="display: flex; align-items: center;">
                                    <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $countOkay; ?>%;" aria-valuenow="<?= $countOkay; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span style="font-size: 20px;">&nbsp;<?= $countOkay; ?></span>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: -55px; margin-left: 170px;">
                            <a class="btn" onclick="showContentLikeDetail()"><img src="docs/s.btn-score.png"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-q-a ">
                <div class="head-q-a text-center">
                    <span class="font-q-a-home-head">กระดานสนทนาถาม-ตอบ</span>
                </div>
                <div class="content-q-a">
                    <form id="reCAPTCHA3" action=" <?php echo site_url('Pages/add_q_a'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-12 control-label font-q-a-home-form">หัวข้อคำถาม</div>
                            <div class="col-12">
                                <input type="text" name="q_a_msg" class="form-control input-home-q-a" required placeholder="กรอกคำถาม...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="col-2 control-label font-q-a-home-form">ชื่อ</div>
                                    <div class="col-12">
                                        <input type="text" name="q_a_by" class="form-control input-home-q-a" required placeholder="กรอกชื่อผู้ตั้งกระทู้">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="col-2 control-label font-q-a-home-form">อีเมล</div>
                                    <div class="col-12">
                                        <input type="email" name="q_a_email" class="form-control input-home-q-a" required placeholder="example@youremail.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label font-q-a-home-form">รายละเอียด</label>
                            <div class="col-12">
                                <textarea name="q_a_detail" class="form-control input-home-q-a" id="exampleFormControlTextarea1" rows="6" placeholder="กรอกรายละเอียดเพิ่มเติม..."></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <!-- <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableLoginButton"></div> -->
                            <!-- <div class="g-recaptcha" style="display: none;" data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" data-callback="onSubmit"></div> -->
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <!-- <button type="submit" id="loginBtn" class="btn" disabled><img src="<?php echo base_url("docs/s.btn-sent.png"); ?>"></button> -->
                            <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" id="loginBtn" class="btn g-recaptcha"><img src="<?php echo base_url("docs/s.btn-sent.png"); ?>"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 70px;">
        <div class="col-5" style="margin-left: 150px;">

        </div>
        <div class="col-5">

        </div>
    </div>

    <div class="bg-links">
        <div class="text-center">
            <img src="docs/s.head-links.png">
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="https://www.roiet.go.th/101province/" target="_blank"><img src="docs/s.link-link1.png"></a></div>
                <div class="swiper-slide"><a href="https://www.pao-roiet.go.th/" target="_blank"><img src="docs/s.link-link2.png"></a></div>
                <div class="swiper-slide"><a href="http://www.sasuk101.moph.go.th/" target="_blank"><img src="docs/s.link-link3.png"></a></div>
                <div class="swiper-slide"><a href="https://www.cgd.go.th/cs/internet/internet/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%812.html?page_locale=th_TH" target="_blank"><img src="docs/s.link-link4.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/" target="_blank"><img src="docs/s.link-link5.png"></a></div>
                <div class="swiper-slide"><a href="https://www.doe.go.th/" target="_blank"><img src="docs/s.link-link6.png"></a></div>
                <div class="swiper-slide"><a href="https://www.nhso.go.th/" target="_blank"><img src="docs/s.link-link7.png"></a></div>
                <div class="swiper-slide"><a href="https://www.roiet.go.th/dumrong/" target="_blank"><img src="docs/s.link-link8v2.png"></a></div>
                <div class="swiper-slide"><a href="https://www.admincourt.go.th/admincourt/site/09illustration.html" target="_blank"><img src="docs/s.link-link9.png"></a></div>
                <div class="swiper-slide"><a href="https://www.dla.go.th/index.jsp" target="_blank"><img src="docs/s.link-link10.png"></a></div>
                <div class="swiper-slide"><a href="https://info.go.th/" target="_blank"><img src="docs/s.link-link11.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/about-us/%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%9B%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81/%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%94%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%8A%E0%B8%A7%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B9%89/" target="_blank"><img src="docs/s.link-link12.png"></a></div>
                <div class="swiper-slide"><a href="n" target="_blank"><img src="docs/s.link-link13.png"></a></div>
                <div class="swiper-slide"><a href="https://www.oic.go.th/web2017/km/index.html" target="_blank"><img src="docs/s.link-link15.png"></a></div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
            <div class="custom-button-prev">
                <img src="docs/s.previous-travel.png" alt="Prev">
            </div>
            <div class="custom-button-next">
                <img src="docs/s.next-travel.png" alt="Next">
            </div>
        </div>
    </div>
</div>