 <?php 
$whyus=$obj->select_any_one('tbl_about_why_choose_us','1');
$feature=$obj->select_any('tbl_software_features','1');
$productdetails=$obj->select_any_one('tbl_product_product','1');
?>
     <section class="tool-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-xl-5 rtl d-none d-lg-block">
                    <img src="../Assets/<?php echo str_replace("../","",$whyus['image']);?>" alt="recharge">
                </div>
                <div class="col-lg-6">
                    <div class="section-header left-style">
                        <h5 class="cate">Why Choose Us</h5>
                        <h2 class="title"><?php echo $whyus['title'];?></h2>
                        <p><?php echo $whyus['details'];?></p>
                    </div>
                    <div class="tool-wrapper mb-40">
                        <div class="tool-slider mb-30-none owl-carousel owl-theme">
						<?php
						foreach($feature as $featureSingle)
						{
						?>
                            <div class="to-access-item style-two">
                                <div class="to-access-thumb">
                                    <span class="anime"></span>
                                    <div class="thumb">
                                        <img src="../Assets/<?php echo str_replace("../","",$featureSingle['image']);?>" alt="recharge">
                                    </div>
                                </div>
                                <h5 class="title"><?php echo $featureSingle['title'];?></h5>
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
    <!--============= Experience Section Ends Here =============-->


    <!--============= Member Counter Section Starts Here =============-->
    <div class="member-counter-section oh">
        <div class="container">
            <div class="member-counter-area padding-bottom padding-top mt-0">
                <div class="member-bg">
                    <img src="./assets/images/how/how-much-bg.png" alt="how">
                </div>
                <div class="member-counter cl-white">
                    <h2 class="title"><span class="counter"><?php echo $productdetails['total_downloads'];?></span></h2>
                    <p>People Joined Already</p>
                    <span href="#0" class="custom-button">Download App</span>
                    <ul class="download-options" style="margin-top:25px;">
                        
                        <li>
                            <a href="<?php echo $productdetails['ios'];?>" class=""><i class="fab fa-apple"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $productdetails['playstore'];?>"><i class="fab fa-android"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>