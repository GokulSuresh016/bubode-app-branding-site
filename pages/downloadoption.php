  <?php
 $upcoming=$obj->select_any_one('tbl_software_up_coming_features','1');
  $productdetails=$obj->select_any_one('tbl_product_product','1');
 ?>
 <section class="newslater-section oh bg_img pos-rel" data-background=
"./assets/images/bg/newslater2.jpg">
        <div class="top-shape d-none d-lg-block">
            <img src="./assets/css/img/top-shape2.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-lg-block">
            <img src="./assets/css/img/bottom-shape2.png" alt="css">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newslater-area padding-bottom padding-top">
                        <div class="section-header left-style cl-white">
                            <h5 class="cate">Our Up Coming Features</h5>
                            <h2 class="title"><?php echo $upcoming['title'];?></h2>
                            <p>
                                <?php echo $upcoming['details'];?>
                            </p>
                        </div>
                        
                            
                         <div class="row">     
					  <div class="col-md-6" style="text-align:center;">     
					
                          
                      
                     
                            <a href="<?php echo $productdetails['ios'];?>" class="active"><i class="fab fa-apple button-4" style="min-width:200px;align-items:center;">&nbsp;&nbsp;IOS</i></a>
                       </div>
					   <div class="col-md-6">     
					
                            <a href="<?php echo $productdetails['playstore'];?>"><i class="fab fa-android button-4" style="min-width:200px;align-items:center;">&nbsp;&nbsp;ANDROID</i></a>
                      
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="subscribe-thumb-2">
                        <img src="../Assets/<?php echo str_replace("../","",$upcoming['image']);?>" alt="newslater">
                    </div>
                </div>
            </div>
        </div>
    </section>