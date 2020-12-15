 <?php
 $testimonial=$obj->select_any('tbl_faq_testimony','1');
 ?>
<section class="testimonial-section padding-top-2 padding-bottom-2">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Testimonials</h5>
                <h2 class="title">5000+ happy clients all around the world</h2>
            </div>
            <div class="testimonial-wrapper">
                <a href="#0" class="testi-next trigger">
                    <img src="./assets/images/client/left.png" alt="client">
                </a>
                <a href="#0" class="testi-prev trigger">
                    <img src="./assets/images/client/right.png" alt="client">
                </a>
                <div class="testimonial-area testimonial-slider owl-carousel owl-theme">
				<?php
				foreach($testimonial as $testimonialSingle)
				{
				?>
                    <div class="testimonial-item">
                        <div class="testimonial-thumb">
                            <div class="thumb">
                                <img src="../Assets/<?php echo str_replace("../","",$testimonialSingle['photo']);?>" alt="client">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="ratings">
							<?php
							$star=$testimonialSingle['rating'];
							for($i=1;$i<=$star;$i++)
							{
								?>
                                <span><i class="fas fa-star"></i></span> 
<?php
							}
?>								
                            </div>
                            <p>
                               <?php echo $testimonialSingle['comment'];?>
                            </p>
                            <h5 class="title"><a href="#0"><?php echo $testimonialSingle['name'];?></a></h5>
                        </div>
                    </div>
                 <?php
				}
				 ?>
                </div>
                <div class="button-area">
                    <a href="#0" class="button-2">Leave a review <i class="flaticon-right"></i></a>
                </div>
            </div>
        </div>
    </section>