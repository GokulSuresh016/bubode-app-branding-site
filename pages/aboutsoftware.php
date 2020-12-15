 <?php
 $aboutproduct=$obj->select_any_one('tbl_about_about_product_details','1');
 ?>   
   <section class="oh creativity-section padding-bottom bg-max-lg-ash bg_img top_center" data-background="./assets/images/feature/creative-bg.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 padding-top">
                    <div class="section-header left-style mb-0">
                        <h5 class="cate">A Story About Our Product</h5>
                        <h2 class="title"><?php echo $aboutproduct['title'];?></h2>
                        <p> <?php echo $aboutproduct['details'];?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 d-none d-lg-block">
                    <img src="../Assets/<?php echo str_replace("../","",$aboutproduct['image']);?>" alt="feature">
                </div>
            </div>
        </div>
    </section>