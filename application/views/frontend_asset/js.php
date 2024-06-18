<!-- Include Bootstrap CSS and JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<script src="<?= base_url('asset/'); ?>boostrap/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- awesome  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<!-- Add Swiper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
<script src="<?= base_url('asset/'); ?>swiper/swiper/swiper-bundle.min.js"></script>

<!-- reCAPTCHA2  -->
<script src="https://www.google.com/recaptcha/api.js?hl=th"></script>

<!-- reCAPTCHA 3 -->
<script src="https://www.google.com/recaptcha/api.js?render=6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x"></script>

<!-- chart พาย  -->
<script src="<?= base_url('asset/'); ?>rpie.js"></script>
<!-- ใช้ JavaScript ของ Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- ใช้ JavaScript ของ Slick Carousel  -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script src="<?= base_url('asset/'); ?>slick/slick-carousel/slick/slick.min.js"></script>

<!-- sweetalert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- รูปภาพ preview -->
<script src="<?= base_url('asset/'); ?>lightbox2/src/js/lightbox.js"></script>

<script>
    $(document).ready(function() {
        var $container = $('.wel-g1-sky');
        var duration = 20000; // 10 วินาที
        var pauseDuration = 3000; // 3 วินาทีสำหรับการค้างไว้
        var start = null;

        function slideBackground(timestamp) {
            if (!start) start = timestamp;
            var elapsed = timestamp - start;

            // คำนวณตำแหน่งใหม่ของ background
            var position = (elapsed / duration) * 100;

            // ตั้งค่าตำแหน่ง background ของ container
            $container.css('background-position', 'center ' + position + '%');

            // ดำเนินการ animation จนกระทั่งเวลาครบกำหนด
            if (elapsed < duration) {
                requestAnimationFrame(slideBackground);
            } else {
                // เมื่อถึงตำแหน่งสุดท้าย ค้างไว้ 3 วินาทีแล้วเริ่มใหม่
                setTimeout(function() {
                    start = null;
                    requestAnimationFrame(slideBackground);
                }, pauseDuration);
            }
        }

        requestAnimationFrame(slideBackground);
    });

    $(document).ready(function() {
        let currentIndex = 0; // เริ่มจาก div แรก
        const $contents = $('.fade-content'); // เลือก div ที่ต้องการสลับ

        function showNextContent() {
            $contents.eq(currentIndex).removeClass('active'); // ซ่อน div ปัจจุบัน
            currentIndex = (currentIndex + 1) % $contents.length; // คำนวณ index ของ div ถัดไป
            $contents.eq(currentIndex).addClass('active'); // แสดง div ถัดไป
        }

        // เริ่มต้นโดยแสดง div แรก
        $contents.eq(currentIndex).addClass('active');

        // เรียกฟังก์ชัน showNextContent ทุก 10 วินาที
        setInterval(showNextContent, 10000);
    });

    $(document).ready(function() {
        var $container = $('.welcome-other');
        var duration = 20000; // 10 วินาที
        var pauseDuration = 3000; // 3 วินาทีสำหรับการค้างไว้
        var start = null;

        function slideBackground(timestamp) {
            if (!start) start = timestamp;
            var elapsed = timestamp - start;

            // คำนวณตำแหน่งใหม่ของ background
            var position = (elapsed / duration) * 100;

            // ตั้งค่าตำแหน่ง background ของ container
            $container.css('background-position', 'center ' + position + '%');

            // ดำเนินการ animation จนกระทั่งเวลาครบกำหนด
            if (elapsed < duration) {
                requestAnimationFrame(slideBackground);
            } else {
                // เมื่อถึงตำแหน่งสุดท้าย ค้างไว้ 3 วินาทีแล้วเริ่มใหม่
                setTimeout(function() {
                    start = null;
                    requestAnimationFrame(slideBackground);
                }, pauseDuration);
            }
        }

        requestAnimationFrame(slideBackground);
    });



    // E-service ด้านบนสู่ด้านล่าง  ********************************************************************************
    function consoleText(words, id, colors) {
        if (colors === undefined) colors = ['#fff'];
        var visible = true;
        var con = document.getElementById('console');
        var letterCount = 1;
        var x = 1;
        var waiting = false;
        var target = document.getElementById(id);
        target.setAttribute('style', 'color:' + colors[0]);
        window.setInterval(function() {
            if (letterCount === 0 && waiting === false) {
                waiting = true;
                target.innerHTML = words[0].substring(0, letterCount);
                window.setTimeout(function() {
                    var usedColor = colors.shift();
                    colors.push(usedColor);
                    var usedWord = words.shift();
                    words.push(usedWord);
                    x = 1;
                    target.setAttribute('style', 'color:' + colors[0]);
                    letterCount += x;
                    waiting = false;
                }, 1000);
            } else if (letterCount === words[0].length + 1 && waiting === false) {
                waiting = true;
                window.setTimeout(function() {
                    x = -1;
                    letterCount += x;
                    waiting = false;
                }, 1000);
            } else if (waiting === false) {
                target.innerHTML = words[0].substring(0, letterCount);
                letterCount += x;
            }
        }, 120);
        window.setInterval(function() {
            if (visible === true) {
                con.className = 'console-underscore hidden';
                visible = false;
            } else {
                con.className = 'console-underscore';
                visible = true;
            }
        }, 400);
    }

    document.addEventListener("DOMContentLoaded", function() {
        consoleText(['องค์การบริหารส่วนตำบลสว่าง ยินดีต้อนรับค่ะ', 'มีบริการยื่นเอกสารออนไลน์', 'และมีบริการอื่นๆ อีกมากมาย'], 'text', ['#210B00', '#210B00', '#210B00']);
    });

    function consoleText(words, id, colors) {
        if (colors === undefined) colors = ['#fff'];
        var visible = true;
        var letterCount = 1;
        var index = 0;
        var waiting = false;
        var target = document.getElementById(id);
        target.setAttribute('style', 'color:' + colors[0]);

        function updateText() {
            if (letterCount === 0 && waiting === false) {
                waiting = true;
                target.innerHTML = '';
                window.setTimeout(function() {
                    index = (index + 1) % words.length;
                    target.setAttribute('style', 'color:' + colors[index]);
                    letterCount = 1;
                    waiting = false;
                    updateText();
                }, 1000);
            } else if (letterCount === words[index].length + 1 && waiting === false) {
                waiting = true;
                window.setTimeout(function() {
                    letterCount = 0;
                    waiting = false;
                    updateText();
                }, 2000); // Adjust this duration to control how long the full text is displayed
            } else if (waiting === false) {
                target.innerHTML = words[index].substring(0, letterCount);
                letterCount++;
                window.setTimeout(updateText, 120); // Adjust typing speed here
            }
        }

        updateText();
    }

    //   ***************************************************************************************************************

    // โหลด api สภาพอากาศตามมาทีหลัง  ********************************************************************************
    // $(document).ready(function() {
    //     // ใช้ AJAX เพื่อโหลดข้อมูลพยากรณ์อากาศหลังจากที่หน้าเว็บโหลดเสร็จแล้ว
    //     $.ajax({
    //         url: "<?php echo site_url('WeatherController/loadWeatherData'); ?>",
    //         method: 'GET',
    //         dataType: 'json',
    //         success: function(data) {
    //             if (data && data.channel && data.channel.item) {
    //                 var title = data.channel.item.title;
    //                 var description = data.channel.item.description;

    //                 // ลบแท็ก <br> ออกจาก description
    //                 var descriptionWithoutBr = description.replace(/<br\/>/g, ' ');

    //                 // อัปเดต marquee ด้วยข้อมูลที่ได้รับ
    //                 $('#weather-marquee').html(title + " " + descriptionWithoutBr);
    //             } else {
    //                 console.error('Failed to load weather data');
    //             }
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             console.error('Error fetching weather data:', textStatus, errorThrown);
    //         }
    //     });
    // });
    //   ***************************************************************************************************************

    // ไฟลอยขึ้น หน้าเพิ่มเติม  ********************************************************************************
    // ฟังก์ชั่นสุ่มเลขสำหรับการลอยขึ้น-ลง
    function getRandomIntUpDown(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // ฟังก์ชั่นใช้แอนิเมชันลอยขึ้น-ลง
    function applyRandomAnimationUpdown(element) {
        const randomLeft = getRandomIntUpDown(0, 1900);
        const randomDuration = getRandomIntUpDown(6, 10);

        element.style.left = `${randomLeft}px`;
        element.style.animation = `fadeInOutDownUp ${randomDuration}s infinite`;
    }

    // นำฟังก์ชั่นไปใช้กับองค์ประกอบที่ต้องการลอยขึ้น-ลง
    document.querySelectorAll('.dot-updown-animation-1, .dot-updown-animation-2, .dot-updown-animation-3, .dot-updown-animation-4, .dot-updown-animation-5, .dot-updown-animation-6, .dot-updown-animation-7, .dot-updown-animation-8, .dot-updown-animation-9, .dot-updown-animation-10').forEach(applyRandomAnimationUpdown);

    //   ********************************************************************************

    // scrolltotop เลื่อนไปบนสุดของจอ  ********************************************************************************
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
    //   ********************************************************************************

    // ปฏิทิน ทั้งหมด ********************************************************************************
    $(document).ready(function() {
        const $monthYear = $('#monthYear');
        const $daysContainer = $('#days');
        const $prevMonthBtn = $('#prevMonth');
        const $nextMonthBtn = $('#nextMonth');
        const $calendar = $('.calendar');
        $calendar.css('marginLeft', '30px');

        let currentDate = new Date();
        let selectedDayElement = null;
        let qCalender = [];

        function fetchEvents() {
            return $.getJSON('<?= site_url('calender_backend/get_events') ?>')
                .done(function(data) {
                    console.log('Fetched events:', data); // ตรวจสอบข้อมูลที่ได้รับ
                    qCalender = data;
                    renderCalendar(currentDate);
                })
                .fail(function(error) {
                    console.error('Error fetching events:', error);
                });
        }

        function renderCalendar(date) {
            const year = date.getFullYear();
            const month = date.getMonth();
            const today = new Date();

            const firstDayOfMonth = new Date(year, month, 1).getDay();
            const lastDateOfMonth = new Date(year, month + 1, 0).getDate();

            $monthYear.text(date.toLocaleDateString('th-TH', {
                month: 'long',
            }));

            $daysContainer.empty();

            for (let i = 0; i < firstDayOfMonth; i++) {
                $daysContainer.append(`<div class="day"></div>`);
            }

            for (let i = 1; i <= lastDateOfMonth; i++) {
                const isToday = (year === today.getFullYear() && month === today.getMonth() && i === today.getDate());
                const dayClass = isToday ? 'day current-day' : 'day';

                const currentDay = new Date(year, month, i);
                const hasEvent = qCalender.some(event => {
                    const eventDate = new Date(event.calender_date);
                    return (
                        eventDate.getFullYear() === currentDay.getFullYear() &&
                        eventDate.getMonth() === currentDay.getMonth() &&
                        eventDate.getDate() === currentDay.getDate()
                    );
                });

                const eventDot = hasEvent ? '<span class="event-dot"></span>' : '';
                $daysContainer.append(`<div class="${dayClass}" data-date="${year}-${month + 1}-${i}">${i}${eventDot}</div>`);
            }

            const totalDays = firstDayOfMonth + lastDateOfMonth;
            const remainingDays = 7 - (totalDays % 7);

            if (remainingDays < 7) {
                for (let i = 0; i < remainingDays; i++) {
                    $daysContainer.append(`<div class="day"></div>`);
                }
            }

            $('.day').on('click', function() {
                const clickedDate = $(this).data('date');
                if (clickedDate) {
                    const [year, month, date] = clickedDate.split('-').map(Number);
                    const selectedDate = new Date(year, month - 1, date);
                    console.log(`Selected date: ${selectedDate}`);
                    updateQCalenderDisplay(selectedDate);

                    if (selectedDayElement) {
                        $(selectedDayElement).removeClass('selected-day');
                    }
                    $(this).addClass('selected-day');
                    selectedDayElement = this;
                }
            });

            updateQCalenderDisplay(today);
        }

        function updateQCalenderDisplay(selectedDate) {
            const $qCalenderContainer = $('#qCalender');
            $qCalenderContainer.empty();

            const filteredEvents = qCalender.filter(event => {
                const eventDate = new Date(event.calender_date);
                return (
                    eventDate.getFullYear() === selectedDate.getFullYear() &&
                    eventDate.getMonth() === selectedDate.getMonth() &&
                    eventDate.getDate() === selectedDate.getDate()
                );
            });

            if (filteredEvents.length > 0) {
                filteredEvents.forEach(event => {
                    const date = new Date(event.calender_date);
                    const day_th = date.getDate();
                    const month_th = date.toLocaleString('th-TH', {
                        month: 'long'
                    });
                    const year_th = date.getFullYear() + 543;

                    const formattedDate = `${day_th} ${month_th} ${year_th}`;
                    $qCalenderContainer.append(`
                    <span class="font-calender2">วันที่ ${formattedDate}</span><br>
                    <span class="font-calender2 detail-text">${event.calender_detail}</span><br><br>
                `);
                });
            } else {
                const day_th = selectedDate.getDate();
                const month_th = selectedDate.toLocaleString('th-TH', {
                    month: 'long'
                });
                const year_th = selectedDate.getFullYear() + 543;

                const formattedDate = `${day_th} ${month_th} ${year_th}`;
                $qCalenderContainer.html(`<span class="font-calender2">วันที่ ${formattedDate}</span><br><span class="font-calender2">ไม่มีข้อมูลกิจกรรมในวันนี้</span>`);
            }
        }

        $prevMonthBtn.on('click', function() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar(currentDate);
        });

        $nextMonthBtn.on('click', function() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar(currentDate);
        });

        fetchEvents(); // Fetch events and render calendar
    });

    //   ********************************************************************************

    // สลับหน้าแสดงผล ข้าง banner ***************************************************************************
    function showImage(imageId) {
        var images = document.getElementsByClassName("chang_tmt_budjet");
        for (var i = 0; i < images.length; i++) {
            if (images[i].id === imageId) {
                images[i].style.display = "block";
            } else {
                images[i].style.display = "none";
            }
        }
    }
    //   ********************************************************************************

    // สุ่มวิกระพริบ และแสดงผล ข่าวจัดซื้อจัดจ้าง  ********************************************************************************
    // ฟังก์ชั่นสุ่มเลขสำหรับแอนิเมชันอื่นๆ
    function getRandomIntOther(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // ฟังก์ชั่นใช้แอนิเมชันอื่นๆ
    function applyRandomAnimation(element) {
        const randomLeft = getRandomIntOther(0, 1900);
        const randomDuration = getRandomIntOther(5, 10);

        element.style.left = `${randomLeft}px`;
        element.style.animation = `fadeInOut ${randomDuration}s infinite`;
    }

    // นำฟังก์ชั่นไปใช้กับองค์ประกอบที่ต้องการแอนิเมชันอื่นๆ
    document.querySelectorAll('.star-news-animation-1, .star-news-animation-2, .star-news-animation-3, .star-news-animation-4, .star-news-animation-5, .star-news-animation-6, .star-news-animation-7, .star-news-animation-8, .star-news-animation-9, .star-news-animation-10, .star-news-animation-11, .star-news-animation-12, .star-news-animation-13, .star-news-animation-14, .star-news-animation-15').forEach(applyRandomAnimation);
    //   ********************************************************************************

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
        var maxHeight = 1000; // กำหนดขนาดความสูงสูงสุด 1000px

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

    // active  ********************************************************************************
    function addClickListenerToButtons(containerId, buttonClassName, activeClassName) {
        var $header = $('#' + containerId);
        var $btns = $header.find('.' + buttonClassName);

        $btns.on('click', function() {
            $header.find('.' + buttonClassName + '.' + activeClassName).removeClass(activeClassName);
            $(this).addClass(activeClassName);
        });
    }


    // เรียกใช้ฟังก์ชันสำหรับทั้ง 2 กรณี
    addClickListenerToButtons("myDIV", "public-button", "active-public");
    addClickListenerToButtons("myDIV2", "new-button", "active-new");

    // *****************************************************************************************

    // รูปภาพ preview *********************************************************************
    $(document).ready(function() {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    });
    // **************************************************************************************
    // กดแล้วเปลี่ยนรูป navbar กลาง *********************************************************************
    $(document).ready(function() {
        function changeImage(src, element) {
            element.attr('src', src);
        }

        function restoreImage(src, element) {
            element.attr('src', src);
        }

        function handleButtonClick(event) {
            var clickedButton = $(event.currentTarget);
            var dropdownContent = clickedButton.next('.dropdown-content');

            // รีเซ็ตรูปทุก button ใน dropdown เป็นรูปปกติ
            $('.dropdown-trigger img[data-active-src]').each(function() {
                restoreImage($(this).data('non-active-src'), $(this));
            });

            // เปลี่ยนรูปของ button ที่ถูกคลิกเป็นรูป active
            clickedButton.find('img[data-active-src]').each(function() {
                changeImage($(this).data('active-src'), $(this));
            });
        }

        $('.dropdown-trigger').on('click', handleButtonClick);

        // สร้าง Event Listener สำหรับส่วนที่ไม่ใช่ button
        $(document).on('click', function(event) {
            var target = $(event.target);

            // ตรวจสอบว่าคลิกอยู่นอกเขตของ button หรือไม่
            if (!target.closest('.dropdown-container').length) {
                // คืนค่ารูปภาพเดิม
                $('.dropdown-trigger img[data-active-src]').each(function() {
                    restoreImage($(this).data('non-active-src'), $(this));
                });
            }
        });
    });
    // ปุ่มย้อนกลับของยกเลิก *********************************************************************
    function goBack() {
        window.history.back();
    }
    // **************************************************************************************
    // เมื่อ reCAPTCHA ผ่านการตรวจสอบหน้า home ************************************
    // v2
    // function enableLoginButton() {
    //     document.getElementById("loginBtn").removeAttribute("disabled");
    // }
    // v3
    // function onSubmit(token) {
    //     document.getElementById("loginBtn").removeAttribute("disabled");
    // }
    // grecaptcha.ready(function() {
    //     grecaptcha.execute('6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x', {
    //         action: 'submit'
    //     }).then(onSubmit);
    // });
    // v3 ล่าสุด
    function onSubmit(token) {
        document.getElementById("reCAPTCHA3").submit();
    }
    // ****************************************************************************

    // ตัวเลื่อนด้านล่างสุด หน้า home ******************************************************
    $(document).ready(function() {
        $(".slick-carousel").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            prevArrow: '<img src="docs/s.pre-home2.png" class="slick-prev">',
            nextArrow: '<img src="docs/s.next-home2.png" class="slick-next">',
        });
    });
    // ****************************************************************************

    // กดแล้วเปลี่ยนหน้า *******************************************************

    // เพิ่ม event listener สำหรับการเลือกประเภทของการร้องเรียน
    $(document).ready(function() {
        // เพิ่ม event listener สำหรับการเลือกประเภทของการร้องเรียน
        $('#ChangPagesComplain').change(function() {
            var selectedValue = $(this).val();
            console.log('Selected Value:', selectedValue);

            // ทำการ redirect ไปยัง URL ที่ต้องการ
            if (selectedValue) {
                var controllerUrl = ''; // URL ที่ต้องการไป
                switch (selectedValue) {
                    case 'corruption':
                        controllerUrl = '<?php echo site_url('Pages/adding_corruption'); ?>';
                        break;
                    case 'suggestions':
                        controllerUrl = '<?php echo site_url('Pages/adding_suggestions'); ?>';
                        break;
                    case 'complain':
                        controllerUrl = '<?php echo site_url('Pages/adding_complain'); ?>';
                        break;
                    case 'follow-complain':
                        controllerUrl = '<?php echo site_url('Pages/follow_complain'); ?>';
                        break;
                    case 'esv_ods':
                        controllerUrl = '<?php echo site_url('Pages/adding_esv_ods'); ?>';
                        break;
                }

                console.log('Controller URL:', controllerUrl);

                if (controllerUrl) {
                    window.location.href = controllerUrl;
                }
            }
        });
    });
    // ****************************************************************************

    // แสดงรูปภาพใหญ่ *******************************************************
    $(function() {
        "use strict";

        $(".popup img").click(function() {
            var $src = $(this).attr("src");
            $(".show").fadeIn();
            $(".img-show img").attr("src", $src);
        });

        $("span, .overlay").click(function() {
            $(".show").fadeOut();
        });

    });

    // JavaScript to adjust popup position on scroll
    document.addEventListener('scroll', function() {
        var imgShow = document.querySelector('.show .img-show');
        imgShow.style.top = window.innerHeight / 2 + window.scrollY + 'px';
    });

    // ****************************************************************************




    // function setScale() {
    //     const screenWidth = window.innerWidth;
    //     const mainElement = document.querySelector('main');

    //     if (screenWidth <= 768) {
    //         mainElement.style.transform = 'scale(0.22)';
    //     } else if (screenWidth > 768 && screenWidth <= 1420) {
    //         mainElement.style.transform = 'scale(0.67)';
    //     } else if (screenWidth > 1421 && screenWidth <= 1520) {
    //         mainElement.style.transform = 'scale(0.72)';
    //     } else {
    //         mainElement.style.transform = 'scale(1)';
    //     }
    // }
    // window.addEventListener('load', setScale);
    // window.addEventListener('resize', setScale);

    // ฟังก์ชันนี้จะถูกเรียกเมื่อคลิกที่ปุ่ม "แสดงผล"
    function showContentLikeDetail() {
        var contentDetail = document.querySelector('.content-like-detail');

        if (contentDetail) {
            // กำหนดให้ถ้าซ่อนอยู่ให้แสดง และถ้าแสดงอยู่ให้ซ่อน
            contentDetail.style.display = contentDetail.style.display === 'none' ? 'block' : 'none';
            // // แสดง div ที่ถูกซ่อนไว้
            // contentDetail.style.display = 'block';
        }
    }

    // navmid กดแล้วเปลี่ยนรูปภาพ *******************************************************

    // $(document).ready(function() {
    //     // เมื่อคลิกปุ่ม dropdown
    //     $('.dropdown-trigger').click(function() {
    //         // ถ้าปุ่มที่ถูกคลิกไม่มี class 'active' ให้ทำการลบ class 'active' จากทุก dropdown-trigger
    //         if (!$(this).hasClass('active')) {
    //             $('.dropdown-trigger').removeClass('active');

    //             // เปลี่ยนรูปภาพทุก dropdown-trigger เป็นรูปปกติ
    //             $('.dropdown-trigger img').attr('src', function() {
    //                 return $(this).attr('src').replace('-hover.png', '.png');
    //             });

    //             // เปลี่ยนรูปภาพของ dropdown-trigger ที่ถูกคลิกเป็นรูป active
    //             $(this).find('img').attr('src', function() {
    //                 return $(this).attr('src').replace('.png', '-hover.png');
    //             });
    //         }
    //     });

    //     // เมื่อคลิกที่ส่วนอื่นของหน้าเว็บ
    //     $(document).click(function(event) {
    //         // ถ้าคลิกที่ส่วนที่ไม่ใช่ dropdown-trigger ให้ลบ class 'active' และเปลี่ยนรูปภาพทุก dropdown-trigger เป็นรูปปกติ
    //         if (!$(event.target).closest('.dropdown-trigger').length) {
    //             $('.dropdown-trigger').removeClass('active');
    //             $('.dropdown-trigger img').attr('src', function() {
    //                 return $(this).attr('src').replace('-hover.png', '.png');
    //             });
    //         }
    //     });
    // });
    // *****************************************************************************


    // news ข่าว tab-link *******************************************************
    $(document).ready(function() {
        // เรียกใช้ฟังก์ชัน openTab เพื่อให้ Tab 1 เป็น active ทันทีหลังจากโหลดหน้าเว็บ
        openTab('tab1');
    });

    function openTab(tabId) {
        // ซ่อนทุก tab-content ทุกตัว
        $('.tab-content').hide();

        // แสดง tab-content ที่ถูกคลิก
        $('#' + tabId).show();

        // ทำการเปลี่ยนรูปภาพทุก tab-link เป็นรูปปกติ
        $('.tab-link img').each(function() {
            $(this).attr('src', $(this).attr('src').replace('-hover.png', '.png'));
        });

        // ทำการเปลี่ยนรูปภาพของ tab-link ที่ถูกคลิกเป็นรูป active
        $('.tab-link[onclick="openTab(\'' + tabId + '\')"] img').attr('src', function(_, oldSrc) {
            return oldSrc.replace('.png', '-hover.png');
        });
    }

    $(document).ready(function() {
        // เรียกใช้ฟังก์ชัน openTabTwo เพื่อให้ Tab 1 เป็น active ทันทีหลังจากโหลดหน้าเว็บ
        openTabTwo('tabtwo1');
    });

    function openTabTwo(tabId) {
        // ซ่อนทุก tab-content-two ทุกตัว
        $('.tab-content-two').hide();

        // แสดง tab-content-two ที่ถูกคลิก
        $('#' + tabId).show();

        // ทำการเปลี่ยนรูปภาพทุก tab-link เป็นรูปปกติ
        $('.tab-link-two img').each(function() {
            $(this).attr('src', $(this).attr('src').replace('-hover.png', '.png'));
        });

        // ทำการเปลี่ยนรูปภาพของ tab-link ที่ถูกคลิกเป็นรูป active
        $('.tab-link-two[onclick="openTabTwo(\'' + tabId + '\')"] img').attr('src', function(_, oldSrc) {
            return oldSrc.replace('.png', '-hover.png');
        });
    }
    // *****************************************************************************

    // navbar กิจกรรม / ผลงาน *******************************************************
    $(document).ready(function() {
        $('.dropdown-trigger').each(function() {
            var dropdownTrigger = $(this);
            var dropdownContent = dropdownTrigger.next(); // Assuming the dropdown is a sibling element

            dropdownTrigger.on('click', function() {
                if (dropdownContent.css('display') === 'block') {
                    dropdownContent.css('display', 'none');
                } else {
                    dropdownContent.css('display', 'block');
                }
            });

            $(document).on('click', function(e) {
                if (!dropdownContent.is(e.target) && !dropdownTrigger.is(e.target) && dropdownContent.has(e.target).length === 0 && dropdownTrigger.has(e.target).length === 0) {
                    dropdownContent.css('display', 'none');
                }
            });
        });
    });

    // *****************************************************************************

    // navbar คลิกแล้วเปลี่ยนรูปภาพ  *******************************************************
    function changeImage(src) {
        var img = event.target || event.srcElement;
        img.src = src;
    }

    function restoreImage(src) {
        var img = event.target || event.srcElement;
        img.src = src;
    }

    // ความพึงพอใจเว็บ กดไลค์ like
    $(document).ready(function() {
        $('#confirmButton').click(function() {
            // แสดงส่วนที่คุณต้องการ
            $('#submitSection').show();
            // ซ่อนปุ่ม "ยืนยัน"
            $(this).hide();
        });
    });

    // เมื่อ reCAPTCHA ผ่านการตรวจสอบ
    // document.getElementById("confirmButton").addEventListener("click", function() {
    //     grecaptcha.ready(function() {
    //         grecaptcha.execute('รหัสของคุณ', {
    //             action: 'submit'
    //         }).then(function(token) {
    //             // ถ้าต้องการส่ง token ไปยังเซิร์ฟเวอร์สำหรับการยืนยัน
    //             // คุณสามารถทำได้ที่นี่
    //             enableSubmit(); // เรียกใช้ฟังก์ชันสำหรับเปิดใช้งานปุ่ม Submit
    //         });
    //     });
    // });

    function enableSubmit() {
        document.getElementById("SubmitLike").removeAttribute("disabled");
    }

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        // grid: {
        //     rows: 2,
        // },
        // spaceBetween: 0,
        navigation: {
            nextEl: '.custom-button-next',
            prevEl: '.custom-button-prev',
        },
        autoplay: {
            delay: 4000, // ระยะเวลาในการเลื่อนระหว่างภาพ (มีหน่วยเป็นมิลลิวินาที)
            disableOnInteraction: false, // ถ้ามีการแสดงผลหรือควบคุมเลื่อนด้วยตัวเอง ให้ทำให้เลื่อนอัตโนมัติถูกระงับ
        },
    });

    // หากคุณใช้ JavaScript เพื่อกำหนดตำแหน่ง
    var customButtonPrev = document.querySelector('.custom-button-prev');
    var customButtonNext = document.querySelector('.custom-button-next');


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

    $(document).ready(function() {
        <?php if ($this->session->flashdata('password_mismatch')) { ?>
            Swal.fire({
                icon: 'warning',
                title: 'ตรวจพบปัญหา',
                text: 'รหัสผ่านไม่ตรงกัน!',
                footer: '<a href="#">ติดต่อผู้ดูแลระบบ?</a>'
            })
        <?php } ?>
    });

    function closeImageSlideMid() {
        document.querySelector('.image-slide-stick-mid').style.display = 'none';
    }
</script>