<div class="text-center font-head-top">
    <span><?= $rsedit->intra_gallery_name; ?></span>
</div>
</div>

<div class="crop">

    <div class="main-container">
        <div class="main-sidebar">
            <a href="<?php echo site_url('System_intranet'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon1.png"); ?>">&nbsp;&nbsp;ข่าวภายในองค์กร
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_form'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon2.png"); ?>">&nbsp;&nbsp;แบบฟอร์ม
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_announce'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon3.png"); ?>">&nbsp;&nbsp;คำสั่ง / ประกาศ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_discipline'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon4.png"); ?>">&nbsp;&nbsp;ระเบียบ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_share_file'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon5.png"); ?>">&nbsp;&nbsp;ระบบแชร์ไฟล์
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_gallery'); ?>" class="font-nav">
                <div class="navbars-active" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon6.png"); ?>">&nbsp;&nbsp;คลังรูปภาพ / วิดีโอ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_e_book'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon7.png"); ?>">&nbsp;&nbsp;E-Book
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_egp'); ?>" class="font-nav">
                <div class="navbars">
                    <img src="<?php echo base_url("docs/intranet/intra-icon89.png"); ?>">&nbsp;&nbsp;รายงาน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;งบประมาณและโครงการ
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_report'); ?>" class="font-nav">
                <div class="navbars">
                    <img src="<?php echo base_url("docs/intranet/intra-icon89.png"); ?>">&nbsp;&nbsp;รายงาน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แจ้งเรื่องร้องเรียน
                </div>
            </a>
            <div class="border-nav"></div>
            <a href="<?php echo site_url('Intra_it'); ?>" class="font-nav">
                <div class="navbars" style="padding-top: 27px;">
                    <img src="<?php echo base_url("docs/intranet/intra-icon10.png"); ?>">&nbsp;&nbsp;เทคโนโลยี / สารสนเทศ
                </div>
            </a>
            <div class="border-nav"></div>
        </div>
        <div class="main-content">
            <div class="divcontent">
                <div class="row">
                    <div class="col-6 mt-5">
                    </div>
                    <div class="col-6 mt-5">
                        <div class="d-flex justify-content-end">
                            <a href="#" class="insert-vulgar-btn underline" data-target="#popupInsert">
                                <div class="btn-add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg> เพิ่มรูปภาพ / วิดีโอ
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <?php
                    // Combine image and video data
                    $combinedData = array_merge($rsimg, $rsvideo);

                    $count = count($combinedData);
                    $itemsPerPage = 24; // จำนวนรายการต่อหน้า
                    $totalPages = ceil($count / $itemsPerPage);

                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                    $startIndex = ($currentPage - 1) * $itemsPerPage;
                    $endIndex = min($startIndex + $itemsPerPage - 1, $count - 1);

                    for ($i = $startIndex; $i <= $endIndex; $i++) {
                        $currentItem = $combinedData[$i];
                    ?>

                        <!-- Your HTML code for displaying the item -->
                        <div class="col-sm-3" style="height: 260px; width: 146px; ">
                            <?php if (isset($currentItem->intra_gallery_img_id)) : ?>
                                <!-- Display image -->
                                <a href="<?= base_url('docs/intranet/img/' . $currentItem->intra_gallery_img_img); ?>" data-lightbox="image-1">
                                    <img src="<?= base_url('docs/intranet/img/' . $currentItem->intra_gallery_img_img); ?>" width="100%" height="146">
                                </a>
                                <br>
                                <div class="row mt-3">
                                    <div class="col-8">
                                        <?= $currentItem->intra_gallery_img_img; ?>
                                    </div>
                                    <div class="col-4">
                                        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_fname'] == $currentItem->intra_gallery_img_by) : ?>
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn-danger btn-sm" href="#" role="button" onclick="confirmDeleteImg(<?= $currentItem->intra_gallery_img_id; ?>, '<?= $currentItem->intra_gallery_img_img; ?>');">
                                                    <i class="bi bi-trash fa-lg"></i>ลบ
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <script>
                                            function confirmDeleteImg(file_id, file_name) {
                                                Swal.fire({
                                                    title: 'คุณแน่ใจหรือไม่?',
                                                    text: 'คุณต้องการลบไฟล์ ' + file_name + ' ใช่หรือไม่?',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'ใช่, ต้องการลบ!',
                                                    cancelButtonText: 'ยกเลิก'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // หลังจากคลิกยืนยันให้เรียก Controller ที่ใช้ในการลบไฟล์ PDF
                                                        window.location.href = "<?= site_url('Intra_gallery/del_img/'); ?>" + file_id;
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                </div>
                            <?php elseif (isset($currentItem->intra_gallery_video_id)) : ?>
                                <!-- Display video -->
                                <video width="100%" height="146" controls>
                                    <source src="<?= base_url('docs/intranet/video/' . $currentItem->intra_gallery_video_video); ?>" type="video/mp4">
                                </video>
                                <br>
                                <div class="row mt-3">
                                    <div class="col-8">
                                        <?= $currentItem->intra_gallery_video_video; ?>
                                    </div>
                                    <div class="col-4">
                                        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_fname'] == $currentItem->intra_gallery_video_by) : ?>
                                            <div class="d-flex justify-content-end ">
                                                <a class="btn btn-danger btn-sm" href="#" role="button" onclick="confirmDeleteVideo(<?= $currentItem->intra_gallery_video_id; ?>, '<?= $currentItem->intra_gallery_video_video; ?>');">
                                                    <i class="bi bi-trash fa-lg"></i>ลบ
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <script>
                                            function confirmDeleteVideo(file_id, file_name) {
                                                Swal.fire({
                                                    title: 'คุณแน่ใจหรือไม่?',
                                                    text: 'คุณต้องการลบไฟล์ ' + file_name + ' ใช่หรือไม่?',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'ใช่, ต้องการลบ!',
                                                    cancelButtonText: 'ยกเลิก'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // หลังจากคลิกยืนยันให้เรียก Controller ที่ใช้ในการลบไฟล์ PDF
                                                        window.location.href = "<?= site_url('Intra_gallery/del_video/'); ?>" + file_id;
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                </div>

                <div id="popupInsert" class="popup">
                    <div class="popup-content">
                        <h4 class="black"><b>เพิ่มรูปภาพ</b></h4>
                        <form action="<?php echo site_url('Intra_gallery/add_img/' . $rsedit->intra_gallery_id); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <br>
                            <div class="form-group row container">
                                <div class="col-sm-3 control-label font-18">รูปภาพ (เพิ่มได้หลายรูป)</div>
                                <div class="col-sm-6">
                                    <input type="file" name="intra_gallery_img_img[]" class="form-control" accept="image/*" multiple>
                                    <span class="red">เฉพาะไฟล์ .jpg, .jpeg, .png</span>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row container">
                                <div class="col-sm-3 control-label font-18">วิดีโอ (เพิ่มได้หลายวิดีโอ)</div>
                                <div class="col-sm-6">
                                    <input type="file" name="intra_gallery_video_video[]" class="form-control" accept="video/*" multiple>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row container">
                                <div class="col-sm-1 control-label"></div>
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                                    <a class="close-button btn btn-danger" data-target="#popupInsert" role="button">ยกเลิก</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- จัดการหน้า -->
                <div class="pagination-container d-flex justify-content-end">
                    <div class="pagination-pages">
                        <ul class="pagination">
                            <!-- ปุ่ม "กลับไปหน้าแรก" -->
                            <?php if ($currentPage > 1) : ?>
                                <li class="page-item pagination-item">
                                    <a class="" href="?page=1" aria-label="First">
                                        <img src="<?php echo base_url('docs/s.pages-first.png'); ?>" class="pages-first">
                                        <span aria-hidden="true"></span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <!-- ปุ่ม Previous -->
                            <?php if ($currentPage > 1) : ?>
                                <li class="page-item" style="width: 55px;">
                                    <a class="" href="?page=<?php echo $currentPage - 1; ?>" aria-label="Previous">
                                        <img src="<?php echo base_url('docs/s.pages-pre.png'); ?>" alt="Previous" class="pages-pre">
                                        <span aria-hidden="true"></span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <!-- แสดงปุ่ม "กลับไปหน้าแรก" ถ้าหน้าปัจจุบันไม่ได้ต่อเนื่องจากหน้าแรก -->
                            <?php
                            $numToShow = 3; // จำนวนปุ่มที่ต้องการแสดง
                            $half = floor($numToShow / 2);

                            // ปุ่มหน้าเริ่มต้น
                            $startPage = max($currentPage - $half, 1);

                            // ปุ่มหน้าสุดท้าย
                            $endPage = min($startPage + $numToShow - 1, $totalPages);

                            // แสดงปุ่ม "กลับไปหน้าแรก" ถ้าหน้าปัจจุบันไม่ได้ต่อเนื่องจากหน้าแรก
                            if ($startPage > 1) {
                            ?>
                                <li class="page-item pagination-item" style="margin-left: -8px;">
                                    <a class="page-link" href="?page=1">1</a>
                                </li>
                                <?php if ($startPage > 2) : ?>
                                    <li class="page-item pagination-item">
                                        <a class="page-link" href="?page=2">2</a>
                                    </li>
                                    <li class="page-item pagination-item disabled">
                                        <span class="page-link">...</span>
                                    </li>
                                <?php endif; ?>
                            <?php
                            }

                            // แสดงปุ่มหน้า
                            for ($i = $startPage; $i <= $endPage; $i++) {
                            ?>
                                <li class="page-item pagination-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php
                            }

                            // แสดงปุ่ม "..." ถ้าหน้าไม่ได้ต่อเนื่อง และรองสุดท้าย
                            if ($endPage < $totalPages - 1) {
                            ?>
                                <li class="page-item pagination-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                                <li class="page-item pagination-item">
                                    <a class="page-link" href="?page=<?php echo $totalPages - 1; ?>"><?php echo $totalPages - 1; ?></a>
                                </li>
                            <?php
                            }

                            // แสดงปุ่มสุดท้าย
                            if ($endPage < $totalPages) {
                            ?>
                                <li class="page-item pagination-item <?php echo ($totalPages == $currentPage) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $totalPages; ?>"><?php echo $totalPages; ?></a>
                                </li>
                            <?php
                            }
                            ?>
                            <!-- ปุ่ม Next -->
                            <?php if ($currentPage < $totalPages) : ?>
                                <li class="page-item" style="width: 55px;">
                                    <a class="" href="?page=<?php echo $currentPage + 1; ?>" aria-label="Next">
                                        <img src="<?php echo base_url('docs/s.pages-next.png'); ?>" alt="Next" class="pages-next">
                                        <span aria-hidden="true"></span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <!-- ปุ่ม "ไปหน้าสุดท้าย" -->
                            <?php if ($currentPage < $totalPages) : ?>
                                <li class="page-item pagination-item" style="margin-left: -10px;">
                                    <a class="" href="?page=<?php echo $totalPages; ?>" aria-label="Last">
                                        <img src="<?php echo base_url('docs/s.pages-last.png'); ?>" alt="Last" class="pages-last">
                                        <span aria-hidden="true"></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- ฟอร์มกรอกหมายเลขหน้า -->
                <div class="pagination-jump-to-page d-flex justify-content-end">
                    <form action="" method="GET" class="d-flex">
                        <label style="font-size: 24px;">ไปหน้าที่&nbsp;&nbsp;</label>
                        <input type="number" name="page" min="1" max="<?php echo $totalPages; ?>" value="<?php echo $currentPage; ?>" class="form-control" style="width: 60px; margin-right: 10px;">
                        <input type="image" src="<?php echo base_url('docs/s.pages-go.png'); ?>" alt="Go" class="pages-go" style="width: 40px; height: 40px;">
                    </form>
                </div>
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