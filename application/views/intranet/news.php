<div class="text-center font-head-top">
   <span>ข่าวภายในองค์กร</span>
</div>
</div>

<div class="crop">

   <div class="main-container">
      <div class="main-sidebar">
         <a href="<?php echo site_url('System_intranet'); ?>" class="font-nav">
            <div class="navbars-active" style="padding-top: 27px;">
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
            <div class="navbars" style="padding-top: 27px;">
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
               <div class="col-9">
                  <div class="d-flex justify-content-end mt-2">
                     <div class="search">
                        <form id="searchForm" action="<?= site_url('System_intranet/search'); ?>" method="post">
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
                     <a class="underline" href="<?php echo site_url('System_intranet/adding'); ?>">
                        <div class="btn-add">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                           </svg> เพิ่มข่าวภายในองค์กร
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php
               $count = count($query);
               $itemsPerPage = 16; // จำนวนรายการต่อหน้า
               $totalPages = ceil($count / $itemsPerPage);

               $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

               // ปรับตำแหน่งที่กำหนดค่า $numToShow
               $numToShow = 3; // จำนวนปุ่มที่ต้องการแสดง
               $half = floor($numToShow / 2);

               $startPage = max($currentPage - $half, 1);
               $endPage = min($startPage + $numToShow - 1, $totalPages);

               $startIndex = ($currentPage - 1) * $itemsPerPage;
               $endIndex = min($startIndex + $itemsPerPage - 1, $count - 1);

               for ($i = $startIndex; $i <= $endIndex; $i++) {
                  $rs = $query[$i];
               ?>
                  <div class="col-3 mt-4">
                     <div class="card-news">
                        <a href="<?php echo site_url('System_intranet/detail/' . $rs->intra_news_id); ?>" class="underline">
                           <img src="<?php echo base_url('docs/intranet/img/'. $rs->intra_news_img); ?>" width="250" height="179">
                           <div class="card-content-news">
                              <span class="font-news-topic limit-font-two"><?= $rs->intra_news_topic; ?></span>
                              <span class="font-news-date">
                                 <?php
                                 // ในการใช้งาน setThaiMonth
                                 $date = new DateTime($rs->intra_news_datesave);
                                 $day_th = $date->format('d');
                                 $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                 $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                 $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                 echo $formattedDate;
                                 ?></span>
                              <div class="border-news"></div>
                              <span class="font-news-detail limit-font-six"><?= $rs->intra_news_detail; ?></span>
                           </div>
                           <!-- <div class="d-flex justify-content-end" style="margin-top: 4px; margin-right: 10px;">
                              <svg xmlns="http://www.w3.org/2000/svg" style="color: #2C4447; margin-top: 4px;" width="16" height="11" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                 <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                 <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                              </svg>&nbsp;<span class="font-look-news">เปิดดู : 0</span>
                           </div> -->
                        </a>
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