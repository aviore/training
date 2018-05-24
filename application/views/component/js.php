 <script src="<?= base_url() ?>assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
        <script src="<?= base_url() ?>assets/js/masonry/masonry.min.js"></script>
        <script type="text/javascript">
            $('.mixcontent').masonry();
        </script>

        <script src="<?= base_url() ?>assets/js/jquery.sliderPro.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function ($) {
                $('#example3').sliderPro({
                    width: 960,
                    height: 200,
                    fade: true,
                    arrows: false,
                    buttons: true,
                    fullScreen: false,
                    shuffle: true,
                    smallSize: 500,
                    mediumSize: 1000,
                    largeSize: 3000,
                    thumbnailArrows: true,
                    autoplay: false,
                    thumbnailsContainerSize: 960

                });
            });
        </script>
        <script src="<?= base_url() ?>assets/js/plugins.js"></script>
        <script src="<?= base_url() ?>assets/js/main.js"></script>