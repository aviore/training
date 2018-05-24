	<!-- Home slider Section -->
        <?php $this->load->view('component/slider'); ?>

     <!-- Service Section -->
        <section id="service" class="service sections lightbg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h1>what we do?</h1>
                        </div><!-- End of head title -->

                        <div class="main_service_area"> 
                            <?php foreach ($dataservice as $no => $row) { 
                                    if ($no % 2 == 0) { ?>
                            <div class="single_service_area margin-top-80">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="signle_service_left">
                                            <img src="<?= base_url('assets/images/'.$row->image) ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-push-1">
                                        <div class="single_service">
                                            <h2><?= $row->title ?></h2>
                                            <div class="separator2"></div>
                                            <p><?= $row->description ?></p>
                                            <a href="<?= site_url('detailservice/index/'.$row->id) ?>" class="btn btn-default">learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End of single service area -->

                            <?php }else{ ?>

                            <div class="single_service_area margin-top-80">
                                <div class="row">

                                    <div class="col-sm-6 col-sm-push-6">
                                        <div class="signle_service_left">
                                            <img src="<?= base_url('assets/images/'.$row->image) ?>" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-sm-5 col-sm-pull-6">
                                        <div class="single_service">
                                            <h2><?= $row->title ?></h2>
                                            <div class="separator2"></div>
                                            <p><?= $row->description ?></p>
                                            <a href="<?= site_url('detailservice/index/'.$row->id) ?>" class="btn btn-default">learn more</a>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End of single service area -->

                            <?php } ?>
                            <?php } ?>
                            
                            

                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of Service Section -->

        <!-- Work Section -->
        <section id="work" class="work sections">
            <div class="container">
                <div class="row">
                    <div class="main_mix_content text-center">
                        <div class="head_title">
                            <h1>our best work</h1>
                        </div><!-- End of head title -->

                        <div id="mixcontent" class="mixcontent text-center">
                            <?php foreach ($datawork as $row) { ?>
                            <div class="col-sm-4 col-xs-12">
                                <div class="single_mixi_portfolio">
                                    <img src="<?= base_url() ?>assets/images/<?= $row->image ?>" alt="" />
                                    <div class="single_work_overlay">
                                        <h4><?= $row->name ?></h4>
                                        <div class="separator"></div>
                                        <p><?= $row->job ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                        <a href="<?= base_url() ?>work" class="btn">learn more</a>
                    </div>                     
                </div><!-- End of row -->
            </div><!-- End of Contaier -->
        </section><!-- End of portfolio Section -->        

            <!-- team section -->
            <?php $this->load->view('component/team'); ?>

            <!-- Clients Section -->
            <?php $this->load->view('component/client'); ?>

            <!-- Contact Section -->
            <?php $this->load->view('component/contact'); ?>
            
            
