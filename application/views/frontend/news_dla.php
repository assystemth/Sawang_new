<div class="text-center" style="padding-top: 65px">
    <span class="font-pages-head">หนังสือราชการ สถ.</span>
</div>
</div>

<div class="bg-pages">
    <div class="container-pages-news">
        <div class="bg-doc-off-all">
            <div class="row">
                <div class="row bg-doc-off-head">
                    <div class="col-2" style="margin-left: -20px; margin-top: 15px;">
                        <div class="text-center underline">
                            <span class="font-head-doc-off">วันที่หนังสือ</span>
                        </div>
                    </div>
                    <div class="col-2 underline" style="margin-left: -10px; margin-top: 15px;">
                        <a href="#">
                            <span class="font-head-doc-off">เลขที่หนังสือ</span>
                        </a>
                    </div>
                    <div class="col-6 underline" style="margin-left: 5px; margin-top: 15px;">
                        <a href="#">
                            <span class="font-head-doc-off">เรื่อง</span>
                        </a>
                    </div>
                    <div class="col-2" style="margin-left: 25px; margin-top: 15px;">
                        <div class="d-flex justify-content-start">
                            <span class="font-head-doc-off">หน่วยงาน</span>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (!empty($rssData)) : ?>
                <?php foreach (array_slice($rssData, 0, 25) as $index => $document) : ?>
                    <div class=" mt-1 <?php echo ($index % 2 == 0) ? 'bg-doc-off-content' : 'bg-doc-off-content-white'; ?> <?php echo ($index === 4) ? 'bordered-box' : ''; ?>">
                        <div class="row">
                            <div class="col-2" style="margin-left: 30px; margin-top: 15px;">
                                <div class="box-time text-center underline">
                                    <?php
                                    // $document['date'] คือตัวแปรที่เก็บวันที่

                                    // แปลงวันที่เป็น object DateTime ด้วยรูปแบบที่ถูกต้อง
                                    $date = DateTime::createFromFormat('d/m/Y', $document['date']);

                                    // ดึงวันที่
                                    $thaiDay = $date->format('d');

                                    // ดึงเดือนเป็นตัวย่อไทย
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
                                    $thaiMonth = $thaiMonths[$date->format('F')];

                                    // ดึงเฉพาะปี
                                    $year = $date->format('Y');

                                    // แสดงผลลัพธ์
                                    ?>
                                    <span class="font-pr-media-day">
                                        <?php echo $thaiDay; ?>
                                    </span>
                                    <br>
                                    <span class="font-pr-media-mon">
                                        <?php echo $thaiMonth; ?>
                                        <?php echo $year; ?>
                                    </span>
                                    <?php
                                    ?>
                                </div>
                            </div>
                            <div class="col-2 underline font-pr-media-head" style="margin-left: -40px; margin-top: 15px;">
                                <span class=" one-line-ellipsis"><?php echo $document['doc_number']; ?></span>
                            </div>
                            <div class="col-6 underline font-pr-media-head" style=" margin-top: 15px;">
                                <span class=" "><?php echo $document['topic']; ?></span>
                            </div>
                            <div class="col-1" style="margin-left: 10px; margin-top: 27px;">
                                <div class="d-flex justify-content-start font-pr-media-head">
                                    <span class=" one-line-ellipsis"><?php echo $document['organization']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="d-flex justify-content-end" style="margin-top: 2%; margin-right: 80px;">
            <a href="https://www.dla.go.th/servlet/DocumentServlet" target="_blank">
                <div class="button-actifity-all">
                    <span class="font-all-home" style="margin-left: 25px;">ดูทั้งหมด</span>
                </div>
            </a>
        </div>
    </div>
</div>