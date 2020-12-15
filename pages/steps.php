<?php
$steps=$obj->select_any('tbl_software_three_step_installation_','1 order by software_three_step_installation__id limit 3');

?>
<section class="how-section padding-bottom padding-top" id="how">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">How To Use</h5>
                <h2 class="title">Let’s See How It Work</h2>
                <p>It's easier than you think.Follow 3 simple easy steps</p>
            </div>
            <div class="row justify-content-xl-between justify-content-center mb-40-none">
			<?php 
			foreach($steps as $stepsSingle)
			{
			?>
               <div class="col-lg-4 col-sm-6 col-xl-3">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="../Assets/<?php echo str_replace("../","",$stepsSingle['image']);?>" alt="how">
                        </div>
                        <div class="how-content">
                            <a href="#0" class="button-3"><?php echo $stepsSingle['title'];?></a>
                            <h5 class="title"><?php echo $stepsSingle['sub_title'];?></h5>
                            <p><?php echo $stepsSingle['comment'];?></p>
                        </div>
                    </div>
                </div>
              <?php
			}
			  ?>
              
            </div>
        </div>
    </section>