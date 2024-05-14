<style>
    #navbar2 {
        /* background-image: url('<?php echo base_url("docs/header_announce.png"); ?>'); */
        background: linear-gradient(180deg, #6D2F48 0%, #7F3E55 39.39%, #CC818D 100%);
        background-repeat: no-repeat;
        background-size: 100%;
        height: 80px;
        width: 1920px;
        margin-left: 50%;
        transform: translateX(-50%);
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        transition: top 0.3s ease-in-out;
    }

    #navbar2:hover {
        top: 0;
    }

    body:not(:hover) #navbar2 {
        top: -164px;
    }

    @media screen and (max-width: 1200px) {
        #navbar2 {
            display: none;
        }
    }

    .search {
        width: 250px;
        position: absolute;
        top: -10%;
        left: 77%;
    }

    .gsc-search-button-v2 {
        /* background-color: #007bff; */
        /* ปรับสีพื้นหลังของปุ่มค้นหาเป็นสีฟ้า */
        color: #ffffff;
        /* ปรับสีของข้อความในปุ่มเป็นสีขาว */
        padding: 5px 10px;
        /* ปรับการเรียงขนาดของปุ่ม */
        border-radius: 5px;
        /* ปรับรูปร่างของปุ่มเป็นรูปแบบวงกลม */
        border: none;
        /* ลบเส้นขอบของปุ่ม */
    }

    .gsc-search-button-v2 svg {
        fill: #523003;
        /* ปรับสีของไอคอนเป็นสีขาว */
        width: 20px;
        /* ปรับขนาดของไอคอนเป็น 15px */
        height: 20px;
        /* ปรับขนาดของไอคอนเป็น 15px */
    }

    .gsc-control-cse {
        background-color: transparent;
        border: none;
    }

    .gsc-search-button-v2:hover {
        /* background-color: #0056b3; */
        /* color: ; */
        /* ปรับสีของปุ่มเมื่อเม้าส์ hover */
    }

    /* ซ่อนข้อความ "เพิ่มประสิทธิภาพโดย Google" */
    .gsc-input-box .gsc-input {
        color: transparent;
    }

    /* เพิ่ม placeholder แทนข้อความ "เพิ่มประสิทธิภาพโดย Google" */
    .gsc-input-box::before {
        content: 'ค้นหา';
        color: #000;
        /* เปลี่ยนสีข้อความ placeholder ตามต้องการ */
        position: absolute;
        top: 12px;
        /* ปรับตำแหน่งตามต้องการ */
        left: 10px;
        /* ปรับตำแหน่งตามต้องการ */
        z-index: -1;
        /* สร้างข้อความ placeholder ให้อยู่ต่ำกว่า input */
    }


    .gsc-control {
        font-family: arial, sans-serif;
        background-color: lightblue !important;
        width: 500px;
        border-radius: 3rem;
        padding: 7px 20px !important;
    }

    .gsc-input {
        padding: 0px !important;
    }

    .gsc-input-box {
        border: 1px solid #dfe1e5;
        background: #fff;
        border-radius: 2rem;
        padding: 1px 10px;
        position: relative;
    }

    #gsc-i-id1 {
        color: #000 !important;
        line-height: 1.2 !important;
        background: none !important;
        font-size: 1rem !important;
    }

    .gsc-search-button-v2 {
        padding: 0.5rem !important;
        cursor: pointer;
        border-radius: 50%;
        position: absolute;
        margin-left: -33px;
        margin-top: -18px;
    }
</style>
<nav class="navbar navbar2 navbar-expand-lg navbar-dark navbar-center sticky-top" id="navbar2">
    <!-- <div class="collapse navbar-collapse d-flex justify-content-center"> -->
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav" style="padding-top: 10px;">
            <li class="nav-item">
                <a class="nav-link mx-3 nav-text-color-2" aria-current="page" href="<?php echo site_url('Home'); ?>">
                    <span class="">หน้าหลัก</span>
                </a>
            </li>
                    
            <span class="dropdown-trigger nav-link mx-3 nav-text-color-2">ข้อมูลทั่วไป</span>
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
                    
            <span class="dropdown-trigger nav-link mx-3 nav-text-color-2">โครงสร้าง</span>
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
                    
            <span class="dropdown-trigger nav-link mx-3 nav-text-color-2">บริการ</span>
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
                    
            <span class="dropdown-trigger nav-link mx-3 nav-text-color-2">แผนงาน</span>
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
                    
            <span class="dropdown-trigger nav-link mx-3 nav-text-color-2">การดำเนินงาน</span>
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
                    
            <span class="dropdown-trigger nav-link mx-3 nav-text-color-2">มาตรการภายใน</span>
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

            <li class="nav-item">
                <a class="nav-link mx-3 nav-text-color-2" aria-current="page"
                    href="<?php echo site_url('Pages/all_web'); ?>">
                    <span class="">ผังเว็บไซต์</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-3 nav-text-color-2" aria-current="page"
                    href="<?php echo site_url('Home/login'); ?>">
                    <span class="">เข้าสู่ระบบ</span>
                </a>
            </li>

        </ul>
    </div>
</nav>


<script>
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (window.innerWidth > 1200) { // ตรวจสอบว่าขนาดหน้าจอไม่ใช่ขนาดมือถือและเล็กว่า 1200px
            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                document.getElementById("navbar2").style.display = "block";
            } else {
                document.getElementById("navbar2").style.display = "none";
            }
        }
    }

    // เปลี่ยนคำเป็นคำว่า ค้นหา
    window.onload = function () {
        var placeHolderText = "ค้นหา";
        var searchBox = document.querySelector("#gsc-i-id1");
        var searchButton = document.querySelector(".gsc-search-button-v2 svg title");
        searchBox.placeholder = placeHolderText;
        searchBox.title = placeHolderText;
        searchButton.innerHTHL = placeHolderText;
    }

    // ค้นหาซ่อน / แสดงผล
    function toggleSearch() {
        var searchContainer = document.getElementById('searchContainer');
        var searchImage = document.getElementById('searchImage');

        if (searchContainer.style.display === 'none') {
            searchContainer.style.display = 'block'; // แสดง div
            searchImage.style.display = 'none'; // ซ่อนรูป
        } else {
            searchContainer.style.display = 'none'; // ซ่อน div
            searchImage.style.display = 'block'; // แสดงรูป
        }
    }

    function changeImage(imageUrl) {
        document.getElementById('searchImage').src = imageUrl;
    }

    function restoreImage(imageUrl) {
        document.getElementById('searchImage').src = imageUrl;
    }
</script>

<div style="position: relative; width: 1280px; ">
    <img src="<?php echo base_url("docs/s.navbar-top5.png"); ?>">
    <a href="<?php echo site_url('Home'); ?>"
        onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-top1-hover.png'); ?>`)"
        onmouseout="restoreImage(`<?php echo base_url('docs/item-nav-top1.png'); ?>`)">
        <img src="<?php echo base_url("docs/item-nav-top1.png"); ?>" alt=""
            style="position: absolute; top: 10%; left: 58%;">
    </a>
    <a href="<?php echo site_url('Pages/all_web'); ?>"
        onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-top2-hover.png'); ?>`)"
        onmouseout="restoreImage(`<?php echo base_url('docs/item-nav-top2.png'); ?>`)">
        <img src="<?php echo base_url("docs/item-nav-top2.png"); ?>" alt=""
            style="position: absolute; top: 10%; left: 70%;">
    </a>
    <a href="<?php echo site_url('Home/login'); ?>"
        onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-top3-hover.png'); ?>`)"
        onmouseout="restoreImage(`<?php echo base_url('docs/item-nav-top3.png'); ?>`)">
        <img src="<?php echo base_url("docs/item-nav-top3.png"); ?>" alt=""
            style="position: absolute; top: 10%; left: 84%;">
    </a>
    <div class="search">
        <a href="#" id="searchShow" onclick="toggleSearch()">
            <img id="searchImage" src="<?php echo base_url("docs/search.png"); ?>"
                style="position: absolute; top: 10%; left: 84%;"
                onmouseover="changeImage('<?php echo base_url('docs/search-hover.png'); ?>')"
                onmouseout="restoreImage('<?php echo base_url('docs/search.png'); ?>')">
        </a>
        <div id="searchContainer" style="display: none;">
            <div class="gcse-search"></div>
        </div>
    </div>
</div>


<?php
// ฟังก์ชัน setThaiMonth อยู่นอก foreach loop
function setThaiMonth($dateString)
{
    $thaiMonths = [
        'January' => 'มกราคม',
        'February' => 'กุมภาพันธ์',
        'March' => 'มีนาคม',
        'April' => 'เมษายน',
        'May' => 'พฤษภาคม',
        'June' => 'มิถุนายน',
        'July' => 'กรกฎาคม',
        'August' => 'สิงหาคม',
        'September' => 'กันยายน',
        'October' => 'ตุลาคม',
        'November' => 'พฤศจิกายน',
        'December' => 'ธันวาคม',
    ];

    foreach ($thaiMonths as $english => $thai) {
        $dateString = str_replace($english, $thai, $dateString);
    }

    return $dateString;
}

function setThaiMonthAbbreviation($dateString)
{
    $thaiMonths = [
        'January' => 'ม.ค.',
        'February' => 'ก.พ.',
        'March' => 'มี.ค.',
        'April' => 'เม.ย.',
        'May' => 'พ.ค.',
        'June' => 'มิ.ย.',
        'July' => 'ก.ค.',
        'August' => 'ส.ค.',
        'September' => 'ก.ย.',
        'October' => 'ต.ค.',
        'November' => 'พ.ย.',
        'December' => 'ธ.ค.',
    ];

    foreach ($thaiMonths as $english => $thai) {
        $dateString = str_replace($english, $thai, $dateString);
    }

    return $dateString;
}
?>