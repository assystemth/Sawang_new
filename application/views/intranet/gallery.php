<div class="text-center font-head-top">
    <span>คลังรูปภาพ / วิดีโอ</span>
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
                <div class="flex-item-right-share-file">
                    <div class="mt-4" style="width: 50%;">
                        <!-- Dropdown Card Example -->
                        <div class="card shadow mb-4" style="border-radius: 20px;">
                            <!-- Card Header - Dropdown -->
                            <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                                <h5 class="m-0 font-weight-bold text-black ml-4">พื้นที่ให้บริการ</h5>
                                <!-- <a class="open-button btn btn-sky btn-sm mr-3" id="myBtn">
                        Upgrade</a> -->
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" style="margin-top: -45px;">
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <?php foreach ($storage as $server) : ?>
                                            <?php
                                            $serverStorage = $server->server_storage;
                                            $serverCurrent = $server->server_current;
                                            $percentage = ($serverCurrent / $serverStorage) * 100;
                                            $color = 'green'; // เริ่มต้นเป็นสีเขียว (1-69%)
                                            if ($percentage >= 70 && $percentage <= 89) {
                                                $color = 'orange'; // 70-89% ให้เปลี่ยนเป็นสีส้ม
                                            } elseif ($percentage >= 90) {
                                                $color = 'red'; // 90% ขึ้นไป ให้เปลี่ยนเป็นสีแดง
                                            }
                                            ?>

                                    </div>
                                </div>
                                <h5 style="margin-top:20px;">
                                    <!-- <?php
                                            ?>
                        <?php echo number_format($percentage, 2); ?>% -->
                                </h5>
                                <div class="progress progress-sm mr-6">
                                    <div class="progress-bar" role="progressbar" style="background-color: <?php echo $color; ?>; width: <?php echo $percentage; ?>%" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!-- color: <?php echo $color; ?>; -->
                                <div class="mt-3 row">
                                    <div class="col-sm-4">
                                        <div class="d-flex justify-content-start">
                                            <span style="font-size: 13px; color: #888;">Used space: <?php echo number_format($serverCurrent, 2); ?> GB</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="d-flex justify-content-center">
                                            <span style="font-size: 13px; color: #888;">Free space: <?php echo number_format($serverStorage - $serverCurrent, 2); ?> GB</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="d-flex justify-content-end">
                                            <span style="font-size: 13px; color: #888;">Capacity: <?php echo number_format($serverStorage, 2); ?> GB</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-9 mt-2">
                            <div class="d-flex justify-content-end">
                                <div class="search">
                                    <form id="searchForm" action="<?= site_url('Intra_gallery/search'); ?>" method="post">
                                        <div class="input-group">
                                            <input type="text" name="search_term" class="searchTerm form-control" placeholder="ค้นหา">
                                            <div class="input-group-append">
                                                <button type="submit" class="searchButton btn btn-outline">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="d-flex justify-content-end">
                                <a href="#" class="insert-vulgar-btn underline" data-target="#popupInsert">
                                    <div class="btn-add">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                        </svg> เพิ่มคลังรูปภาพ / วิดีโอ
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="popupInsert" class="popup">
                        <div class="popup-content">
                            <h4 class="black"><b>เพิ่มคลังรูปภาพ</b></h4>
                            <form action="<?php echo site_url('Intra_gallery/add'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <br>
                                <div class="form-group row container">
                                    <div class="col-sm-3 control-label font-18">ชื่อคลังรูปภาพ</div>
                                    <div class="col-sm-7">
                                        <input type="text" name="intra_gallery_name" required class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row container">
                                    <div class="col-sm-3 control-label font-18">รูปภาพ (เพิ่มได้หลายรูป)</div>
                                    <div class="col-sm-4">
                                        <input type="file" name="intra_gallery_img_img[]" class="form-control" accept="image/*" multiple>
                                        <span class="red">เฉพาะไฟล์ .jpg, .jpeg, .png</span>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row container">
                                    <div class="col-sm-3 control-label font-18">วิดีโอ (เพิ่มได้หลายวิดีโอ)</div>
                                    <div class="col-sm-4">
                                        <input type="file" name="intra_gallery_video_video[]" class="form-control" accept="video/*" multiple>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row container">
                                    <div class="col-sm-3 control-label"></div>
                                    <div class="col-sm-5">
                                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                                        <a class="btn btn-danger" href="<?= site_url('Intra_gallery'); ?>" role="button">ยกเลิก</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <span>ชื่อ</span><br>
                        </div>
                        <div class="col-sm-1 text-center">
                        </div>
                        <div class="col-sm-2 text-center">
                            <span>วันที่</span>
                        </div>
                        <div class="col-sm-2 text-center" style="margin-left: -10px;">
                            <span>ผู้อัพโหลด</span><br>
                        </div>
                        <div class="col-sm-1 text-center" style="margin-left: -7px;">
                            ลบ
                        </div>
                        <div class="col-sm-1 text-center">
                            ดาวน์โหลด
                        </div>
                    </div>
                    <?php
                    $count = count($query);
                    $itemsPerPage = 20; // จำนวนรายการต่อหน้า
                    $totalPages = ceil($count / $itemsPerPage);

                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                    $startIndex = ($currentPage - 1) * $itemsPerPage;
                    $endIndex = min($startIndex + $itemsPerPage - 1, $count - 1);

                    for ($i = $startIndex; $i <= $endIndex; $i++) {
                        $rs = $query[$i];
                    ?>
                        <div class="file-pdf">
                            <div class="row">
                                <div class="col-sm-1">
                                    <a class="underline" href="<?= site_url('Intra_gallery/detail/' . $rs->intra_gallery_id); ?>">
                                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="50px">
                                    </a>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mt-1"></div>
                                    <a class="underline" href="<?= site_url('Intra_gallery/detail/' . $rs->intra_gallery_id); ?>">
                                        <span class="black font-20 limit-font-one"><?= $rs->intra_gallery_name; ?></span>
                                    </a>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <div class="mt-1"></div>
                                    <span class="font-18">
                                        <?php
                                        // ในการใช้งาน setThaiMonth
                                        $date = new DateTime($rs->intra_gallery_datesave);
                                        $day_th = $date->format('d');
                                        $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                        $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                        $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                        echo $formattedDate;
                                        ?>
                                    </span>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <div class="mt-1"></div>
                                    <span class="font-18"><?= $rs->intra_gallery_by; ?></span>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <div class="mt-1"></div>
                                    <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_fname'] == $rs->intra_gallery_by) : ?>
                                        <a class="red download-link-del-all" href="#" ole="button" onclick="confirmDelete(<?= $rs->intra_gallery_id; ?>);">
                                            <i class="bi bi-trash fa-lg"></i></a>
                                    <?php endif; ?>
                                    <script>
                                        function confirmDelete(intra_gallery_id) {
                                            Swal.fire({
                                                title: 'กดเพื่อยืนยัน?',
                                                text: "คุณจะไม่สามรถกู้คืนได้อีก!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'ใช่, ต้องการลบ!',
                                                cancelButtonText: 'ยกเลิก' // เปลี่ยนข้อความปุ่ม Cancel เป็นภาษาไทย
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.href = "<?= site_url('Intra_gallery/del_intra_gallery/'); ?>" + intra_gallery_id;
                                                }
                                            });
                                        }
                                    </script>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <a class="download-link-dow-all" href="<?php echo site_url('Intra_gallery/download_all_images/' . $rs->intra_gallery_id); ?>">
                                        <img src="<?php echo base_url("docs/intranet/intra-icon-download.png"); ?>">
                                    </a>
                                </div>
                                <!-- <div class="col-sm-2">
                                    <div class="mt-1"></div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical" style="font-size:30px; color: gray;"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="<?= site_url('Intra_gallery/detail/' . $rs->intra_gallery_id); ?>">
                                                    <img src="<?php echo base_url("docs/intranet/icon-open-intra.png"); ?>" width="20">
                                                    &nbsp; เปิด</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo site_url('Intra_gallery/download_all_images/' . $rs->intra_gallery_id); ?>">
                                                    <img src="<?php echo base_url("docs/intranet/icon-download-intra.png"); ?>" width="20">
                                                    &nbsp; ดาวน์โหลดทั้งหมด
                                                </a>
                                            </li>

                                            <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_fname'] == $rs->intra_gallery_by) : ?>
                                                <li>
                                                    <a class="dropdown-item" href="#" ole="button" onclick="confirmDelete(<?= $rs->intra_gallery_id; ?>);">
                                                        <img src="<?php echo base_url("docs/intranet/icon-del-intra.png"); ?>" width="20">
                                                        &nbsp; ลบ</a>
                                                    <script>
                                                        function confirmDelete(intra_gallery_id) {
                                                            Swal.fire({
                                                                title: 'กดเพื่อยืนยัน?',
                                                                text: "คุณจะไม่สามรถกู้คืนได้อีก!",
                                                                icon: 'warning',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                confirmButtonText: 'ใช่, ต้องการลบ!',
                                                                cancelButtonText: 'ยกเลิก' // เปลี่ยนข้อความปุ่ม Cancel เป็นภาษาไทย
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    window.location.href = "<?= site_url('Intra_gallery/del_intra_gallery/'); ?>" + intra_gallery_id;
                                                                }
                                                            });
                                                        }
                                                    </script>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    <?php } ?>

                    <!-- จัดการหน้า -->
                    <div class="pagination-container d-flex justify-content-end mt-3">
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