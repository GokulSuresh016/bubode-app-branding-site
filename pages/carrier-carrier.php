 <?php
 $carrier=$obj->select_any_one('tbl_carrier_carrier_details','1');
 
 ?>
<section class="page-header bg_img" data-background="./assets/images/page-header.png">
       
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Carrier With Us</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Carrier 
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->
    <section class="advance-feature-section padding-top-2 padding-bottom-2">
        <div class="container">
            <div class="advance-feature-item padding-top-2 padding-bottom-2">
                <div class="advance-feature-thumb">
                    <img src="./assets/images/feature/advance1.png" alt="feature">
                </div>
                <div class="advance-feature-content">
                    <div class="section-header left-style mb-olpo">
                        <h5 class="cate">Grow With Us</h5>
                        <h2 class="title"><?php echo $carrier['title'];?></h2>
                        <p><?php echo $carrier['details'];?></p>
                    </div>
                    <a href="Mailto:<?php echo $carrier['mail'];?>" class="get-button">Mail Us<i class="flaticon-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    
    <!--============= Contact Section Starts Here =============-->
