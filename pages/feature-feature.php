<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
else
{
	$id=0;
}

 $num=$obj->field_any_table_only_column('tbl_software_features');
 $numberofrows=ceil($num/2);
$feature=$obj->select_any("tbl_software_features","1 LIMIT $id,2");
$intro=$obj->select_any_one("tbl_software_feature_introdution_main","1");

//print_r($feature);
?>
 <section class="page-header bg_img" data-background="./assets/images/page-header.png">
       
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Features</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>  
                    <li>
                        Features
                    </li>
                </ul>
            </div>
        </div>
    </section>
	
	
	  <section class="feature-section padding-top oh pos-rel padding-bottom-2 pb-xl-0">
        <div class="feature-shapes style-two d-none d-lg-block">
            <img src="./assets/images/feature/feature-shape2.png" alt="feature">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-header mw-100">
                        <h5 class="cate">Our Amazing Features</h5>
                        <h2 class="title"><?php echo $intro['title'];?></h2>
                        <p class="mw-500"><?php echo $intro['data'];?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 rtl">
                    <div class="feature--thumb style-two pr-xl-4 ltr">
                        <div class="feat-slider owl-carousel owl-theme" data-slider-id="1">
						<?php
						foreach($feature as $featureSingle)
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
					<?php
					foreach($feature as $featureSingle)
					{
					?>
                        <div class="feature-item">
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
                    <div class="feat-nav">
					<?php
					if($id!=0)	
						{
					?>
                        <a href="feature.php?id=<?php echo $id-2; ?>" class="feat-prev"><i class="flaticon-left"></i></a>
						<?php
						}
						?>
						<?php
						if($numberofrows>=$id)
						{
						?>
                        <a href="feature.php?id=<?php echo $id+2; ?>" class="feat-next"><i class="flaticon-right"></i></a>
						<?php
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>