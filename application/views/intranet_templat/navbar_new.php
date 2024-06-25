  <!-- // ปุ่ม scroll-to-top  -->
  <a onclick="scrolltotopFunction()" id="scroll-to-top" title="Go to top"></a>
  <a id="scroll-to-back" title="Go to back"></a>
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