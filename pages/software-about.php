 <?php
 $aboutproduct=$obj->select_any_one('tbl_software_about_product','1');
 ?>
<section class="page-header bg_img" data-background="./assets/images/page-header.png">
       
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Our Products</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Our Products
                    </li>
                </ul>
            </div>
        </div>
    </section>   

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
                            <h5 class="cate">About Our Product</h5>
                            <h2 class="title"><?php echo $aboutproduct['title'];?></h2>
                            <p><?php echo $aboutproduct['details'];?></p>
                            <div class="downarrow d-none d-lg-block">
                                <img src="./assets/images/feature/downarrow.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a href="<?php echo $aboutproduct['video_url'];?>" class="feature-video-area popup">
                            <div class="thumb">
                                <img src="../Assets/<?php echo str_replace("../","",$aboutproduct['video_thumbnail']);?>" alt="feature">
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
		</section>