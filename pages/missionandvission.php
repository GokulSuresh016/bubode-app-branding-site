 <?php
 $vission=$obj->select_any_one('tbl_about_vission','1');
 $mission=$obj->select_any_one('tbl_about_mission','1');
 
 ?>
<section class="chart-section padding-bottom padding-top theme-six">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-xl-6 cl-white">
                    <div class="section-header left-style chart-header">
					 <h5 class="cate">Vission</h5>
                        <h2 class="title"><?php echo $vission['our_vission'];?></h2>
                        <p><?php echo $vission['details'];?></p>
                    </div>
                </div>
				<div class="col-lg-6 col-xl-6 cl-white">
				<div class="vertical" style="border-left:thick solid #ff0000;">
                    <div class="section-header left-style chart-header" style="padding:20px;">
					 <h5 class="cate">Mission</h5>
                        <h2 class="title"><?php echo $mission['our_mission'];?></h2>
                        <p><?php echo $mission['details'];?></p>
                    </div>
                </div>
				</div>
            </div>
        </div>
    </section>