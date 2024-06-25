<style>
    body {
        padding: 0;
        margin: 0;
        height: auto;

        font-family: "Noto Sans Thai Looped", sans-serif;
    }

    main {
        margin: 0 auto;
        transform-origin: top left;
        width: 1920px;
        height: 2300px;
    }

    .crop {
        margin: 0 auto;
        padding: 0;
        width: 1500px;
        height: auto;
    }

    /* สำหรับโทรศัพท์ */
    @media (max-width: 279) {
        main {
            transform: scale(0.1);
        }
    }

    /* สำหรับโทรศัพท์ */
    @media (min-width: 280px) and (max-width: 319px) {
        main {
            transform: scale(0.146);
        }
    }

    /* สำหรับโทรศัพท์ */
    @media (min-width: 320px) and (max-width: 359px) {
        main {
            transform: scale(0.167);
        }
    }

    /* สำหรับโทรศัพท์ */
    @media (min-width: 360px) and (max-width: 374px) {
        main {
            transform: scale(0.19);
        }
    }

    /* สำหรับโทรศัพท์ */
    @media (min-width: 375px) and (max-width: 379px) {
        main {
            transform: scale(0.195);
        }
    }

    /* สำหรับโทรศัพท์ */
    @media (min-width: 380px) and (max-width: 411px) {
        main {
            transform: scale(0.205);
        }
    }

    /* สำหรับโทรศัพท์ */
    @media (min-width: 412px) and (max-width: 419px) {
        main {
            transform: scale(0.215);
        }
    }

    /* สำหรับโทรศัพท์ */
    @media (min-width: 420px) and (max-width: 480px) {
        main {
            transform: scale(0.225);
        }
    }

    /* สำหรับ iPad และ Tablet */
    @media (min-width: 481px) and (max-width: 539px) {
        main {
            transform: scale(0.4);
        }
    }

    /* สำหรับ iPad และ Tablet */
    @media (min-width: 540px) and (max-width: 546px) {
        main {
            transform: scale(0.282);
        }
    }

    @media (min-width: 547px) and (max-width: 640px) {
        main {
            transform: scale(0.29);
        }
    }

    @media (min-width: 641px) and (max-width: 711px) {
        main {
            transform: scale(0.33);
        }
    }

    /* สำหรับ iPad และ Tablet */
    @media (min-width: 712px) and (max-width: 767px) {
        main {
            transform: scale(0.371);
        }
    }

    /* สำหรับจอ 7.9 นิ้ว */
    @media (min-width: 768px) and (max-width: 818px) {
        main {
            transform: scale(0.4);
        }
    }

    /* สำหรับจอ 9.7 นิ้ว */
    @media (min-width: 819px) and (max-width: 911px) {
        main {
            transform: scale(0.425);
        }
    }

    @media (min-width: 912px) and (max-width: 1023px) {
        main {
            transform: scale(0.475);
        }
    }

    /* สำหรับจอ 10 นิ้ว */
    @media (min-width: 1024px) and (max-width: 1076px) {
        main {
            transform: scale(0.53);
        }
    }

    @media (min-width: 1077px) and (max-width: 1119px) {
        main {
            transform: scale(0.558);
        }
    }

    @media (min-width: 1120px) and (max-width: 1149px) {
        main {
            transform: scale(0.58);
        }
    }

    @media (min-width: 1150px) and (max-width: 1179px) {
        main {
            transform: scale(0.60);
        }
    }

    @media (min-width: 1180px) and (max-width: 1199px) {
        main {
            transform: scale(0.62);
        }
    }

    /* สำหรับจอ 10.2 นิ้ว */
    @media (min-width: 1200px) and (max-width: 1229px) {
        main {
            transform: scale(0.625);
        }
    }

    @media (min-width: 1230px) and (max-width: 1259px) {
        main {
            transform: scale(0.64);
        }
    }

    @media (min-width: 1260px) and (max-width: 1279px) {
        main {
            transform: scale(0.66);
        }
    }

    @media (min-width: 1280px) and (max-width: 1309px) {
        main {
            transform: scale(0.67);
        }
    }

    @media (min-width: 1310px) and (max-width: 1339px) {
        main {
            transform: scale(0.69);
        }
    }

    @media (min-width: 1340px) and (max-width: 1369px) {
        main {
            transform: scale(0.70);
        }
    }

    /* สำหรับจอ 10.5 นิ้ว */
    @media (min-width: 1370px) and (max-width: 1399px) {
        main {
            transform: scale(0.71);
        }
    }

    @media (min-width: 1400px) and (max-width: 1419px) {
        main {
            transform: scale(0.73);
        }
    }

    /* สำหรับจอ 11 นิ้ว */
    @media (min-width: 1420px) and (max-width: 1459px) {
        main {
            transform: scale(0.74);
        }
    }

    @media (min-width: 1460px) and (max-width: 1499px) {
        main {
            transform: scale(0.76);
        }
    }

    /* ส่วนนี้ลงไปปรับทีละ 19 เพิ่มสเกลที่ละ 0.015 px */
    @media (min-width: 1500px) and (max-width: 1519px) {
        main {
            transform: scale(0.785);
        }
    }

    @media (min-width: 1520px) and (max-width: 1539px) {
        main {
            transform: scale(0.795);
        }
    }

    @media (min-width: 1540px) and (max-width: 1559px) {
        main {
            transform: scale(0.805);
        }
    }

    @media (min-width: 1560px) and (max-width: 1579px) {
        main {
            transform: scale(0.815);
        }
    }

    @media (min-width: 1580px) and (max-width: 1599px) {
        main {
            transform: scale(0.825);
        }
    }

    @media (min-width: 1600px) and (max-width: 1619px) {
        main {
            transform: scale(0.835);
        }
    }

    @media (min-width: 1620px) and (max-width: 1639px) {
        main {
            transform: scale(0.845);
        }
    }

    @media (min-width: 1640px) and (max-width: 1659px) {
        main {
            transform: scale(0.855);
        }
    }

    @media (min-width: 1660px) and (max-width: 1679px) {
        main {
            transform: scale(0.865);
        }
    }

    @media (min-width: 1680px) and (max-width: 1699px) {
        main {
            transform: scale(0.875);
        }
    }

    @media (min-width: 1700px) and (max-width: 1719px) {
        main {
            transform: scale(0.885);
        }
    }

    @media (min-width: 1720px) and (max-width: 1739px) {
        main {
            transform: scale(0.895);
        }
    }

    @media (min-width: 1740px) and (max-width: 1759px) {
        main {
            transform: scale(0.905);
        }
    }

    @media (min-width: 1760px) and (max-width: 1779px) {
        main {
            transform: scale(0.915);
        }
    }

    @media (min-width: 17ค0px) and (max-width: 1799px) {
        main {
            transform: scale(0.925);
        }
    }

    @media (min-width: 1800px) and (max-width: 1819px) {
        main {
            transform: scale(0.935);
        }
    }

    @media (min-width: 1820px) and (max-width: 1839px) {
        main {
            transform: scale(0.945);
        }
    }

    @media (min-width: 1840px) and (max-width: 1859px) {
        main {
            transform: scale(0.955);
        }
    }

    @media (min-width: 1860px) and (max-width: 1879px) {
        main {
            transform: scale(0.965);
        }
    }

    @media (min-width: 1880px) and (max-width: 1899px) {
        main {
            transform: scale(0.975);
        }
    }

    @media (min-width: 1900px) and (max-width: 1919px) {
        main {
            transform: scale(0.985);
        }
    }

    @media (min-width: 1920) {
        main {
            transform: scale(1);
        }
    }

    .bg-top-nav {
        background-image: url('<?php echo base_url("docs/intranet/intra-top-nav.png"); ?>');
        background-repeat: no-repeat;
        background-size: 100%;
        width: 1920px;
        height: 80px;
        z-index: 1;
    }

    .font-top-nav {
        background: var(--Gold2, linear-gradient(90deg, #D9AA58 4.04%, #F2B940 27.1%, #DEAE3F 46.15%, #E0B344 52.16%, #E7C354 61.19%, #F2DE6F 70.21%, #FFFC8D 78.23%, #FFE875 82.24%, #FFD55E 88.25%, #AA7100 100.28%));
        background-size: 1000% 1000%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 36px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        z-index: 1;
        animation: gradient-font 10s linear infinite;
    }

    @keyframes gradient-font {
        0% {
            background-position: 100% 0%;
        }

        100% {
            background-position: 0% 0%;
        }
    }

    .limit-font-one {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
    }

    .limit-font-two {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .limit-font-three {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    .limit-font-four {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
    }

    .limit-font-five {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
    }

    .limit-font-six {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 6;
        -webkit-box-orient: vertical;
    }

    .font-header-name {
        overflow: hidden;
        color: #FFF;
        text-overflow: ellipsis;
        font-family: Kanit;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .font-header-rank {
        overflow: hidden;
        color: #D9D9D9;
        text-overflow: ellipsis;
        font-family: Kanit;
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }

    .img-profile {
        width: 58px;
    }

    .dropdown-toggle::after {
        display: none !important;
    }

    .dropdown-menu {
        /* margin-left: 100px; */
        width: 277px;
        height: 155px;
        /* background: #E2E2E2; */
    }

    .font-dropdown-name {
        color: #D9D9D9;
        font-family: Kanit;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .font-dropdown-rank {
        overflow: hidden;
        color: #D9D9D9;
        text-overflow: ellipsis;
        font-family: Kanit;
        font-size: 12px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }

    .welcome-other {
        /* background-image: url('<?php echo base_url("docs/s.welcome-other.png"); ?>'); */
        background-repeat: no-repeat;
        background-size: 100% 1000px;
        /* ขนาดเต็ม 1920px x 600px */
        width: 1920px;
        height: 600px;
        /* แสดงความสูงที่คุณต้องการ */
        overflow: hidden;
        position: absolute;
        background-position: top;
        /* เริ่มจากด้านบน */
    }

    .wel-nav-sky {
        background-image: url('<?php echo base_url("docs/bg-nav-sky1.png"); ?>');
        position: absolute;
        background-repeat: no-repeat;
        background-size: 100% 700px;
        /* ขนาดเต็ม 1920px x 600px */
        width: 1920px;
        height: 534px;
        /* แสดงความสูงที่คุณต้องการ */
        overflow: hidden;
        position: absolute;
        background-position: top;
        /* เริ่มจากด้านบน */
    }

    .light-nav-haeder {
        /* background-color: #000; */
        margin-top: -100px;
        padding-left: 190px;
        z-index: 5;
        position: absolute;
    }

    .wel-light-nav {
        animation: rotate-animation360 25s infinite linear;
    }

    @keyframes rotate-animation360 {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(180deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .wel-nav-home {
        background-image: url('<?php echo base_url("docs/b.wel-home-center.png"); ?>');
        position: relative;
        z-index: 3;
        width: 1920px;
        height: 534px;
    }

    .wel-g2-animation-cloud-1 {
        position: absolute;
        z-index: 1;
        top: 20px;
        left: 30px;
        animation: wel-g2-anima-cloud 40s linear infinite;
    }

    .wel-g2-animation-cloud-2 {
        position: absolute;
        z-index: 1;
        top: 10px;
        left: 18%;
        animation: wel-g2-anima-cloud 35s linear infinite;
    }

    .wel-g2-animation-cloud-3 {
        position: absolute;
        z-index: 1;
        top: 10px;
        left: 55%;
        animation: wel-g2-anima-cloud 35s linear infinite;
    }

    .wel-g2-animation-cloud-4 {
        position: absolute;
        z-index: 1;
        top: 60px;
        left: 65%;
        animation: wel-g2-anima-cloud 35s linear infinite;
    }

    @keyframes wel-g2-anima-cloud {
        0% {
            opacity: 0;
            /* จุดเริ่มต้นของเมฆ */
        }

        25% {
            opacity: 1;
            /* จุดเริ่มต้นของเมฆ */
        }

        75% {
            opacity: 1;
            /* จุดเริ่มต้นของเมฆ */
        }

        100% {
            left: 100%;
            opacity: 0;
            /* จุดสิ้นสุดของเมฆ */
        }
    }

    .welcome-btm-other {
        background-image: url('<?php echo base_url("docs/b.welcome-btm-other3.png"); ?>');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        z-index: 3;
        width: 1920px;
        height: 527px;
        position: relative;
        margin-top: 390px;
    }

    .dot-updown-animation-1,
    .dot-updown-animation-2,
    .dot-updown-animation-3,
    .dot-updown-animation-4,
    .dot-updown-animation-5,
    .dot-updown-animation-6,
    .dot-updown-animation-7,
    .dot-updown-animation-8,
    .dot-updown-animation-9,
    .dot-updown-animation-10 {
        position: absolute;
        z-index: 4;
    }

    @keyframes fadeInOutDownUp {
        0% {
            top: 400px;
            opacity: 2;
        }

        100% {
            top: -100px;
            opacity: 0;
        }
    }

    .font-welcome-btm-other1 {
        background: var(--Gold2, linear-gradient(90deg, #D9AA58 4.04%, #F2B940 27.1%, #DEAE3F 46.15%, #E0B344 52.16%, #E7C354 61.19%, #F2DE6F 70.21%, #FFFC8D 78.23%, #FFE875 82.24%, #FFD55E 88.25%, #AA7100 100.28%));
        background-size: 1000% 1000%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 36px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        z-index: 2;
        position: relative;
        animation: gradient-move-font 20s linear infinite;
    }

    .font-welcome-btm-other2 {
        font-size: 36px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        z-index: 1;
        position: relative;
        animation: gradient-move-font 20s linear infinite;
        text-shadow: 2px 2px 4px black;
        margin-left: -551px;
    }

    @keyframes gradient-move-font {
        0% {
            background-position: 100% 0%;
        }

        100% {
            background-position: 0% 0%;
        }
    }

    .main-container {
        display: flex;
        gap: 10px;
        /* ระยะห่างระหว่างคอลัมน์ */
    }

    .main-sidebar {
        width: 344px;
        border-left: 1px solid #E4E4E4;
        border-right: 1px solid #E4E4E4;
        padding-top: 65px;
        height: auto;
        z-index: 5;
        position: relative;
        margin-top: -200px;
    }

    .main-content {
        flex: 1;
        padding: 10px;
    }

    .hidden {
        display: none;
    }

    .navbars-active {
        background: linear-gradient(180deg, #FFF 0%, #D9D9D9 100%);
        width: 344px;
        height: 79px;
        color: #6C3A13;
        padding-left: 30px;
        padding-top: 15px;
    }

    .navbars {
        width: 344px;
        height: 79px;
        color: #6C3A13;
        padding-left: 30px;
        padding-top: 15px;
    }

    .navbars:hover {
        background: linear-gradient(180deg, #FFF 0%, #D9D9D9 100%);
        width: 344px;
        height: 79px;
        color: #6C3A13;
        padding-left: 30px;
        padding-top: 15px;
    }

    .font-nav {
        color: #6C3A13;
        font-family: "Noto Looped Thai";
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: 50px;
        text-decoration: none !important;
        line-height: 1;
    }

    .border-navbar {
        border-left: 1px solid #E4E4E4;
        border-right: 1px solid #E4E4E4;
        padding-top: 65px;
        z-index: 5;
        position: relative;
        margin-top: -205px;
        height: auto;
        max-height: 2300px;
    }

    .border-nav {
        border-bottom: 1px solid #E4E4E4;
        width: 260px;
        margin-left: 40px;

    }

    .underline {
        text-decoration: none !important;
    }

    /* .content {
        display: none;
    }

    .content.active {
        display: block;
    } */

    .divcontent {
        z-index: 5;
        position: relative;
        padding-left: 20px;
        margin-top: -140px;
    }

    .font-head-top {
        color: #6C3A13;
        text-align: center;
        font-family: "Noto Looped Thai";
        font-size: 36px;
        font-style: normal;
        font-weight: 400;
        line-height: 50px;
        /* 138.889% */
        position: relative;
        z-index: 4;
        padding-top: 45px;
    }

    /* .font-head-top1 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        position: relative;
        z-index: 4;
    }

    .font-head-top2 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 270px;
        position: relative;
        z-index: 4;
    }

    .font-head-top3 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 235px;
        position: relative;
        z-index: 4;
    }

    .font-head-top4 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 293px;
        position: relative;
        z-index: 4;
    }

    .font-head-top5 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 245px;
        position: relative;
        z-index: 4;
    }

    .font-head-top6 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 210px;
        position: relative;
        z-index: 4;
    }

    .font-head-top7 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 295px;
        position: relative;
        z-index: 4;
    }

    .font-head-top8 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 100px;
        position: relative;
        z-index: 4;
    }

    .font-head-top9 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 160px;
        position: relative;
        z-index: 4;
    }

    .font-head-top10 {
        color: #724118;
        font-size: 36px;
        font-weight: 600;
        margin-top: -285px;
        margin-left: 180px;
        position: relative;
        z-index: 4;
    } */

    .btn-add {
        border-radius: 17.073px;
        border: 1px solid #336F2B;
        background: #F7FFF6;
        display: flex;
        width: 222px;
        height: 50px;
        padding: 26.6px 0px 26.6px 0px;
        justify-content: center;
        align-items: center;
        gap: 5.7px;
        color: #336F2B;
        text-align: center;
        leading-trim: both;
        text-edge: cap;
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Kanit;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 25.351px;
        cursor: pointer;
    }

    .card-news {
        width: 250px;
        height: 440px;
        background-color: #F8F8F8;
    }

    .card-content-news {
        padding: 10px 10px;
    }

    .font-news-topic {
        color: #164354;
        font-family: Kanit;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        height: 48px;
    }

    .font-news-date {
        color: var(--caption-font, #8F7E6F);
        font-family: Kanit;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 100%;
        /* 12px */
    }

    .border-news {
        border: 1px solid #F1F0F0;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .font-news-detail {
        color: #164354;
        text-align: justify;
        font-family: Kanit;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        height: 126px;
    }

    .font-look-news {
        color: #693708;
        text-align: center;
        leading-trim: both;
        text-edge: cap;
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Kanit;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
    }

    /* ปุ่ม next page pagination ******************************************** */

    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
        position: relative;
    }

    .pagination li {
        margin: 0 5px;
        font-size: 21px;
        font-weight: bold;
    }

    .pagination .page-item.active .page-link {
        background-color: #50B1E5;
        /* สีเขียว */
        border-color: #50B1E5;
        color: #fff;
    }

    .pagination-item {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 45px;
        height: 45px;
        overflow: hidden;
        /* border-radius: 50%; */
        /* background-image: url('<?php echo base_url("docs/s.pages-next-pre.png"); ?>');
    background-size: 100% 100%; */
        /* แก้เป็น 100% 100% */
        background-repeat: no-repeat;
        /* เพิ่มบรรทัดนี้ */
        background-position: center;
    }

    .pagination .page-link {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #000;
        /* border-radius: 50%; */
        background-size: cover;
    }


    .pagination .page-link:hover {
        color: #F1F3F7;
        background-color: #006CA6;
    }

    /* เปลี่ยนรูปภาพเมื่อ hover */
    .pages-first:hover {
        content: url('<?php echo base_url("docs/s.pages-first-hover.png"); ?>');
    }

    .pages-pre:hover {
        content: url('<?php echo base_url("docs/s.pages-pre-hover.png"); ?>');
    }

    .pages-last:hover {
        content: url('<?php echo base_url("docs/s.pages-last-hover.png"); ?>');
    }

    .pages-next:hover {
        content: url('<?php echo base_url("docs/s.pages-next-hover.png"); ?>');
    }

    .pagination-jump-to-page {
        margin-left: -8px;
    }

    .pages-go:hover {
        content: url('<?php echo base_url("docs/b.pages-go-hover.png"); ?>');
    }

    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
        overflow: auto;
    }

    .popup-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close-button {
        color: white;
    }


    .searchTerm {
        border-radius: 15px;
        border: 1px solid #888;
        z-index: 1;
        position: relative;
    }

    .searchButton {
        border-radius: 15px;
        background-color: #fff;
        color: #888;
        transition: color 0.3s ease;
        height: 38px;
        border: 1px solid #888;
    }

    .searchButton:hover {
        color: #fff;
        background-color: #888;
    }

    .black {
        color: #000;
    }

    .font-head-pdf {
        color: #000;
        font-family: Kanit;
        font-size: 22px;
        font-style: normal;
        font-weight: 1000;
        line-height: 22px;
        /* 122.222% */
    }

    .font-download-pdf {
        font-family: Kanit;
        font-size: 20px;
    }

    #scroll-to-top {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-image: url('<?php echo base_url("docs/s.scroll-to-top.png"); ?>');
        background-repeat: no-repeat;
        width: 76px;
        height: 76px;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #scroll-to-top:hover {
        background-image: url('<?php echo base_url("docs/s.welcome-other-hover.png"); ?>');
        background-repeat: no-repeat;
        width: 76px;
        height: 76px;
    }

    #scroll-to-back {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 120px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-image: url('<?php echo base_url("docs/s.scroll-to-back.png"); ?>');
        background-repeat: no-repeat;
        width: 76px;
        height: 76px;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #scroll-to-back:hover {
        background-image: url('<?php echo base_url("docs/s.scroll-to-back-hover.png"); ?>');
        background-repeat: no-repeat;
        width: 76px;
        height: 76px;
    }

    th {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    td {
        padding-top: 10px;
    }

    .font-20 {
        color: #000;
        font-family: "Noto Looped Thai";
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
    }

    .red {
        color: red;
    }

    .btn-download {
        background: #809A13;
        color: #fff;
    }

    .btn-download:hover {
        background: #807B19;
        color: #fff;
    }

    .box-folder {
        padding: 20px;
        border: 1px solid #E6E6E6;
        border-radius: 24px;

        /* เงาด้านล่าง กับ ขวา ตัวสุดท้ายคือความใหญ่ หรือ blur */
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        /* เงาด้านล่าง กับ ซ้าย */
        /* box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.2); */
        /* เงาทั้ง4ด้าน เงาทุกด้าน */
        /* box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2),
                -5px -5px 10px rgba(0, 0, 0, 0.2); */
    }

    .box-folder-detail {
        padding: 20px;
        border: 1px solid #E6E6E6;
        border-radius: 24px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        height: 67vh;
    }

    .font-folder {
        font-size: 20px;
        color: #000;
    }

    .font-folder-detail {
        font-size: 26px;
        color: #000;
        font-weight: bold;
    }

    .file-pdf {
        padding: 20px;
        border: 1px solid #E6E6E6;
        border-radius: 15px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);

    }

    .file-pdf:hover {
        padding: 20px;
        border: 1px solid #F1F3F7;
        border-radius: 15px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        background-color: #F1F3F7;

    }

    .download-link-del-all {
        position: relative;
        /* เพื่อใช้ให้ ::after อยู่ภายในกรอบของลิงก์นี้ */
        display: inline-block;
        /* เพื่อให้ ::after สามารถแสดงภายในพื้นที่ของลิงก์ */
    }

    .download-link-del-all img {
        display: block;
        /* เพื่อจัดการกับขนาดของไอคอน */
    }

    .download-link-del-all::after {
        content: "ลบทั้งหมด";
        /* ข้อความที่จะปรากฏเมื่อ hover */
        position: absolute;
        /* ตำแหน่งสัมพัทธ์กับ .download-link */
        left: 50%;
        /* เริ่มจากกึ่งกลางลิงก์ในแนวนอน */
        bottom: 100%;
        /* วางไว้เหนือไอคอน */
        transform: translateX(-50%);
        /* จัดกึ่งกลางข้อความ */
        background-color: #333;
        /* สีพื้นหลังของ tooltip */
        color: #fff;
        /* สีของข้อความ */
        padding: 5px 10px;
        /* ระยะห่างระหว่างข้อความและขอบ */
        border-radius: 4px;
        /* มุมโค้งของ tooltip */
        opacity: 0;
        /* เริ่มต้นด้วยการซ่อน tooltip */
        white-space: nowrap;
        /* ป้องกันข้อความตัดบรรทัด */
        pointer-events: none;
        /* เพื่อป้องกันไม่ให้ tooltip มีผลต่อการ hover */
        transition: opacity 0.3s ease;
        /* เพิ่มความนุ่มนวลเมื่อแสดง tooltip */
        font-size: 14px;
        /* ขนาดตัวอักษรของ tooltip */
    }

    .download-link-del-all:hover::after {
        opacity: 1;
        /* แสดง tooltip เมื่อ hover */
    }

    .download-link-dow-all {
        position: relative;
        /* เพื่อใช้ให้ ::after อยู่ภายในกรอบของลิงก์นี้ */
        display: inline-block;
        /* เพื่อให้ ::after สามารถแสดงภายในพื้นที่ของลิงก์ */
    }

    .download-link-dow-all img {
        display: block;
        /* เพื่อจัดการกับขนาดของไอคอน */
    }

    .download-link-dow-all::after {
        content: "ดาวน์โหลดทั้งหมด";
        /* ข้อความที่จะปรากฏเมื่อ hover */
        position: absolute;
        /* ตำแหน่งสัมพัทธ์กับ .download-link */
        left: 50%;
        /* เริ่มจากกึ่งกลางลิงก์ในแนวนอน */
        bottom: 100%;
        /* วางไว้เหนือไอคอน */
        transform: translateX(-50%);
        /* จัดกึ่งกลางข้อความ */
        background-color: #333;
        /* สีพื้นหลังของ tooltip */
        color: #fff;
        /* สีของข้อความ */
        padding: 5px 10px;
        /* ระยะห่างระหว่างข้อความและขอบ */
        border-radius: 4px;
        /* มุมโค้งของ tooltip */
        opacity: 0;
        /* เริ่มต้นด้วยการซ่อน tooltip */
        white-space: nowrap;
        /* ป้องกันข้อความตัดบรรทัด */
        pointer-events: none;
        /* เพื่อป้องกันไม่ให้ tooltip มีผลต่อการ hover */
        transition: opacity 0.3s ease;
        /* เพิ่มความนุ่มนวลเมื่อแสดง tooltip */
        font-size: 14px;
        /* ขนาดตัวอักษรของ tooltip */
    }

    .download-link-dow-all:hover::after {
        opacity: 1;
        /* แสดง tooltip เมื่อ hover */
    }


    .card-all-report {
        border-radius: 14px;
        background: #FFF;
        box-shadow: 0px 4px 0px 0px rgba(0, 0, 0, 0.15);
        width: 100%;
        height: auto;
        padding: 25px 30px;
        border: 1px solid #D9D9D9;
    }

    .font-topic-all-report {
        color: #000;
        font-family: Kanit;
        font-size: 30px;
        font-style: normal;
        font-weight: 1000;
        line-height: 31.685px;
        /* 176.027% */
    }

    .font-head-all-report {
        color: #000;
        font-family: Kanit;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: 16.894px;
        /* 93.858% */
    }

    .font-detail-all-report {
        color: #000;
        font-family: Kanit;
        font-size: 18px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }

    .box-content-report1 {
        filter: drop-shadow(2px 4px 4px rgba(0, 0, 0, 0.15));
        width: 100%;
        height: 50px;
        border: solid 2px #F5900A;
        padding: 8px 15px;
        border-radius: 14px;
    }

    .box-content-report2 {
        filter: drop-shadow(2px 4px 4px rgba(0, 0, 0, 0.15));
        width: 100%;
        height: 50px;
        border: solid 2px #DBFFDD;
        padding: 8px 15px;
        border-radius: 14px;
    }

    .box-content-report3 {
        filter: drop-shadow(2px 4px 4px rgba(0, 0, 0, 0.15));
        width: 100%;
        height: 50px;
        border: solid 2px #FFA085;
        padding: 8px 15px;
        border-radius: 14px;
    }

    .box-content-report4 {
        filter: drop-shadow(2px 4px 4px rgba(0, 0, 0, 0.15));
        width: 100%;
        height: 50px;
        border: solid 2px #CFE5FF;
        padding: 8px 15px;
        border-radius: 14px;
    }

    .box-content-report5 {
        filter: drop-shadow(2px 4px 4px rgba(0, 0, 0, 0.15));
        width: 100%;
        height: 50px;
        border: solid 2px #CFD7FE;
        padding: 8px 15px;
        border-radius: 14px;
    }

    .box-content-report6 {
        filter: drop-shadow(2px 4px 4px rgba(0, 0, 0, 0.15));
        width: 100%;
        height: 50px;
        border: solid 2px #FFD361;
        padding: 8px 15px;
        border-radius: 14px;
    }

    .box-content-report7 {
        filter: drop-shadow(2px 4px 4px rgba(0, 0, 0, 0.15));
        width: 100%;
        height: 50px;
        border: solid 2px #FFE3E3;
        padding: 8px 15px;
        border-radius: 14px;
    }

    .card-all-complain {
        border-radius: 14px;
        background: #FFF;
        box-shadow: 0px 4px 0px 0px rgba(0, 0, 0, 0.15);
        width: 100%;
        height: auto;
        padding: 25px 30px;
        border: 1px solid #D9D9D9;
    }

    .btn-all-complain {
        border-radius: 14px;
        background: #FFBA5D;
        width: 103px;
        height: 38.351px;
        flex-shrink: 0;
        color: #000;
    }

    .btn-all-complain:hover {
        background: #FFBA5D;
        color: #fff;
    }

    .line-complain-left1 {
        border-left: solid 3px #875DFF;
        height: 40px;
    }

    .line-complain-left2 {
        border-left: solid 3px #F5900A;
        height: 40px;
    }

    .bg-complain-all {
        border-radius: 34px;
        background: #FFF;
        box-shadow: 0px 4px 1px 0px rgba(0, 0, 0, 0.08);
        width: 100%;
        height: auto;
        padding: 25px 30px;
    }

    .font-topic-all-complain {
        color: #000;
        font-family: Kanit;
        font-size: 24px;
        font-style: normal;
        font-weight: 1000;
        line-height: 31.685px;
        /* 176.027% */
    }

    .pad-30 {
        padding-top: 30px;
    }

    .pad-10 {
        padding-top: 10px;
    }

    .card-all-it {
        border-radius: 14px;
        background: #FFF;
        box-shadow: 2px 4px 9px 0px rgba(0, 0, 0, 0.15);
        width: 226px;
        height: 350px;
        flex-shrink: 0;
        padding: 10px 10px;
        text-align: center;
    }

    .card-sale {
        color: #000;
        text-align: center;
        font-family: "Noto Looped Thai";
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
    }

    .card-service-top {
        font-size: 14px;
        height: 25px;
    }

    .card-service {
        font-size: 12px;
        height: 105px;

    }

    .sale-img {
        border-radius: 50%;
        width: 112px;
        height: 113px;
        margin: auto;
    }

    .font-sale-gray {
        color: #B4B4B4;

    }

    .font-sale-black {
        color: #000000;
    }

    .border-gray {
        border-bottom: 1px solid;
        color: #E2E2E2;
        margin-top: -10px;
        padding: 2px 5px 2px 2px;

    }

    .btn-all-it {
        border-radius: 14px;
        background: #37AF19;
        width: 103px;
        height: 38.351px;
        flex-shrink: 0;
        color: #fff;
    }

    .btn-all-it:hover {
        background: #37AF19;
        color: #fff;
    }

    .bg-link-other {
    background-image: url('<?php echo base_url("docs/b.bg-footer-other.png"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    height: 925px;
    width: 1920px;
    margin: auto;
    z-index: 1;
    /* นี้จะทำให้ element อยู่ตรงกลางตามแนวนอน */
    /* margin-top: 200px; */

  }

  .dot-news-animation-1 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 370px; */
    /* margin-left: 20px; */
    z-index: 3;
  }

  .dot-news-animation-2 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 720px; */
    /* margin-left: 68px; */
    z-index: 3;
  }

  .dot-news-animation-3 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 40px; */
    /* margin-left: 115px; */
    z-index: 3;
  }

  .dot-news-animation-4 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 120px; */
    /* margin-left: 300px; */
    z-index: 3;
  }

  .dot-news-animation-5 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 732px; */
    /* margin-left: 720px; */
    z-index: 3;
  }

  .dot-news-animation-6 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 423px; */
    /* margin-left: 1030px; */
    z-index: 3;
  }

  .dot-news-animation-7 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 305px; */
    /* margin-left: 1120px; */
    z-index: 3;
  }

  .dot-news-animation-8 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 717px; */
    /* margin-left: 1180px; */
    z-index: 3;
  }

  .dot-news-animation-9 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 745px; */
    /* margin-left: 1500px; */
  }

  .dot-news-animation-10 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 730px; */
    /* margin-left: 1740px; */
    z-index: 3;
  }

  .dot-news-animation-11 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 370px; */
    /* margin-left: 1810px; */
    z-index: 3;
  }

  .dot-news-animation-12 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 60px; */
    /* margin-left: 1880px; */
    z-index: 3;
  }

  .dot-news-animation-13 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 605px; */
    /* margin-left: 1870px; */
    z-index: 3;
  }

  .dot-news-animation-14 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 605px; */
    /* margin-left: 1870px; */
    z-index: 3;
  }

  .dot-news-animation-15 {
    animation: blink-2 4s both infinite;
    position: absolute;
    /* margin-top: 605px; */
    /* margin-left: 1870px; */
    z-index: 3;
  }

  /* แสงวิบวับ fade in fade out  */
  @-webkit-keyframes blink-2 {
    0% {
      opacity: 1;
    }

    50% {
      opacity: 0.1;
    }

    100% {
      opacity: 1;
    }
  }

  .font-link {
    color: #fff;
    text-align: center;
    font-family: "Noto Looped Thai UI";
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 33.366px;
    /* 139.024% */
  }

  @keyframes fadeinleftoutright {
    0% {
      left: -100px;
      opacity: 0;
      visibility: hidden;
    }

    5% {
      left: 5%;
      opacity: 0;
      visibility: visible;
    }

    50% {
      left: 50%;
      opacity: 1;
    }

    90% {
      left: 90%;
      opacity: 0;
    }

    100% {
      left: 100%;
      opacity: 0;
      visibility: hidden;
    }
  }

  .cloud-animation {
    position: absolute;
    white-space: nowrap;
    animation: fadeinleftoutright 30s linear infinite;
    z-index: 1;
    visibility: hidden;
  }

  .cloud-animation-1 {
    margin-top: -20px;
  }

  .cloud-animation-2 {
    margin-top: 30px;
    animation-delay: 2.5s;
  }

  .cloud-animation-3 {
    margin-top: 95px;
    animation-delay: 6s;
  }

  .cloud-animation-4 {
    margin-top: -50px;
    animation-delay: 7.9s;
  }

  .cloud-animation-5 {
    margin-top: 100px;
    animation-delay: 11.6s;
  }

  .cloud-animation-6 {
    margin-top: 80px;
    animation-delay: 15s;
  }

  
  .footer {
    background-image: url('<?php echo base_url("docs/b.bg-bar-footer.png"); ?>');
    background-repeat: no-repeat;
    background-size: 100%;
    min-height: 75px;
    width: 1920px;
    position: absolute;
    z-index: 1;
    padding-top: 25px;
    padding-left: 350px;
  }

  .font-footer {
    color: #fff;
    text-align: center;

    font-size: 20px;
    font-style: normal;
    line-height: 33.366px;
    /* 178.571% */
  }

</style>