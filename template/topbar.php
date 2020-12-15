 <?php
 $productdetails=$obj->select_any_one('tbl_product_product','1');
 ?>   
   <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.php">
                        <img src="./assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php">Home</a>   
                    </li>
                    <li>
                        <a href="about.php">About</a>  
                    </li>
                   
                    <li>
                        <a href="software.php">App</a>
                    </li>
                    <li>
                        <a href="feature.php">Features</a>
                    
                    </li>
					 <li>
                        <a href="carrier.php">Carrier</a>
                    </li>
					 <li>
                        <a href="faq.php">FAQs</a>
                    </li>
                    <li>
                        <a href="contact-main.php">contact</a>
                    </li>
                     
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
				<div class="header-right">
                  
                    <a href="<?php echo $productdetails['playstore'];?>" class="header-button d-none d-sm-inline-block">Get The App</a>
                </div>
            </div>
            
            </div>
        </div>
    </header>