        <!-- Work Section -->
        <section id="work" class="work sections">
            <div class="container">
                <div class="row">
                    <div class="main_mix_content text-center margin-top-120">
                        <div class="head_title">
                            <h1>works</h1>
                        </div><!-- End of head title -->


                        <div id="mixcontent" class="mixcontent text-center">
                            <?php foreach ($alldatawork as $data) { ?>
                            <div class="col-sm-4 col-xs-12 mix category-1">
                                <div class="single_mixi_portfolio">
                                    <img src="<?= base_url() ?>assets/images/<?= $data->image ?>" alt="" />
                                    <div class="single_work_overlay">
                                        <h4><?= $data->name ?></h4>
                                        <div class="separator"></div>
                                        <p><?= $data->job ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>    
                    <p><?php echo $pagination_link ?></p>                 
                </div><!-- End of row -->
            </div><!-- End of Contaier -->
        </section><!-- End of portfolio Section -->   

