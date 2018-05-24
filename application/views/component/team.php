   <!-- Team Section -->
        <section id="team" class="team colorsbg sections">
            <div class="container">
                <div class="row">
                    <div class="main_team_area">
                        <div class="head_title text-center">
                            <h1>best team</h1>
                        </div><!-- End of head title -->

                        <div class="main_team text-center">
                            <div class="single_team">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                        <?php foreach ($datateama as $no => $row) {  ?>
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="<?= base_url('assets/images/'.$row->image) ?>" alt="" />
                                                <h4><?= $row->name ?></h4>
                                                <div class="separator"></div>
                                                <p><?= $row->job ?></p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                        <?php } ?>
                                    </div>
                                </div><!-- End of col-sm-10 -->
                            </div>

                            <div class="single_team">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                        <?php foreach ($datateamb as $no => $row) {  ?>
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="<?= base_url('assets/images/'.$row->image) ?>" alt="" />
                                                <h4><?= $row->name ?></h4>
                                                <div class="separator"></div>
                                                <p><?= $row->job ?></p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                        <?php } ?>
                                    </div>
                                </div><!-- End of col-sm-10 -->
                            </div>
                        </div>
                    </div>
                </div><!-- End of row -->
            </div><!-- End of Contaier -->
        </section><!-- End of portfolio Section --> 
