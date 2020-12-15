 <?php
 $privacy=$obj->select_any('tbl_privacy_privacy_category','1');
 ?>
<section class="page-header bg_img oh" data-background="./assets/images/page-header.png">
       
        <div class="page-left-thumb">
            <img src="./assets/images/bg/privacy-header.png" alt="bg">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Our Privacy Policy</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                   
                    <li>
                        Privacy
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->


    
    <!--============= Privacy Section Starts Here =============-->
    <section class="privacy-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header">
                        <h2 class="title">Privacy Policy</h2>
                        <p>Please read this Privacy Policy carefully before use</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <aside class="sticky-menu">
                        <div class="faq-menu bg_img" data-background="./assets/images/faq/faq-menu.png">
                            <ul id="faq-menu">
                            <?php
							foreach($privacy as $privacySingle)
							{
							?>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="#<?php echo $privacySingle['privacy_privacy_category_id'];?>"><?php echo $privacySingle['category'];?></a>
                                </li>
                             
                              <?php
							}
							?>
                            
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8 col-xl-7">
                    <article class="mt-70 mt-lg-0">
					<?php
					foreach($privacy as $privacySingle)
					{
					?>
                        <div class="privacy-item" id="<?php echo $privacySingle['privacy_privacy_category_id'];?>">
                            <h3 class="title"><?php echo $privacySingle['category'];?></h3>
							<?php
							$privacydata=$obj->select_any('tbl_privacy_privacy_details','category="'.$privacySingle['privacy_privacy_category_id'].'"');
							foreach($privacydata as $privacydataSingle)
							{
							?>
                            <p><?php echo $privacydataSingle['details'];?></p>
								<?php
							}
								?>
                        </div>
						<?php
					}
						?>
                        
                     
                    </article>
                </div>
            </div>
        </div>
    </section>
