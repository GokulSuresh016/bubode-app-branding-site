 <?php
$about=$obj->select_any_one('tbl_about_our_story','1');
 ?>
<section class="page-header bg_img" data-background="./assets/images/page-header.png">
       
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">About Us</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </section>
<!--about us image end-->    
	<section class="about-section padding-top padding-bottom oh">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="about-thumb rtl pr-xl-15">
                        <img src="../Assets/<?php echo str_replace("../","",$about['image']);?>" alt="about">
                    </div>
                </div>
                <div class="col-xl-7 pl-xl-0">
                    <div class="about-content">
                        <div class="section-header left-style">
                            <h5 class="cate">A Few Words About Us</h5>
                            <h2 class="title"><?php echo $about['moto'];?></h2>
                            <p><?php echo $about['story'];?></p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>