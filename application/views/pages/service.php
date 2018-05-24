<!-- Service Section -->
        <section id="service" class="service sections margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h1>services</h1>
                        </div><!-- End of head title -->

                        <div class="main_service_area"> 
                            <?php foreach ($service as $no => $data): ?>
                                <?php if ($no % 2 == 0) { ?>
                            <div class="single_service_area margin-top-80">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="signle_service_left">
                                            <img src="<?= base_url('assets/images/'.$data->image) ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-push-1">
                                        <div class="single_service">
                                            <h3><?= $data->title ?></h3>
                                            <div class="separator2"></div>
                                            <p><?= $data->description ?></p>
                                            <a href="<?= site_url('detailservice/index/'.$data->id) ?>" class="btn btn-default">learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End of single service area -->
                            <?php }else{ ?>
                            <div class="single_service_area margin-top-80">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-push-6">
                                        <div class="signle_service_left">
                                            <img src="<?= base_url('assets/images/'.$data->image) ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-pull-6">
                                        <div class="single_service">
                                            <h3><?= $data->title ?></h3>
                                            <div class="separator2"></div>
                                            <p><?= $data->description ?></p>
                                            <a href="<?= site_url('detailservice/index/'.$data->id) ?>" class="btn btn-default">learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End of single service area -->
                            <?php } ?>
                            <?php endforeach ?>
                            <p><?php echo $pagination_link ?></p>   
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of Service Section -->
    
    