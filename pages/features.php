<?php 
$featureintro=$obj->select_any_one('tbl_software_feature_introdution','1');
$feature=$obj->select_any('tbl_software_features','1 order by software_features_id LIMIT 4');
?>
<section class="feature-section padding-top padding-bottom oh pos-rel">
        <div class="feature-shapes d-none d-lg-block">
            <img src="./assets/images/feature/feature-shape.png" alt="feature">
        </div>
        <div class="container">
            <div class="section-header mw-725">
                <h5 class="cate">Our Features</h5>
                <h2 class="title"><?php echo $featureintro['title'];?> </h2>
                <p>
                    <?php echo $featureintro['details'];?> 
                </p>
            </div>
            <div class="row">
                <div class="col-lg-5 rtl">
                    <div class="feature--thumb pr-xl-4 ltr">
                        <div class="feat-slider owl-carousel owl-theme" data-slider-id="1">
						<?php foreach($feature as $featureSingle)
						{
							?>
                            <div class="main-thumb">
                                <img src="../Assets/<?php echo str_replace("../","",$featureSingle['image']);?>" alt="feature">
                            </div>
<?php
						}
?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="feature-wrapper mb-30-none owl-thumbs" data-slider-id="1">
					<?php foreach($feature as $featureSingle)
						{
							?>
                        <div class="feature-item" style="height:fit-content;">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="../Assets/<?php echo str_replace("../","",$featureSingle['icon']);?>" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title"><?php echo $featureSingle['title'];?></h4>
                                <p><?php echo $featureSingle['details'];?></p>
                            </div>
                        </div>
                  <?php
						}
?>
         
                  
                    </div>
                </div>
            </div>
        </div>
    </section>