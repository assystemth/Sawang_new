<!-- Include Bootstrap CSS and JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<!-- sweetalert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- chart พาย  -->
<script src="<?= base_url('asset/'); ?>rpie.js"></script>

<!-- sb-admin-2 -->
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
<!-- <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<!-- <script src="<?= base_url(); ?>vendor/chart.js/Chart.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script> -->

<!-- Page level plugins -->
<script src="<?= base_url(); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('asset/'); ?>js/demo/datatables-demo.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- รูปภาพ preview -->
<script src="<?= base_url('asset/'); ?>lightbox2/src/js/lightbox.js"></script>

<!-- chart w3school -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- chart google -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script>
     // สุ่มวิกระพริบ และแสดงผล ข่าวประชาสัมพันธ์  ********************************************************************************
     function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function randomizeAnimationDuration() {
        var minSeconds = 2; // วินาทีต่ำสุดที่ต้องการ
        var maxSeconds = 7; // วินาทีสูงสุดที่ต้องการ
        var randomSeconds = getRandomInt(minSeconds, maxSeconds);
        return randomSeconds + 's';
    }

    function randomizePosition(element) {
        var maxWidth = 1920; // กำหนดขนาดความกว้างสูงสุด 1920px
        var maxHeight = 500; // กำหนดขนาดความสูงสูงสุด 1000px

        var randomMarginLeft = getRandomInt(0, maxWidth - element.width);
        var randomMarginTop = getRandomInt(0, maxHeight - element.height);

        element.style.marginLeft = randomMarginLeft + 'px';
        element.style.marginTop = randomMarginTop + 'px';
    }

    var animations = document.querySelectorAll('.dot-news-animation-1, .dot-news-animation-2, .dot-news-animation-3, .dot-news-animation-4, .dot-news-animation-5, .dot-news-animation-6, .dot-news-animation-7, .dot-news-animation-8, .dot-news-animation-9, .dot-news-animation-10, .dot-news-animation-11, .dot-news-animation-12, .dot-news-animation-13, .dot-news-animation-14, .dot-news-animation-15');
    animations.forEach(function(animation) {
        animation.style.animationDuration = randomizeAnimationDuration();
        randomizePosition(animation);
    });
    //   ********************************************************************************

    // dropdown report e-gp *********************************************************************
    function showChartPurchase(chartId, year) {
        // ซ่อนทุก chart ก่อน
        document.querySelectorAll('.chang_chart_purchase').forEach(container => {
            container.style.display = 'none';
        });

        // แสดง chart ที่เลือก
        document.getElementById(chartId).style.display = 'block';

        // เปลี่ยนข้อความในปุ่ม dropdown เป็นปีที่เลือก
        document.getElementById('dropdownMenuLinkPurchase').innerText = 'ปีงบประมาณ ' + year;
    }

    function showChartType(chartId, year) {
        // ซ่อนทุก chart ก่อน
        document.querySelectorAll('.chang_chart_type').forEach(container => {
            container.style.display = 'none';
        });

        // แสดง chart ที่เลือก
        document.getElementById(chartId).style.display = 'block';

        // เปลี่ยนข้อความในปุ่ม dropdown เป็นปีที่เลือก
        document.getElementById('dropdownMenuLinkType').innerText = 'ปีงบประมาณ ' + year;
    }

    function showChartStatus(chartId, year) {
        // ซ่อนทุก chart ก่อน
        document.querySelectorAll('.chang_chart_status').forEach(container => {
            container.style.display = 'none';
        });

        // แสดง chart ที่เลือก
        document.getElementById(chartId).style.display = 'block';

        // เปลี่ยนข้อความในปุ่ม dropdown เป็นปีที่เลือก
        document.getElementById('dropdownMenuLinkStatus').innerText = 'ปีงบประมาณ ' + year;
    }

    function showChart(chartId, year) {
        // ซ่อนทุก chart ก่อน
        document.querySelectorAll('.chang_tmt_budjet').forEach(container => {
            container.style.display = 'none';
        });

        // แสดง chart ที่เลือก
        document.getElementById(chartId).style.display = 'block';

        // เปลี่ยนข้อความในปุ่ม dropdown เป็นปีที่เลือก
        document.getElementById('dropdownMenuLinkBudget').innerText = 'ปีงบประมาณ ' + year;
    }

    // **************************************************************************************

    //  ขึ้นสู่ด้านบนสุด และปุ่มย้อนกลับ **********************************************************************
    $(document).ready(function() {
        var scrollTopButton = $("#scroll-to-top");
        var scrollBackButton = $("#scroll-to-back");

        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                scrollTopButton.fadeIn();
                scrollBackButton.fadeIn();
            } else {
                scrollTopButton.fadeOut();
                scrollBackButton.fadeOut();
            }
        });

        scrollTopButton.click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
            return false;
        });

        scrollBackButton.click(function() {
            window.history.back();
            return false;
        });
    });

    function scrolltotopFunction() {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    }
    // ****************************************************************************************

    //  sweet alert **********************************************************************
    $(document).ready(function() {
        <?php if ($this->session->flashdata('save_success')) { ?>
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'บันทึกข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 1500
            })
        <?php } ?>
    });

    $(document).ready(function() {
        <?php if ($this->session->flashdata('save_error')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'ตรวจพบปัญหา',
                text: 'หน่วยความจำของท่าเต็ม!',
                footer: '<a href="#">ติดต่อผู้ดูแลระบบ?</a>'
            })
        <?php } ?>
    });

    $(document).ready(function() {
        <?php if ($this->session->flashdata('save_maxsize')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'ตรวจพบปัญหา',
                text: 'ขนาดรูปภาพต้องไม่เกิน 1.5MB!',
                footer: '<a href="#">ติดต่อผู้ดูแลระบบ?</a>'
            })
        <?php } ?>
    });

    $(document).ready(function() {
        <?php if ($this->session->flashdata('del_success')) { ?>
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 1500
            })
        <?php } ?>
    });

    $(document).ready(function() {
        <?php if ($this->session->flashdata('save_again')) { ?>
            Swal.fire({
                icon: 'warning',
                title: 'ตรวจพบปัญหา',
                text: 'มีข้อมูลอยู่แล้ว!',
                footer: '<a href="#">ติดต่อผู้ดูแลระบบ?</a>'
            })
        <?php } ?>
    });

    //   ********************************************************************************

    //  pop up เพิ่มข้อมูล **********************************************************************
    $(document).ready(function() {
        // เมื่อคลิกปุ่ม "จัดการ"
        $(".insert-vulgar-btn").click(function() {
            var target = $(this).data("target");
            $(target).show();
        });

        // เมื่อคลิกปุ่ม "ปิด"
        $(".close-button").click(function() {
            var target = $(this).data("target");
            $(target).hide();
        });
    });

    //   ********************************************************************************

    //   เปิด-ปิด div **********************************************************************

    // $(document).ready(function() {
    //         $('.font-nav').click(function(event) {
    //             event.preventDefault();

    //             // ลบคลาส -active จากทุก navbar
    //             $('.font-nav > div').removeClass('navbar-active').addClass('navbars');

    //             // เพิ่มคลาส -active ให้กับลิงก์ที่คลิก
    //             $(this).children('div').removeClass('navbars').addClass('navbars-active');

    //             // ซ่อนทุก content
    //             $('.content').removeClass('active');

    //             // แสดง content ที่เกี่ยวข้อง
    //             const target = $(this).data('target');
    //             $('#' + target).addClass('active');
    //         });
    //     });

    //   ********************************************************************************

    // ฟังก์ชั่นสุ่มเลขสำหรับการลอยขึ้น-ลง
    function getRandomIntUpDown(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // ฟังก์ชั่นใช้แอนิเมชันลอยขึ้น-ลง
    function applyRandomAnimationUpdown(element) {
        const randomLeft = getRandomIntUpDown(0, 1900);
        const randomDuration = getRandomIntUpDown(6, 13);

        element.style.left = `${randomLeft}px`;
        element.style.animation = `fadeInOutDownUp ${randomDuration}s infinite`;
    }

    // นำฟังก์ชั่นไปใช้กับองค์ประกอบที่ต้องการลอยขึ้น-ลง
    document.querySelectorAll('.dot-updown-animation-1, .dot-updown-animation-2, .dot-updown-animation-3, .dot-updown-animation-4, .dot-updown-animation-5, .dot-updown-animation-6, .dot-updown-animation-7, .dot-updown-animation-8, .dot-updown-animation-9, .dot-updown-animation-10').forEach(applyRandomAnimationUpdown);

    //   ********************************************************************************
</script>