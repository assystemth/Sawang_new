<style>
    #navbar2 {
        background: linear-gradient(180deg, #6D2F48 0%, #7F3E55 39.39%, #CC818D 100%);
        /* background-image: url('<?php echo base_url("docs/s.navbar-stick2.png"); ?>');
        background-repeat: no-repeat;
        background-size: 100%; */
        height: 80px;
        width: 1920px;
        display: none;
        position: fixed;
        transition: top 0.3s ease-in-out;
        font-size: 24px;
        padding-left: 120px;

    }

    #navbar2:hover {
        top: 0;
    }

    @media screen and (max-width: 1200px) {
        #navbar2 {
            display: none;
        }
    }

    ul li {
        list-style: none;
    }

    /* ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    } */

    li {
        float: left;
    }

    li a,
    .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a,
    .dropdown .dropbtn {
        position: relative;
    }

    /* เส้นใต้สำหรับ li a เท่านั้น */
    ul>li>a:hover::after,
    ul>li.dropdown:hover .dropbtn::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 10px;
        /* ระยะห่างของเส้นจากตัวอักษร */
        height: 2px;
        /* ความหนาของเส้น */
        background: linear-gradient(180deg, #F9A602 2.64%, #F5C728 78.74%, #F5D033 97.76%);
        /* สีของเส้น */
        transform: scaleX(1);
        transition: transform 0.3s;
    }

    ul>li>a::after,
    ul>li.dropdown .dropbtn::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 10px;
        /* ระยะห่างของเส้นจากตัวอักษร */
        height: 2px;
        /* ความหนาของเส้น */
        background-color: transparent;
        transform: scaleX(0);
        transition: transform 0.3s;
    }

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        /* display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1; */

        background-image: url('<?php echo base_url("docs/s.bg-nav-content-3.jpg"); ?>');
        background-repeat: no-repeat;
        background-size: 100%;
        display: none;
        position: fixed;
        width: 1920px;
        height: 584px;
        z-index: 2;
        left: 0;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .font-head-navbar-letf-logo1 {
        background: var(--Gold2, linear-gradient(90deg, #D9AA58 4.04%, #F2B940 27.1%, #DEAE3F 46.15%, #E0B344 52.16%, #E7C354 61.19%, #F2DE6F 70.21%, #FFFC8D 78.23%, #FFE875 82.24%, #FFD55E 88.25%, #AA7100 100.28%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .font-head-navbar-letf-logo2 {
        color: #F6F6F6;
        text-align: center;
        font-size: 17.5px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
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
    <ul>
        <li style="margin-left: 15px;"><a href="#">หน้าหลัก</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">ข้อมูลทั่วไป</a>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </li>
        <li class="dropdown" style="margin-left: 15px;">
            <a href="javascript:void(0)" class="dropbtn">โครงสร้างบุคลากร</a>
            <div class="dropdown-content">
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
                <a href="#">Link 6</a>
            </div>
        </li>
        <li class="dropdown" style="margin-left: 15px;">
            <a href="javascript:void(0)" class="dropbtn">บริการประชาชน</a>
            <div class="dropdown-content">
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
                <a href="#">Link 6</a>
            </div>
        </li>
        <li class="dropdown" style="margin-left: 15px;">
            <a href="javascript:void(0)" class="dropbtn">แผนงาน</a>
            <div class="dropdown-content">
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
                <a href="#">Link 6</a>
            </div>
        </li>
        <li class="dropdown" style="margin-left: 15px;">
            <a href="javascript:void(0)" class="dropbtn">การดำเนินงาน</a>
            <div class="dropdown-content">
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
                <a href="#">Link 6</a>
            </div>
        </li>
        <li class="dropdown" style="margin-left: 15px;">
            <a href="javascript:void(0)" class="dropbtn">มาตรการภายใน</a>
            <div class="dropdown-content">
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
                <a href="#">Link 6</a>
            </div>
        </li>
        <li class="dropdown" style="margin-left: 15px;">
            <a href="javascript:void(0)" class="dropbtn">ผังเว็บไซต์</a>
            <div class="dropdown-content">
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
                <a href="#">Link 6</a>
            </div>
        </li>
        <li class="dropdown" style="margin-left: 15px;">
            <a href="javascript:void(0)" class="dropbtn">เข้าสู่ระบบ</a>
            <div class="dropdown-content">
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
                <a href="#">Link 6</a>
            </div>
        </li>
    </ul>
</nav>


<script>
    window.onscroll = function() {
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
    window.onload = function() {
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
<div class="d-flex justify-content-start">
    <div style="position: absolute; margin: 25px 25px; z-index: 2;">
        <div class="row">
            <div class="col-5">
                <img src="docs/s.logo-navbar.png">
            </div>
            <div class="col-7">
                <span class="font-head-navbar-letf-logo1">อบต. สว่าง</span><br>
                <span class="font-head-navbar-letf-logo2">อ.โพนทอง จ.ร้อยเอ็ด</span>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-end">
    <div style="position: absolute; margin-top:25px; z-index: 2;">
        <!-- <img src="<?php echo base_url("docs/s.navbar-fixed.png"); ?>"> -->
        <ul style="font-size: 24px;">
            <li><a href="#">หน้าหลัก</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">ข้อมูลทั่วไป</a>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">โครงสร้าง</a>
                <div class="dropdown-content">
                    <a href="#">Link 4</a>
                    <a href="#">Link 5</a>
                    <a href="#">Link 6</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">บริการ</a>
                <div class="dropdown-content">
                    <a href="#">Link 4</a>
                    <a href="#">Link 5</a>
                    <a href="#">Link 6</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">แผนงาน</a>
                <div class="dropdown-content">
                    <a href="#">Link 4</a>
                    <a href="#">Link 5</a>
                    <a href="#">Link 6</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">การดำเนินงาน</a>
                <div class="dropdown-content">
                    <a href="#">Link 4</a>
                    <a href="#">Link 5</a>
                    <a href="#">Link 6</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">มาตรการภายใน</a>
                <div class="dropdown-content">
                    <a href="#">Link 4</a>
                    <a href="#">Link 5</a>
                    <a href="#">Link 6</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">ผังเว็บไซต์</a>
                <div class="dropdown-content">
                    <a href="#">Link 4</a>
                    <a href="#">Link 5</a>
                    <a href="#">Link 6</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">เข้าสู่ระบบ</a>
                <div class="dropdown-content">
                    <a href="#">Link 4</a>
                    <a href="#">Link 5</a>
                    <a href="#">Link 6</a>
                </div>
            </li>
        </ul>
        <div class="search">
            <a href="#" id="searchShow" onclick="toggleSearch()">
                <img id="searchImage" src="<?php echo base_url("docs/search.png"); ?>" style="position: absolute; top: 10%; left: 84%;" onmouseover="changeImage('<?php echo base_url('docs/search-hover.png'); ?>')" onmouseout="restoreImage('<?php echo base_url('docs/search.png'); ?>')">
            </a>
            <div id="searchContainer" style="display: none;">
                <div class="gcse-search"></div>
            </div>
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