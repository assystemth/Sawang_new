<script>
    const images = [
        "<?php echo base_url('docs/s.welcome-slide-1.jpg'); ?>",
        "<?php echo base_url('docs/s.welcome-slide-2.jpg'); ?>",
        "<?php echo base_url('docs/s.welcome-slide-3.jpg'); ?>"
    ];

    let currentIndex = 0;

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function randomizeZoomOrigin() {
        const origins = [
            "center center",
            "top left",
            "top right",
            "bottom left",
            "bottom right"
        ];
        return origins[getRandomInt(0, origins.length - 1)];
    }

    function applyRandomZoomOrigin(element) {
        const zoomOrigin = randomizeZoomOrigin();
        element.style.transformOrigin = zoomOrigin;
    }

    function changeImage() {
        const imageElement = document.getElementById('welcome');
        imageElement.style.backgroundImage = `url(${images[currentIndex]})`;
        applyRandomZoomOrigin(imageElement);

        // Restart the animation by changing the animation property
        imageElement.style.animation = 'none';
        void imageElement.offsetWidth; // Trigger reflow
        imageElement.style.animation = null;
        imageElement.style.animation = 'zoomOut 9s forwards';

        // Move to the next image in the array
        currentIndex = (currentIndex + 1) % images.length;
    }

    // Initial call to set the first image and start the loop
    changeImage();

    // Change image every 10 seconds
    setInterval(changeImage, 9000);
</script>