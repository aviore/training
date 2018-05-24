        <!-- Blog Section -->
        <section id="blog" class="blog sections margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h1>blog</h1>
                        </div><!-- End of head title -->

                        <div class="row">

                    <ul class="list-inline text-center margin-bottom-60">
                        <li class="filter" data-filter="all">All</li>
                        <?php foreach ($category as $no => $data) { ?>
                        <li class="filter creativemenu" data-filter=".category-<?= $data->id ?>">
                            <a href="<?= site_url('category/index/'.$data->id) ?>"><?= $data->category ?></a>
                        </li>
                        <?php } ?>
                    </ul>

                            <div class="main_blog_area"> 
                                <?php foreach ($blogs as $no => $row): ?>
                                    <?php if ($no % 2 == 0) { ?>
                                <div class="single_blog_area margin-top-80">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="signle_service_left">
                                                <img src="<?= base_url('assets/images/'.$row->image) ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-push-1">
                                            <div class="single_service">
                                                <h2><?= $row->title ?></h2>
                                                <h5><?= tgl_indo($row->date) ?></h5>
                                                <div class="separator2"></div>
                                                <p><?= $row->description ?></p>
                                                <a href="<?= site_url('detailblog/index/'.$row->id) ?>" class="btn btn-default">learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End of single service area -->
                                <?php }else{ ?>
                                <div class="single_blog_area margin-top-80">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-push-6">
                                            <div class="signle_service_left">
                                                <img src="<?= base_url('assets/images/'.$row->image) ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-pull-6">
                                            <div class="single_service">
                                                <h2><?= $row->title ?></h2>
                                                <h5><?= tgl_indo($row->date) ?></h5>
                                                <div class="separator2"></div>
                                                <p><?= $row->description ?></p>
                                                <a href="<?= site_url('detailblog/index/'.$row->id) ?>" class="btn btn-default">learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End of single service area -->
                                <?php } ?>
                            <?php endforeach ?>

                            <p><?php echo $pagination_link ?></p>
                            
                            </div>

                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of Service Section -->

        