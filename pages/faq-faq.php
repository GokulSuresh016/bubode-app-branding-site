 <?php
 $faq=$obj->select_any('tbl_faq_faq_type','1');
 ?>
<section class="page-header bg_img" data-background="./assets/images/page-header.png">
    
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Questions & Answers</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li> 
                    <li>
                        FAQs
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->


    
    <!--============= Faqs Section Starts Here =============-->
    <section class="faq-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <aside class="sticky-menu">
                        <div class="faq-menu bg_img mb-30" data-background="./assets/images/faq/faq-menu.png">
                            <ul id="faq-menu">
							<?php 
							foreach($faq as $faqSingle)
							{
								?>
                                <li class="nav-item">
                                    <a class="nav-link" href="#<?php echo $faqSingle['faq_faq_type_id'];?>"><?php echo $faqSingle['category']; ?></a>
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
					foreach($faq as $faqSingle)
					{
					?>
                        <div class="faq--wrapper" id="<?php echo $faqSingle['faq_faq_type_id'];?>">
                            <h3 class="main-title"><?php echo $faqSingle['category'];?></h3>
                            <div class="faq--area">
							<?php
					$faqquestions=$obj->select_any('tbl_faq_question_and_answers','category="'.$faqSingle['faq_faq_type_id'].'"');
					foreach($faqquestions as $faqquestionsSingle)
					{
							?>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title"><?php echo $faqquestionsSingle['question']; ?></h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p><?php echo $faqquestionsSingle['answer']; ?></p>
                                    </div>
                                </div>
                              <?php
					}
							  ?>
                           
                            </div>
                        </div>
						<?php	
					}
						?>
                    
                    </article>
                </div>
            </div>
        </div>
    </section>