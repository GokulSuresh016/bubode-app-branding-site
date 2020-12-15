<?php
$shortabout=$obj->select_any_one('tbl_basic_about_product','1'); 
$whyus=$obj->select_any_one('tbl_basic_why_us','1');
$ourservices=$obj->select_any('tbl_basic_why_us_services','1 order by basic_why_us_services_id limit 4');
?>
    <section class="amazing-feature-section pos-rel" id="feature">
        <div class="shape-container oh">
            <div class="bg_img feature-background" data-background="./assets/images/bg/amazing-feature-bg.jpg"></div>
            <div class="feature-top-shape d-none d-lg-block">
                <img src="./assets/css/img/feature-shape.png" alt="css">
            </div>
        </div>
        <div class="topper-feature oh padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-header left-style mb-lg-0 white-lg-black pos-rel">
                            <h5 class="cate">About Us</h5>
                            <h2 class="title"><?php echo $shortabout['about_title'];?></h2>
                            <p><?php echo $shortabout['description'];?></p>
                            <div class="downarrow d-none d-lg-block">
                                <img src="./assets/images/feature/downarrow.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a href="<?php echo $shortabout['video_url'];?>" class="feature-video-area popup">
                            <div class="thumb">
                                <img src="../Assets/<?php echo str_replace("../","",$shortabout['video_thumbnail']);?>" alt="feature">
                            </div>
                            <div class="button-area">
                                <h4 class="title">
                                    Watch Videos
                                </h4>
                                <div class="video-button">
                                    <i class="flaticon-play"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="amazing-feature-bottom padding-top padding-bottom pb-lg-0 pt-lg-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header left-style cl-white">
                            <h5 class="cate">Why Us</h5>
                            <h2 class="title"><?php echo $whyus['title'];?></h2>
                            <p><?php echo $whyus['description'];?></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center mb-30-none">
						<?php
							foreach($ourservices as $ourservicesSingle)
							{
							?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="am-item" style="height:350px;">
                                    <div class="am-thumb">
                                        <img src="../Assets/<?php echo str_replace("../","",$ourservicesSingle['icon']);?>" alt="feature">
                                    </div>
                                    <div class="am-content">
                                        <h5 class="title"><?php echo $ourservicesSingle['title'];?></h5>
                                    </div>
                                </div>
                            </div> 
									<?php
							}
								?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>