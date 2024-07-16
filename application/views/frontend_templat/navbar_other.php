  <!-- // ปุ่ม scroll-to-top  -->
  <a onclick="scrolltotopFunction()" id="scroll-to-top" title="Go to top"></a>
  <a id="scroll-to-back" title="Go to back"></a>
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
          z-index: 100;

      }

      #navbar2:hover {
          top: 0;
      }

      @media screen and (max-width: 768px) {
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
      ul>li>.dropdown>a:hover::after,
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

          background-image: url('<?php echo base_url("docs/bg-nav-content4.png"); ?>');
          background-repeat: no-repeat;
          background-size: 100%;
          display: none;
          position: fixed;
          width: 1920px;
          height: 480px;
          z-index: 2;
          left: 50%;
          /* ย้าย dropdown ไปที่กึ่งกลางตามแนวนอน */
          top: 250px;
          /* ย้าย dropdown ไปที่กึ่งกลางตามแนวตั้ง */
          transform: translate(-50%, -50%);
          /* แก้ไขตำแหน่งให้เป็นตรงกลาง */
      }

      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
      }

      .dropdown-content a:hover {
          /* background-color: #f1f1f1; */
      }

      .dropdown:hover .dropdown-content {
          display: block;
      }

      @keyframes gradient-move {
          0% {
              background-position: 100% 0%;
          }

          100% {
              background-position: 0% 0%;
          }
      }

      .font-head-navbar-letf-logo1 {
          background: var(--Gold2, linear-gradient(90deg, #D9AA58 4.04%, #F2B940 27.1%, #DEAE3F 46.15%, #E0B344 52.16%, #E7C354 61.19%, #F2DE6F 70.21%, #FFFC8D 78.23%, #FFE875 82.24%, #FFD55E 88.25%, #AA7100 100.28%));
          background-size: 1000% 1000%;
          background-clip: text;
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          font-size: 32px;
          font-style: normal;
          font-weight: 600;
          line-height: normal;
          z-index: 1;
          animation: gradient-move 10s linear infinite;
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
          width: 309px;
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
          fill: #A4A4A4;
          /* ปรับสีของไอคอนเป็นสีขาว */
          width: 18px;
          /* ปรับขนาดของไอคอนเป็น 15px */
          height: 18px;
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
          width: 309px;
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
          margin-left: -45px;
          margin-top: -15px;
      }

      ul.no-bullets {
          list-style-type: none;
          /* ลบ bullet points */
          padding: 0;
          /* ลบ padding ของ ul */
          margin: 0;
          /* ลบ margin ของ ul */
      }

      ul.no-bullets a {
          display: block;
          /* ทำให้ลิงก์เป็นบล็อก */
          padding: 5px 0;
          /* กำหนด padding ตามต้องการ */
          margin: 0;
          /* ลบ margin ของลิงก์ */
          text-decoration: none;
          /* ลบขีดเส้นใต้ของลิงก์ */
          color: inherit;
          /* ทำให้สีของลิงก์สืบทอดจากพ่อแม่ */
      }
  </style>
  <nav class="navbar navbar2 navbar-expand-lg navbar-dark navbar-center sticky-top" id="navbar2">
      <ul>
          <li style="margin-left: 55px;"><a href="<?php echo site_url('Home'); ?>">หน้าหลัก</a></li>
          <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">ข้อมูลทั่วไป</a>
              <div class="dropdown-content">
                  <ul class="no-bullets mt-2" style="margin-left: 400px">
                      <div class="dropdown-left">
                          <a href="<?php echo site_url('Pages/history'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ประวัติความเป็นมา</span></a></a>
                          <a href="<?php echo site_url('Pages/ci'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อมูลชุมชน</span></a></a>
                          <a href="<?php echo site_url('Pages/gci'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อมูลสภาพทั่วไป</span></a></a>
                          <a href="<?php echo site_url('Pages/msg_pres'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สารจากนายก (MES)</span></a></a>
                          <a href="<?php echo site_url('Pages/mission'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ภารกิจและความรับผิดชอบ</span></a></a>
                          <a href="<?php echo site_url('Pages/si'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ยุทธศาสตร์การพัฒนาด้านโครงสร้างพื้นฐาน</span></a></a>
                      </div>
                      <div class="dropdown-center">
                          <a href="<?php echo site_url('Pages/authority'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;อำนาจหน้าที่</span></a></a>
                          <a href="<?php echo site_url('Pages/vision'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;วิสัยทัศน์และพันธกิจ</span></a></a>
                          <a href="<?php echo site_url('Pages/motto'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คำขวัญ</span></a></a>
                          <a href="<?php echo site_url('Pages/executivepolicy'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;นโยบายของผู้บริหาร</span></a></a>
                          <a href="<?php echo site_url('Pages/news_dla'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หนังสือราชการ สถ.</span></a></a>
                          <a href="<?php echo site_url('Pages/prov_local_doc'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หนังสือราชการ สถ.จ.</span></a></a>
                          <a href="<?php echo site_url('Pages/egp'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข่าวจัดซื้อจัดจ้าง e-GP</span></a></a>
                      </div>
                      <div class="dropdown-right">
                          <a href="<?php echo site_url('Pages/news'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข่าวประชาสัมพันธ์</span></a></a>
                          <a href="<?php echo site_url('Pages/activity'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข่าวสาร / กิจกรรม</span></a></a>
                          <a href="<?php echo site_url('Pages/procurement'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข่าวจัดซื้อจัดจ้าง</span></a></a>
                          <a href="<?php echo site_url('Pages/travel'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สถานที่ท่องเที่ยว</span></a></a>
                          <a href="<?php echo site_url('Pages/otop'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ผลิตภัณฑ์ชุมชน</span></a></a>
                          <a href="<?php echo site_url('Pages/newsletter'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;จดหมายข่าว</span></a></a>
                          <a href="<?php echo site_url('Pages/contact'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ติดต่อเรา</span></a></a>
                      </div>
                  </ul>
              </div>
          </li>
          <li class="dropdown" style="margin-left: 15px;">
              <a href="javascript:void(0)" class="dropbtn">โครงสร้างบุคลากร</a>
              <div class="dropdown-content">
                  <ul class="no-bullets mt-2" style="margin-left: 400px">
                      <div class="dropdown-left">
                          <a href="<?php echo site_url('Pages/site_map'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนผังโครงสร้างรวม</span></a></a>
                          <a href="<?php echo site_url('Pages/p_executives'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คณะผู้บริหาร</span></a></a>
                          <a href="<?php echo site_url('Pages/p_council'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สมาชิกสภาตำบล</span></a></a>
                          <a href="<?php echo site_url('Pages/p_unit_leaders'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หัวหน้าส่วนราชการ</span></a></a>
                          <a href="<?php echo site_url('Pages/p_deputy'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สำนักปลัดองค์การบริหารส่วนตำบล</span></a></a>
                      </div>
                      <div class="dropdown-center">
                          <a href="<?php echo site_url('Pages/p_treasury'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กองคลัง</span></a></a>
                          <a href="<?php echo site_url('Pages/p_maintenance'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กองช่าง</span></a></a>
                          <a href="<?php echo site_url('Pages/p_education'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กองสวัสดิการสังคม</span></a></a>
                          <a href="<?php echo site_url('Pages/p_audit'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หน่วยตรวจสอบภายใน</span></a></a>
                      </div>
                  </ul>
              </div>
          </li>
          <li class="dropdown" style="margin-left: 15px;">
              <a href="javascript:void(0)" class="dropbtn">บริการประชาชน</a>
              <div class="dropdown-content">
                  <ul class="no-bullets mt-2" style="margin-left: 200px">
                      <div class="dropdown-left">
                          <a href="<?php echo site_url('Pages/pbsv_utilities'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สาธารณูปโภค</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_cjc'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ศูนย์ยุติธรรมชุมชน</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_cac'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ศูนย์ช่วยเหลือประชาชน</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_cig'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ศูนย์ข้อมูลข่าวสารทางราชการ</span></a></a>
                          <a href="https://www.oic.go.th/INFOCENTER78/7852/" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ศูนย์ข้อมูลข่าวสารอิเล็กทรอนิกส์</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_ahs'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หลักประกันสุขภาพตำบลสว่าง</span></a></a>
                          <a href="<?php echo site_url('Pages/odata'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ฐานข้อมูลเปิดภาครัฐ (Open Data)</span></a></a>
                          <a href="https://www.nacc.go.th/NACCPPWFC?" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ยกระดับเจตจำนงทางการเมืองในการต่อต้านการทุจริต</span></a></a>
                      </div>
                      <div class="dropdown-center">
                          <a href="<?php echo site_url('Pages/elderly_aw_ods'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;เบี้ยยังชีพผู้สูงอายุ / ผู้พิการ</span></a></a>
                          <a href="<?php echo site_url('Pages/kid_aw_ods'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;เงินอุดหนุนเด็กแรกเกิด</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_gup'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คู่มือสำหรับประชาชน</span></a></a>
                          <a href="https://dbdregcom.dbd.go.th/mainsite/index.php?id=28" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คู่มือจดทะเบียนพาณิชย์</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_sags'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คู่มือและมาตรฐานการให้บริการ</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_ems'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;งานกู้ชีพ / การบริการการแพทย์ฉุกเฉิน (EMS)</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_oppr'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;งานอาสาสมัครป้องกันภัยฝ่ายพลเรือน (อปพร.)</span></a></a>
                      </div>
                      <div class="dropdown-right">
                          <a href="<?php echo site_url('Pages/adding_complain'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ร้องเรียนร้องทุกข์</span></a></a>
                          <a href="<?php echo site_url('Pages/adding_esv_ods'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ยื่นเอกสารออนไลน์</span></a></a>
                          <a href="<?php echo site_url('Pages/adding_suggestions'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ช่องทางรับฟังความคิดเห็น</span></a></a>
                          <a href="<?php echo site_url('Pages/adding_corruption'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แจ้งเรื่องทุจริตหน่วยงานภาครัฐ</span></a></a>
                          <a href="<?php echo site_url('Pages/q_a'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กระทู้ ถาม-ตอบ (Q&A)</span></a></a>
                          <a href="<?php echo site_url('Pages/questions'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คำถามที่พบบ่อย (FAQ)</span></a></a>
                          <a href="<?php echo site_url('Pages/pbsv_e_book'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ดาวน์โหลดแบบฟอร์ม E-Book</span></a></a>
                      </div>
                  </ul>
              </div>
          </li>
          <li class="dropdown" style="margin-left: 15px;">
              <a href="javascript:void(0)" class="dropbtn">แผนงาน</a>
              <div class="dropdown-content">
                  <ul class="no-bullets mt-2" style="margin-left: 400px">
                      <div class="dropdown-left">
                          <a href="<?php echo site_url('Pages/plan_pdl'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนพัฒนาท้องถิ่น</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_psi'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนแม่บทสารสนเทศ</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_pop'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนปฏิบัติการจัดซื้อจัดจ้าง</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_paca'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนปฏิบัติการป้องกันการทุจริต</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_pmda'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนป้องกันและบรรเทาสาธารณภัยประจำปี</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_dpy'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนการบริหารและพัฒนาทรัพยากรบุคคลประจำปี</span></a></a>
                      </div>
                      <div class="dropdown-center">
                          <a href="<?php echo site_url('Pages/plan_pc3y'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนอัตรากำลัง 3 ปี</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_pds3y'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนพัฒนาบุคลากร 3 ปี</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_poa'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนการดำเนินงานประจำปี</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_pdpa'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนพัฒนาบุคลากรประจำปี</span></a></a>
                          <a href="<?php echo site_url('Pages/plan_pcra'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนการจัดเก็บรายได้ประจำปี</span></a></a>
                      </div>
                      <div class="dropdown-right">
                          <a href="https://itas.nacc.go.th/go/iit/u4gpi2" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;IIT แบบวัดการรับรู้ภายใน</span></a></a>
                          <a href="https://itas.nacc.go.th/go/eit/u4gpi2" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;EIT แบบวัดการรับรู้ภายนอก</span></a></a>
                      </div>
                  </ul>
              </div>
          </li>
          <li class="dropdown" style="margin-left: 15px;">
              <a href="javascript:void(0)" class="dropbtn">การดำเนินงาน</a>
              <div class="dropdown-content">
                  <ul class="no-bullets mt-2" style="margin-left: 200px">
                      <div class="dropdown-left">
                          <a href="<?php echo site_url('Pages/operation_aca'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การปฏิบัติการป้องกันการทุจริต</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_mcc'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การจัดการเรื่องร้องเรียนการทุจริต</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_sap'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การปฏิบัติงานและการให้บริการ</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_pgn'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;นโยบายไม่รับของขวัญ no gift policy</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_po'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การเปิดโอกาสให้มีส่วนร่วม</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_pm'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การมีส่วนร่วมของผู้บริหาร</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_eco_topic'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การเสริมสร้างวัฒนธรรมองค์กร</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_mr'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การบริหารจัดการความเสี่ยง</span></a></a>
                      </div>
                      <div class="dropdown-center">
                          <a href="<?php echo site_url('Pages/ita_all'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การประเมินคุณธรรมและความโปร่งใส ITA</span></a></a>
                          <a href="<?php echo site_url('Pages/lpa'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การประเมินประสิทธิภาพขององค์กร LPA</span></a></a>
                          <a><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การบริหารและพัฒนาทรัพยากรบุคคล ></span></a></a>
                          <a href="<?php echo site_url('Pages/operation_policy_hr'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;นโยบายบริหารทรัพยากรบุคคล</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_am_hr'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;การดำเนินการบริหารทรัพยากรบุคคล</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_cdm_topic'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;หลักเกณฑ์การบริหารและพัฒนา</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_rdam_hr'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล</span></a></a>
                      </div>
                      <div class="dropdown-right">
                          <a href="<?php echo site_url('Pages/operation_aa'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กิจการสภา</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_aditn'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ตรวจสอบภายใน</span></a></a>
                          <a href="<?php echo site_url('Pages/operation_reauf'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;รายงานติดตามและประเมินผลแผน</span></a></a>
                          <a><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การจัดซื้อจัดจ้างหรือการจัดหาพัสดุ ></span></a></a>
                          <a href="<?php echo site_url('Pages/p_rpobuy'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;รายการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</span></a></a>
                          <a href="<?php echo site_url('Pages/p_sopopaortsr'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;รายงานสรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</span></a></a>
                          <a href="<?php echo site_url('Pages/p_sopopip'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;รายงานความก้าวหน้าการจัดซื้อจัดจ้างหรือ<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การจัดหาพัสดุ</span></a></a>
                      </div>
                  </ul>
              </div>
          </li>
          <li class="dropdown" style="margin-left: 15px;">
              <a href="javascript:void(0)" class="dropbtn">มาตรการภายใน</a>
              <div class="dropdown-content">
                  <ul class="no-bullets mt-2" style="margin-left: 400px">
                      <div class="dropdown-left">
                          <a href="<?php echo site_url('Pages/order'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คำสั่ง</span></a></a>
                          <a href="<?php echo site_url('Pages/announce'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ประกาศ</span></a></a>
                          <a href="<?php echo site_url('Pages/mui'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;มาตรการภายใน</span></a></a>
                          <a href="<?php echo site_url('Pages/guide_work'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คู่มือการปฏิบัติงาน</span></a></a>
                          <a href="<?php echo site_url('Pages/laws_topic'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กฏหมายที่เกี่ยวข้อง</span></a></a>
                          <a href="<?php echo site_url('Pages/loadform'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ดาวน์โหลดแบบฟอร์ม</span></a></a>
                          <a href="<?php echo site_url('Pages/pppw'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;พรบ./พรก ที่ใช้การปฏิบัติงาน</span></a></a>
                      </div>
                      <div class="dropdown-center">
                          <a href="<?php echo site_url('Pages/canon_bgps'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติงบประมาณ</span></a></a>
                          <a href="<?php echo site_url('Pages/canon_chh'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การควบคุมกิจการที่เป็นอันตรายต่อสุขภาพ</span></a></a>
                          <a href="<?php echo site_url('Pages/canon_ritw'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติการติดตั้งระบบบำบัดน้ำเสียในอาคาร</span></a></a>
                          <a href="<?php echo site_url('Pages/canon_market'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติตลาด</span></a></a>
                          <a href="<?php echo site_url('Pages/canon_rmwp'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติการจัดการสิ่งปฏิกูลและมูลฝอย</span></a></a>
                          <a href="<?php echo site_url('Pages/canon_rcsp'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติหลักเกณฑ์การคัดมูลฝอย</span></a></a>
                          <a href="<?php echo site_url('Pages/canon_rcp'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติควบคุมการเลี้ยงหรือปล่อยสุนัขและแมว</span></a></a>
                      </div>
                      <div class="dropdown-right">
                          <a href="<?php echo site_url('Pages/adding_complain'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;E-service</span></a></a>
                          <a href="<?php echo site_url('Pages/p_reb'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;รายงานใช้จ่ายงบประมาณจัดซื้อจัดจ้าง</span></a></a>
                          <a href="<?php echo site_url('Pages/p_rpo'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;รายงานผลการดำเนินงานจัดซื้อจัดจ้าง</span></a></a>
                          <a href="<?php echo site_url('Pages/km'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;knowledge Management: KM<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การจัดการความรู้ของท้องถิ่น</span></a></a>
                      </div>
                  </ul>
              </div>
          </li>
          <li style="margin-left: 15px;"><a href="<?php echo site_url('Pages/all_web'); ?>">ผังเว็บไซต์</a></li>
          <li style="margin-left: 15px;"><a href="<?php echo site_url('Home/login'); ?>">เข้าสู่ระบบ</a></li>

          <!-- <li class="dropdown" style="margin-left: 15px;">
            <a href="javascript:void(0)" class="dropbtn">เข้าสู่ระบบ</a>
            <div class="dropdown-content">
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
                <a href="#">Link 6</a>
            </div>
        </li> -->
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
      <div class="row" style="position: absolute; margin: 25px 25px;">
          <div class="col-5" style="z-index: 101;">
              <img src="<?php echo base_url('docs/logo2.png'); ?>">
          </div>
          <div class="col-7" style="margin-top: 5px; z-index: 5;">
              <span class="font-head-navbar-letf-logo1">อบต. สว่าง</span><br>
              <span class="font-head-navbar-letf-logo2">อ.โพนทอง จ.ร้อยเอ็ด</span>
          </div>
      </div>
  </div>

  <div class="d-flex justify-content-end">
      <div style="position: absolute; margin-top:25px; z-index: 100;">
          <!-- <img src="<?php echo base_url("docs/s.navbar-fixed.png"); ?>"> -->
          <ul style="font-size: 24px;">
              <li><a href="<?php echo site_url('Home'); ?>">หน้าหลัก</a></li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">ข้อมูลทั่วไป</a>
                  <div class="dropdown-content" style="margin-top: 80px;">
                      <ul class="no-bullets mt-2" style="margin-left: 400px">
                          <div class="dropdown-left">
                              <a href="<?php echo site_url('Pages/history'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ประวัติความเป็นมา</span></a></a>
                              <a href="<?php echo site_url('Pages/ci'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อมูลชุมชน</span></a></a>
                              <a href="<?php echo site_url('Pages/gci'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อมูลสภาพทั่วไป</span></a></a>
                              <a href="<?php echo site_url('Pages/msg_pres'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สารจากนายก (MES)</span></a></a>
                              <a href="<?php echo site_url('Pages/mission'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ภารกิจและความรับผิดชอบ</span></a></a>
                              <a href="<?php echo site_url('Pages/si'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ยุทธศาสตร์การพัฒนาด้านโครงสร้างพื้นฐาน</span></a></a>
                          </div>
                          <div class="dropdown-center">
                              <a href="<?php echo site_url('Pages/authority'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;อำนาจหน้าที่</span></a></a>
                              <a href="<?php echo site_url('Pages/vision'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;วิสัยทัศน์และพันธกิจ</span></a></a>
                              <a href="<?php echo site_url('Pages/motto'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คำขวัญ</span></a></a>
                              <a href="<?php echo site_url('Pages/executivepolicy'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;นโยบายของผู้บริหาร</span></a></a>
                              <a href="<?php echo site_url('Pages/news_dla'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หนังสือราชการ สถ.</span></a></a>
                              <a href="<?php echo site_url('Pages/prov_local_doc'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หนังสือราชการ สถ.จ.</span></a></a>
                              <a href="<?php echo site_url('Pages/egp'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข่าวจัดซื้อจัดจ้าง e-GP</span></a></a>
                          </div>
                          <div class="dropdown-right">
                              <a href="<?php echo site_url('Pages/news'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข่าวประชาสัมพันธ์</span></a></a>
                              <a href="<?php echo site_url('Pages/activity'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข่าวสาร / กิจกรรม</span></a></a>
                              <a href="<?php echo site_url('Pages/procurement'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข่าวจัดซื้อจัดจ้าง</span></a></a>
                              <a href="<?php echo site_url('Pages/travel'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สถานที่ท่องเที่ยว</span></a></a>
                              <a href="<?php echo site_url('Pages/otop'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ผลิตภัณฑ์ชุมชน</span></a></a>
                              <a href="<?php echo site_url('Pages/newsletter'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;จดหมายข่าว</span></a></a>
                              <a href="<?php echo site_url('Pages/contact'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ติดต่อเรา</span></a></a>
                          </div>
                      </ul>
                  </div>
              </li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">โครงสร้าง</a>
                  <div class="dropdown-content" style="margin-top: 80px;">
                      <ul class="no-bullets mt-2" style="margin-left: 400px">
                          <div class="dropdown-left">
                              <a href="<?php echo site_url('Pages/site_map'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนผังโครงสร้างรวม</span></a></a>
                              <a href="<?php echo site_url('Pages/p_executives'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คณะผู้บริหาร</span></a></a>
                              <a href="<?php echo site_url('Pages/p_council'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สมาชิกสภาตำบล</span></a></a>
                              <a href="<?php echo site_url('Pages/p_unit_leaders'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หัวหน้าส่วนราชการ</span></a></a>
                              <a href="<?php echo site_url('Pages/p_deputy'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สำนักปลัดองค์การบริหารส่วนตำบล</span></a></a>
                          </div>
                          <div class="dropdown-center">
                              <a href="<?php echo site_url('Pages/p_treasury'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กองคลัง</span></a></a>
                              <a href="<?php echo site_url('Pages/p_maintenance'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กองช่าง</span></a></a>
                              <a href="<?php echo site_url('Pages/p_education'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กองสวัสดิการสังคม</span></a></a>
                              <a href="<?php echo site_url('Pages/p_audit'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หน่วยตรวจสอบภายใน</span></a></a>
                          </div>
                      </ul>
                  </div>
              </li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">บริการ</a>
                  <div class="dropdown-content" style="margin-top: 80px;">
                      <ul class="no-bullets mt-2" style="margin-left: 200px">
                          <div class="dropdown-left">
                              <a href="<?php echo site_url('Pages/pbsv_utilities'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;สาธารณูปโภค</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_cjc'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ศูนย์ยุติธรรมชุมชน</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_cac'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ศูนย์ช่วยเหลือประชาชน</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_cig'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ศูนย์ข้อมูลข่าวสารทางราชการ</span></a></a>
                              <a href="https://www.oic.go.th/INFOCENTER78/7852/" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ศูนย์ข้อมูลข่าวสารอิเล็กทรอนิกส์</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_ahs'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;หลักประกันสุขภาพตำบลสว่าง</span></a></a>
                              <a href="<?php echo site_url('Pages/odata'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ฐานข้อมูลเปิดภาครัฐ (Open Data)</span></a></a>
                              <a href="https://www.nacc.go.th/NACCPPWFC?" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ยกระดับเจตจำนงทางการเมืองในการต่อต้านการทุจริต</span></a></a>
                          </div>
                          <div class="dropdown-center">
                              <a href="<?php echo site_url('Pages/elderly_aw_ods'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;เบี้ยยังชีพผู้สูงอายุ / ผู้พิการ</span></a></a>
                              <a href="<?php echo site_url('Pages/kid_aw_ods'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;เงินอุดหนุนเด็กแรกเกิด</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_gup'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คู่มือสำหรับประชาชน</span></a></a>
                              <a href="https://dbdregcom.dbd.go.th/mainsite/index.php?id=28" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คู่มือจดทะเบียนพาณิชย์</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_sags'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คู่มือและมาตรฐานการให้บริการ</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_ems'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;งานกู้ชีพ / การบริการการแพทย์ฉุกเฉิน (EMS)</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_oppr'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;งานอาสาสมัครป้องกันภัยฝ่ายพลเรือน (อปพร.)</span></a></a>
                          </div>
                          <div class="dropdown-right">
                              <a href="<?php echo site_url('Pages/adding_complain'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ร้องเรียนร้องทุกข์</span></a></a>
                              <a href="<?php echo site_url('Pages/adding_esv_ods'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ยื่นเอกสารออนไลน์</span></a></a>
                              <a href="<?php echo site_url('Pages/adding_suggestions'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ช่องทางรับฟังความคิดเห็น</span></a></a>
                              <a href="<?php echo site_url('Pages/adding_corruption'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แจ้งเรื่องทุจริตหน่วยงานภาครัฐ</span></a></a>
                              <a href="<?php echo site_url('Pages/q_a'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กระทู้ ถาม-ตอบ (Q&A)</span></a></a>
                              <a href="<?php echo site_url('Pages/questions'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คำถามที่พบบ่อย (FAQ)</span></a></a>
                              <a href="<?php echo site_url('Pages/pbsv_e_book'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ดาวน์โหลดแบบฟอร์ม E-Book</span></a></a>
                          </div>
                      </ul>
                  </div>
              </li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">แผนงาน</a>
                  <div class="dropdown-content" style="margin-top: 80px;">
                      <ul class="no-bullets mt-2" style="margin-left: 400px">
                          <div class="dropdown-left">
                              <a href="<?php echo site_url('Pages/plan_pdl'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนพัฒนาท้องถิ่น</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_psi'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนแม่บทสารสนเทศ</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_pop'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนปฏิบัติการจัดซื้อจัดจ้าง</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_paca'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนปฏิบัติการป้องกันการทุจริต</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_pmda'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนป้องกันและบรรเทาสาธารณภัยประจำปี</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_dpy'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนการบริหารและพัฒนาทรัพยากรบุคคลประจำปี</span></a></a>
                          </div>
                          <div class="dropdown-center">
                              <a href="<?php echo site_url('Pages/plan_pc3y'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนอัตรากำลัง 3 ปี</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_pds3y'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนพัฒนาบุคลากร 3 ปี</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_poa'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนการดำเนินงานประจำปี</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_pdpa'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนพัฒนาบุคลากรประจำปี</span></a></a>
                              <a href="<?php echo site_url('Pages/plan_pcra'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แผนการจัดเก็บรายได้ประจำปี</span></a></a>
                          </div>
                          <div class="dropdown-right">
                              <a href="https://itas.nacc.go.th/go/iit/u4gpi2" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แบบวัดการรับรู้ภายใน IIT</span></a></a>
                              <a href="https://itas.nacc.go.th/go/eit/u4gpi2" target="_blank"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;แบบวัดการรับรู้ภายนอก EIT</span></a></a>
                          </div>
                      </ul>
                  </div>
              </li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">การดำเนินงาน</a>
                  <div class="dropdown-content" style="margin-top: 80px;">
                      <ul class="no-bullets mt-2" style="margin-left: 200px">
                          <div class="dropdown-left">
                              <a href="<?php echo site_url('Pages/operation_aca'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การปฏิบัติการป้องกันการทุจริต</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_mcc'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การจัดการเรื่องร้องเรียนการทุจริต</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_sap'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การปฏิบัติงานและการให้บริการ</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_pgn'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;นโยบายไม่รับของขวัญ no gift policy</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_po'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การเปิดโอกาสให้มีส่วนร่วม</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_pm'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การมีส่วนร่วมของผู้บริหาร</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_eco_topic'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การเสริมสร้างวัฒนธรรมองค์กร</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_mr'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การบริหารจัดการความเสี่ยง</span></a></a>
                          </div>
                          <div class="dropdown-center">
                              <a href="<?php echo site_url('Pages/ita_all'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การประเมินคุณธรรมและความโปร่งใส ITA</span></a></a>
                              <a href="<?php echo site_url('Pages/lpa'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การประเมินประสิทธิภาพขององค์กร LPA</span></a></a>
                              <a><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การบริหารและพัฒนาทรัพยากรบุคคล ></span></a></a>
                              <a href="<?php echo site_url('Pages/operation_policy_hr'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;นโยบายบริหารทรัพยากรบุคคล</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_am_hr'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;การดำเนินการบริหารทรัพยากรบุคคล</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_cdm_topic'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;หลักเกณฑ์การบริหารและพัฒนา</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_rdam_hr'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล</span></a></a>
                          </div>
                          <div class="dropdown-right">
                              <a href="<?php echo site_url('Pages/operation_aa'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กิจการสภา</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_aditn'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ตรวจสอบภายใน</span></a></a>
                              <a href="<?php echo site_url('Pages/operation_reauf'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;รายงานติดตามและประเมินผลแผน</span></a></a>
                              <a><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การจัดซื้อจัดจ้างหรือการจัดหาพัสดุ ></span></a></a>
                              <a href="<?php echo site_url('Pages/p_rpobuy'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;รายการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</span></a></a>
                              <a href="<?php echo site_url('Pages/p_sopopaortsr'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;รายงานสรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</span></a></a>
                              <a href="<?php echo site_url('Pages/p_sopopip'); ?>"><span class="font-nav mar-left-6"><img src="<?php echo base_url('docs/flower2.png'); ?>">&nbsp;&nbsp;รายงานความก้าวหน้าการจัดซื้อจัดจ้างหรือ<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การจัดหาพัสดุ</span></a></a>
                          </div>
                      </ul>
                  </div>
              </li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">มาตรการภายใน</a>
                  <div class="dropdown-content" style="margin-top: 80px;">
                      <ul class="no-bullets mt-2" style="margin-left: 400px">
                          <div class="dropdown-left">
                              <a href="<?php echo site_url('Pages/order'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คำสั่ง</span></a></a>
                              <a href="<?php echo site_url('Pages/announce'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ประกาศ</span></a></a>
                              <a href="<?php echo site_url('Pages/mui'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;มาตรการภายใน</span></a></a>
                              <a href="<?php echo site_url('Pages/guide_work'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;คู่มือการปฏิบัติงาน</span></a></a>
                              <a href="<?php echo site_url('Pages/laws_topic'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;กฏหมายที่เกี่ยวข้อง</span></a></a>
                              <a href="<?php echo site_url('Pages/loadform'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ดาวน์โหลดแบบฟอร์ม</span></a></a>
                              <a href="<?php echo site_url('Pages/pppw'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;พรบ./พรก ที่ใช้การปฏิบัติงาน</span></a></a>
                          </div>
                          <div class="dropdown-center">
                              <a href="<?php echo site_url('Pages/canon_bgps'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติงบประมาณ</span></a></a>
                              <a href="<?php echo site_url('Pages/canon_chh'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;การควบคุมกิจการที่เป็นอันตรายต่อสุขภาพ</span></a></a>
                              <a href="<?php echo site_url('Pages/canon_ritw'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติการติดตั้งระบบบำบัดน้ำเสียในอาคาร</span></a></a>
                              <a href="<?php echo site_url('Pages/canon_market'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติตลาด</span></a></a>
                              <a href="<?php echo site_url('Pages/canon_rmwp'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติการจัดการสิ่งปฏิกูลและมูลฝอย</span></a></a>
                              <a href="<?php echo site_url('Pages/canon_rcsp'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติหลักเกณฑ์การคัดมูลฝอย</span></a></a>
                              <a href="<?php echo site_url('Pages/canon_rcp'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;ข้อบัญญัติควบคุมการเลี้ยงหรือปล่อยสุนัขและแมว</span></a></a>
                          </div>
                          <div class="dropdown-right">
                              <a href="<?php echo site_url('Pages/adding_complain'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;E-service</span></a></a>
                              <a href="<?php echo site_url('Pages/p_reb'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;รายงานใช้จ่ายงบประมาณจัดซื้อจัดจ้าง</span></a></a>
                              <a href="<?php echo site_url('Pages/p_rpo'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;รายงานผลการดำเนินงานจัดซื้อจัดจ้าง</span></a></a>
                              <a href="<?php echo site_url('Pages/km'); ?>"><img src="<?php echo base_url('docs/flower2.png'); ?>"><span class="font-nav">&nbsp;&nbsp;knowledge Management: KM<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การจัดการความรู้ของท้องถิ่น</span></a></a>
                          </div>
                      </ul>
                  </div>
              </li>
              <li style="margin-left: 15px;"><a href="<?php echo site_url('Pages/all_web'); ?>">ผังเว็บไซต์</a></li>
              <li style="margin-left: 15px;"><a href="<?php echo site_url('Home/login'); ?>">เข้าสู่ระบบ</a></li>
          </ul>
          <!-- <div class="search">
            <a href="#" id="searchShow" onclick="toggleSearch()">
                <img id="searchImage" src="<?php echo base_url("docs/search.png"); ?>" style="position: absolute; top: 10%; left: 84%;" onmouseover="changeImage('<?php echo base_url('docs/search-hover.png'); ?>')" onmouseout="restoreImage('<?php echo base_url('docs/search.png'); ?>')">
            </a>
            <div id="searchContainer" style="display: none;">
                <div class="gcse-search"></div>
            </div>
        </div> -->
      </div>
  </div>
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
  <div class="welcome-other">
      <img class="wel-other-img-cloud1" src="<?php echo base_url('docs/wel-other-cloud1.png'); ?>">
      <img class="wel-other-img-cloud2" src="<?php echo base_url('docs/wel-other-cloud2.png'); ?>">
      <img class="wel-other-img-cloud3" src="<?php echo base_url('docs/wel-other-cloud3v2.png'); ?>">

      <img class="wel-other-img-monk" src="<?php echo base_url('docs/wel-other-monk.png'); ?>">
      <img class="wel-other-img-hwoat" src="<?php echo base_url('docs/wel-other-hwoat.png'); ?>">
  </div>
  <div class="welcome-btm-other">
      <img class="dot-updown-animation-1" src="<?php echo base_url('docs/lightv2.png'); ?>" width="25" height="25">
      <img class="dot-updown-animation-2" src="<?php echo base_url('docs/lightv2.png'); ?>" width="15" height="15">
      <img class="dot-updown-animation-3" src="<?php echo base_url('docs/lightv2.png'); ?>" width="45" height="45">
      <img class="dot-updown-animation-4" src="<?php echo base_url('docs/lightv2.png'); ?>" width="65" height="65">
      <img class="dot-updown-animation-5" src="<?php echo base_url('docs/lightv2.png'); ?>" width="25" height="25">
      <img class="dot-updown-animation-6" src="<?php echo base_url('docs/lightv2.png'); ?>" width="35" height="35">
      <img class="dot-updown-animation-7" src="<?php echo base_url('docs/lightv2.png'); ?>" width="25" height="25">
      <img class="dot-updown-animation-8" src="<?php echo base_url('docs/lightv2.png'); ?>" width="15" height="15">
      <img class="dot-updown-animation-9" src="<?php echo base_url('docs/lightv2.png'); ?>" width="45" height="45">
      <img class="dot-updown-animation-10" src="<?php echo base_url('docs/lightv2.png'); ?>" width="65" height="65">
      <div class="text-center" style="padding-top:15.5%;">
          <span class="font-welcome-btm-other1">องค์การบริหารส่วนตำบลสว่าง</span>
          <span class="font-welcome-btm-other2">องค์การบริหารส่วนตำบลสว่าง</span>
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