 <?php
 $banner=$obj->select_any('tbl_banner_banner_details','1');
 $productdetails=$obj->select_any_one('tbl_product_product','1');
 ?>
 <section class="banner-1 bg_img oh" data-background="./assets/images/banner/banner-bg-1.jpg">
        <div class="dot-1 d-none d-lg-block">
            <img src="./assets/images/banner/dot-big.png" alt="banner">
        </div>
        <div class="dot-2 d-none d-lg-block">
            <img src="./assets/images/banner/dot-big.png" alt="banner">
        </div>
        <div class="dot-3">
            <img src="./assets/images/banner/dot-sm.png" alt="banner">
        </div>
        <div class="dot-4">
            <img src="./assets/images/banner/dot-sm.png" alt="banner">
        </div>
        <div class="banner-1-shape d-none d-lg-block">
            <img src="./assets/css/img/banner1-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content-1 cl-white">
					<div class="banner-1-slider-wrapper">
					
                        <div class="banner-1-slider owl-carousel owl-theme">
						<?php
					foreach($banner as $bannerSingle)
					{
					?>
                            <div class="banner-thumb">
                        <h1 class="title"><?php echo $bannerSingle['title'];?></h1>
                        <p>
                            <?php echo $bannerSingle['short_description'];?>
                        </p>
                        <div class="banner-button-group">
                            <a href="<?php echo $productdetails['playstore'];?>" class="button-4" style="width:200px;text-align:center;">For Android</a>
                            <a href="<?php echo $productdetails['ios'];?>" class="button-4" style="width:200px;text-align:center;">For IOS  </a>
                        </div>
                    </div>	
<?php
					}
					?>					
                    </div>
					
                    </div>
                    </div>
					
                </div>
                <div class="col-lg-5">
                    <div class="banner-1-slider-wrapper">
                        <div class="banner-1-slider owl-carousel owl-theme">
						<?php
						foreach($banner as $bannerSingle)
						{
						?>
                            <div class="banner-thumb">
                                <img src="../Assets/<?php echo str_replace("../","",$bannerSingle['banner_image']);?>" alt="banner">
                            </div>   
<?php
						}
?>							
                        </div>
                        <div class="ban-click">
                            <div class="thumb">
                                <img src="./assets/images/banner/click.png" alt="banner">
                            </div>
                            <span class="cl-white">Click Me</span>
                        </div>
                        <div class="arrow">
                            <img src="./assets/images/banner/arrow.png" alt="banner">
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>