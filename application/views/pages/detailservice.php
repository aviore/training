        <!-- service1 Section -->
        <section id="service1" class="service1 margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title text-center margin-top-80">
                            <h1><?= $detailservice->title ?></h1>
                        </div><!-- End of head title -->

                        <div class="main_about_area"> 
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="signle_about_left">
                                        <img src="<?= base_url('assets/images/'.$detailservice->image) ?>" alt="" />
                                        <div class="single_about_left_text">
                                            <div class="separator2"></div>
                                            <h4>we create <br />
                                                the best projects<br />
                                                for the best<br />
                                                companies!</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 col-sm-push-1">
                                    <div class="single_about">
                                        <div class="separator2"></div>
                                        <p><?= $detailservice->description ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
            <hr />
        </section><!-- End of service1 Section -->


        <!-- counter Seection -->
        <section id="counter" class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_counter sections text-center">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="single_counter_right">
                                        <h4 class="statistic-counter">3,800</h4>
                                        <div class="separator"></div>
                                        <p>project complete</p>
                                    </div>
                                </div><!-- End of col-sm-4 -->

                                <div class="col-sm-4 col-xs-12">
                                    <div class="single_counter_right">
                                        <h4 class="statistic-counter">4510</h4>
                                        <div class="separator"></div>
                                        <p>happy clients</p>
                                    </div>
                                </div><!-- End of col-sm-4 -->

                                <div class="col-sm-4 col-xs-12">
                                    <div class="single_counter_right">
                                        <h4 class="statistic-counter">2,800</h4>
                                        <div class="separator"></div>
                                        <p>cups of milk</p>
                                    </div>
                                </div><!-- End of col-sm-4 -->

                            </div><!-- End of row -->
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of counter Section -->

        <section id="events" class="events blackbg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_events_area padding-top-60 padding-bottom-60">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="single_events text-center whitetext">
                                        <p> <span class="e_text">best price</span><span class="separator3"></span><span class="e_price">$ 999</span> <span class="e_text1">/ event</span></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_events events_btn text-center">
                                        <a href="" class="btn btn-default">get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                            <!-- Clients Section -->
            <?php $this->load->view('component/client'); ?>

            <!-- Contact Section -->
            <?php $this->load->view('component/contact'); ?>

        
                            </div>
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Contaier -->
        </section><!-- End of portfolio Section --> 