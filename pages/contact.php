 <?php
$whycontactus=$obj->select_any_one('tbl_contact_why_contact_us','1');
$contact=$obj->select_any_one('tbl_contact_basic_contact','1');
 ?>
<section class="page-header bg_img" data-background="./assets/images/page-header.png">
    
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Contact Us</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Contact Us
                    </li>
                </ul>
            </div>
        </div>
    </section>
	<div class="row">
	  <div class="col-lg-12">
                    <div class="contact-content"> 
                        <div class="section-header" style="text-align:center;">
                            <h3 class="title"><?php echo $whycontactus['titile'];?></h3>
                            <p><?php echo $whycontactus['details'];?></p>
                            
                        </div>
                    </div>
                </div>
                </div>
				
				
				    <div class="do-section padding-bottom padding-top-2">
        <div class="container">
            <div class="row mb-30-none justify-content-center">
                <div class="col-md-4">
                    <div class="do-item cl-white" style="min-height:400px;">
                        <h3 class="title">Email Us</h3>
                        <p><a href="Mailto:<?php echo $contact['mail_id'];?>" style="background:none;"><?php echo $contact['mail_id'];?></a></p>
                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="do-item cl-white" style="min-height:400px;">
                        <h3 class="title">Call Us</h3>
                      <p><a href="Tel:<?php echo $contact['phone_1'];?>" style="background:none;">+91&nbsp;<?php echo $contact['phone_1'];?></a></p>
                       <p><a href="Tel:<?php echo $contact['phone_2'];?>" style="background:none;">+91&nbsp;<?php echo $contact['phone_2'];?></a></p>
                    </div>
                </div>
				  <div class="col-md-4">
                    <div class="do-item cl-white" style="min-height:400px;">
                        <h3 class="title">Visit Us</h3>
                        <p><?php echo $contact['address'];?></p>  
                    </div>
                </div>
            </div>
        </div>
    </div>