        <!-- Contact Section -->
        <section id="contact" class="contactus margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_contact sections">
                            <div class="head_title text-center">
                                <h1>get in touch</h1>
                            </div>

                            <div class="row">
                                <div class="contact_contant">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_message_right_info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i> <span>23 Mulholland Drive, Suite 721. Los Angeles 10010
                                                        100 S. Main Street. Los Angeles 90012</span></li>

                                                <li><i class="fa fa-mobile-phone"></i> <span>+1-670-567-5590</span></li>

                                                <li><i class="fa fa-envelope-o"></i> <span>hello@clemocreative.com</span></li>
                                            </ul>

                                            <div class="work_socail transition">
                                                <a href=""><i class="fa fa-facebook img-circle"></i></a>
                                                <a href=""><i class="fa fa-twitter img-circle"></i></a>
                                                <a href=""><i class="fa fa-google-plus img-circle"></i></a>
                                                <a href=""><i class="fa fa-pinterest img-circle"></i></a>
                                                <a href=""><i class="fa fa-instagram img-circle"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- End of col-sm-6 -->

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_contant_left margin-top-60">
                                            <form action="<?= site_url('contact/input')?>" id="formid" method="post">
                                                <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                                <div class="form-group">
                                                    <label>name</label>
                                                    <input type="text" class="form-control" name="name" required="">
                                                </div>

                                                <div class="form-group">
                                                    <label>e-mail</label>
                                                    <input type="email" class="form-control" name="email" required="">
                                                </div>

                                                <div class="form-group">
                                                    <label>your message</label>
                                                    <textarea class="form-control" name="message" rows="8"></textarea>
                                                </div>

                                                <div class="">
                                                    <input type="submit" value="submit" class="btn">
                                                </div>
                                                <!--</div>--> 
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End of messsage contant-->
                            </div>
                        </div>
                    </div>
                </div><!-- End of row -->
            </div><!-- End of container -->
        </section><!-- End of contact Section -->


        <!-- Maps Section -->
        <section id="maps" class="maps ">
            <div class="ourmap"></div>
        </section><!-- End of Maps Section -->

        <!-- START SCROLL TO TOP  -->
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="<?= base_url() ?>assets/js/gmaps.min.js"></script>
        <script>
            var map = new GMaps({
                el: '.ourmap',
                lat: -12.043333,
                lng: -77.028333,
                scrollwheel: false,
                zoom: 15,
                zoomControl: true,
                panControl: false,
                streetViewControl: false,
                mapTypeControl: false,
                overviewMapControl: false,
                clickable: false,
                styles: [{'stylers': [{'hue': '#000'}, {saturation: -200},
                            {gamma: 0.50}]}]
            });
            map.addMarker({
                lat: -12.043333,
                lng: -77.028333
            });

        </script>
