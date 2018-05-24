<section id="clients" class="clients sections">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_clients_area text-center">
                            <div class="head_title">
                                <h1>clients say’s</h1>
                            </div><!-- End of head title -->

                            <div id="example3" class="slider-pro">
                                <div class="sp-slides sps_slider">
                                    <?php foreach ($testi as $data) { ?>
                                    <div class="sp-slide">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-6">
                                                    <div class="single_left_text text-right">
                                                        <h4 class="sp-layer" 
                                                            data-horizontal="right" data-vertical="0" data-width="81%"
                                                            data-show-transition="left" data-show-delay="200">
                                                            <?= $data->name ?>
                                                        </h4>

                                                        <div class="separator sp-layer sp-black" data-horizontal="340" data-vertical="70"></div>

                                                        <p class="sp-layer" 
                                                           data-horizontal="right" data-vertical="100" data-width="81%" 
                                                           data-show-transition="left" data-show-delay="400">
                                                            <?= $data->job ?>
                                                        </p>

                                                    </div>
                                                </div><!-- End of col-sm-6 -->
                                                <div class="col-sm-6 col-xs-6">
                                                    <div class="single_right_text text-left">
                                                        <p class="sp-layer right_sp_layer" data-width="100%">
                                                            <?= $data->description ?>
                                                        </p>
                                                    </div>
                                                </div><!-- End of col-sm-6 -->
                                            </div>
                                        </div><!-- End of col-sm-12 -->
                                    </div>
                                    <?php } ?>
                                </div>

                                <div class="sp-thumbnails">
                                    <?php foreach ($testi as $data) { ?>
                                    <img class="sp-thumbnail" src="<?= base_url('assets/images/'.$data->image) ?>"/>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Contaier -->
        </section><!-- End of portfolio Section --> 