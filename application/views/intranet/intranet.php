<div class="crop">

    <div class="row">
        <div class="col-3 border-navbar">
            <a href="#" class="font-nav" data-target="navbar1">
                <div class="navbars-active" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon1.png"); ?>">&nbsp;&nbsp;ข่าวภายในองค์กร
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar2">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon2.png"); ?>">&nbsp;&nbsp;แบบฟอร์ม
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar3">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon3.png"); ?>">&nbsp;&nbsp;คำสั่ง / ประกาศ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar4">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon4.png"); ?>">&nbsp;&nbsp;ระเบียบ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar5">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon5.png"); ?>">&nbsp;&nbsp;ระบบแชร์ไฟล์
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar6">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon6.png"); ?>">&nbsp;&nbsp;คลังรูปภาพ / วิดีโอ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar7">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon7.png"); ?>">&nbsp;&nbsp;E-Book
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar8">
                <div class="navbars">
                    <img src="<?php echo base_url("docs/intranet/intra-icon89.png"); ?>">&nbsp;&nbsp;รายงาน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;งบประมาณและโครงการ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar9">
                <div class="navbars">
                    <img src="<?php echo base_url("docs/intranet/intra-icon89.png"); ?>">&nbsp;&nbsp;รายงาน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แจ้งเรื่องร้องเรียน
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="#" class="font-nav" data-target="navbar10">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon10.png"); ?>">&nbsp;&nbsp;เทคโนโลยี / สารสนเทศ
                </div>
            </a>
            <div class="border-nav"></div>
        </div>
        <div class="col-9">
            <div id="navbar1" class="content active">
                <div class="font-head-top1"><span>ข่าวภายในองค์กร</span></div>
                <div class="divcontent">
                    <div class="d-flex justify-content-end">
                        <a class="underline insert-vulgar-btn" data-target="#popupInsert">
                            <div class="btn-add">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg> เพิ่มข้อมูล
                            </div>
                        </a>
                    </div>
                    <div id="popupInsert" class="popup">
                        <div class="popup-content">
                            <h4>เพิ่มข้อมูลข่าวภายในองค์กร</h4>
                            <form action="<?php echo site_url('vulgar_backend/add'); ?> " method="post" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">ข้อความ</div>
                                    <div class="col-sm-5">
                                        <input type="text" name="vulgar_com" required class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-2 control-label"></div>
                                    <div class="col-sm-5">
                                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                                        <a class="close-button btn btn-danger" data-target="#popupInsert" role="button">ยกเลิก</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="navbar2" class="content">
                <div class="font-head-top2"><span>แบบฟอร์ม</span></div>
                <div class="divcontent">test</div>
            </div>
            <div id="navbar3" class="content">
                <div class="font-head-top3"><span>คำสั่ง / ประกาศ</span></div>
                <div class="divcontent">test</div>
            </div>
            <div id="navbar4" class="content">
                <div class="font-head-top4"><span>ระเบียบ</span></div>
                <div class="divcontent">test</div>
            </div>
            <div id="navbar5" class="content">
                <div class="font-head-top5"><span>ระบบแชร์ไฟล์</span></div>
                <div class="divcontent">test</div>
            </div>
            <div id="navbar6" class="content">
                <div class="font-head-top6"><span>คลังรูปภาพ / วิดีโอ</span></div>
                <div class="divcontent">test</div>
            </div>
            <div id="navbar7" class="content">
                <div class="font-head-top7"><span>E-Book</span></div>
                <div class="divcontent">test</div>
            </div>
            <div id="navbar8" class="content">
                <div class="font-head-top8"><span>รายงานงบประมาณและโครงการ</span></div>
                <div class="divcontent">test</div>
            </div>
            <div id="navbar9" class="content">
                <div class="font-head-top9"><span>รายงานแจ้งเรื่องร้องเรียน</span></div>
                <div class="divcontent">test</div>
            </div>
            <div id="navbar10" class="content">
                <div class="font-head-top10"><span>เทคโนโลยี / สารสนเทศ</span></div>
                <div class="divcontent">test</div>
            </div>
        </div>
    </div>

</div>

<!-- <div class="d-flex justify-content-end">
                        <a class="underline insert-vulgar-btn" data-target="#popupInsert">
                            <div class="btn-add">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg> เพิ่มข้อมูล
                            </div>
                        </a>
                    </div>
                    <div id="popupInsert" class="popup">
                        <div class="popup-content">
                            <h4>เพิ่มข้อมูลข่าวภายในองค์กร</h4>
                            <form action="<?php echo site_url('vulgar_backend/add'); ?> " method="post" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">ข้อความ</div>
                                    <div class="col-sm-5">
                                        <input type="text" name="vulgar_com" required class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-2 control-label"></div>
                                    <div class="col-sm-5">
                                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                                        <a class="close-button btn btn-danger" data-target="#popupInsert" role="button">ยกเลิก</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->