</div>

<div class="bg-link-other">
    <img class="dot-news-animation-1" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
    <img class="dot-news-animation-2" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
    <img class="dot-news-animation-3" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
    <img class="dot-news-animation-4" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
    <img class="dot-news-animation-5" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
    <img class="dot-news-animation-6" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
    <img class="dot-news-animation-7" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
    <img class="dot-news-animation-8" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
    <img class="dot-news-animation-9" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
    <img class="dot-news-animation-10" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
    <img class="dot-news-animation-11" src="<?php echo base_url('docs/animation-star-3.png'); ?>">
    <img class="dot-news-animation-12" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
    <img class="dot-news-animation-13" src="<?php echo base_url('docs/animation-star-1.png'); ?>">
    <img class="dot-news-animation-14" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
    <img class="dot-news-animation-15" src="<?php echo base_url('docs/animation-star-2.png'); ?>">
    <div class="crop">
        <div class="text-center" style="position: relative; z-index: 5; margin-left: -40px; padding-top: 80px;">
            <span class="font-link">
                องค์การบริหารส่วนตำบลสว่าง เลขที่ 232 หมู่ 4 ตำบลสว่าง อำเภอโพนทอง จังหวัดร้อยเอ็ด 45110<br>
                โทร 0-4303-9711 E-mail : saraban101@sawang.go.th
            </span>
        </div>
        <img class="cloud-animation cloud-animation-1" src="<?php echo base_url('docs/animation-cloud.png'); ?>">
        <img class="cloud-animation cloud-animation-2" src="<?php echo base_url('docs/animation-cloud.png'); ?>">
        <img class="cloud-animation cloud-animation-3" src="<?php echo base_url('docs/animation-cloud.png'); ?>">
        <img class="cloud-animation cloud-animation-4" src="<?php echo base_url('docs/animation-cloud.png'); ?>">
        <img class="cloud-animation cloud-animation-5" src="<?php echo base_url('docs/animation-cloud.png'); ?>">
        <img class="cloud-animation cloud-animation-6" src="<?php echo base_url('docs/animation-cloud.png'); ?>">
    </div>
</div>

<script>
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
</script>

<footer class="footer">
    <div class="" style="margin-left: 320px;">
        <span class="font-footer">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c.961 0 1.641.633 1.729 1.512h1.295v-.088c-.094-1.518-1.348-2.572-3.03-2.572-2.068 0-3.269 1.377-3.269 3.638v1.073c0 2.267 1.178 3.603 3.27 3.603 1.675 0 2.93-1.02 3.029-2.467v-.093H9.875c-.088.832-.75 1.418-1.729 1.418-1.224 0-1.927-.891-1.927-2.461v-1.06c0-1.583.715-2.503 1.927-2.503" />
            </svg> สงวนลิขสิทธิ์ 2567 โดย <a href="https://www.assystem.co.th/" target="_blank" style="font-weight: 700; color: #693708 !important; ">บริษัท เอเอส ซิสเต็ม จำกัด</a> . โทร <b style="font-weight: 600;">084-393-5580</b> .
        </span>
    </div>
</footer>
</main>

</body>

</html>