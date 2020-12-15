 <?php
 $teamintro=$obj->select_any_one('tbl_team_team_intro','1');
 $team=$obj->select_any('tbl_team_our_team','1');
 ?>
    <section class="team-section padding-top-2 padding-bottom oh">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Meet our most valued</h5>
                <h2 class="title"><?php echo $teamintro['title'];?></h2>
                <p>
                    <?php echo $teamintro['data'];?>
                </p>
            </div>
            <div class="row justify-content-center">
			<?php
			foreach($team as $teamSingle)
			{
			?>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="../Assets/<?php echo str_replace("../","",$teamSingle['image']);?>" alt="team">
                        </div>
                        <div class="team-content">
                            <h4 class="title">
                                <a href="#0"><?php echo $teamSingle['name'];?></a>
                            </h4>
                            <span class="info"><?php echo $teamSingle['designation'];?></span>
                           
                        </div>
                    </div>
                </div>
   <?php
			}
   ?>
            </div>
            <div class="load-more">
                <a href="team.php" class="load-more"><i class="flaticon-reload"></i></a>
            </div>
        </div>
    </section>