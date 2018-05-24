<?php $this->load->view('component/head'); ?>

    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        
            <!-- Menu Section -->       
            <?php $this->load->view('component/menu'); ?>

            <!-- isi konten -->
            <?php $this->load->view($page); ?>

            <!-- footer Section -->
            <?php $this->load->view('component/footer'); ?>

            <!-- START SCROLL TO TOP  -->
            <?php $this->load->view('component/scroll'); ?>
            
            <!-- isi js -->
            <?php $this->load->view('component/js'); ?>

    </body>
</html>
