  <?php
 $social=$obj->select_any_one('tbl_basic_social_media','1');
 ?>
 <footer class="footer-section bg_img" data-background="./assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer-top padding-top padding-bottom">
                <div class="logo">
                    <a href="index.php">
                        <img src="./assets/images/logo/footer-logo.png" alt="logo">
                    </a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="<?php echo $social['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $social['twitter'];?>" class=""><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $social['youtube'];?>"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $social['google_plus'];?>"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $social['instagram'];?>"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <ul class="footer-link">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="faq.php">FAQs</a>
                    </li>
                    <li>
                        <a href="contact-main.php">Contact</a>
                    </li>
                    <li>
                        <a href="feature.php">Features</a>
                    </li>
                    <li>
                        <a href="privacy-policy.php">Privacy</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <p>
                    Copyright © 2020.All Rights Reserved By <a href="#0">bubode</a>
                </p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/modernizr-3.6.0.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/magnific-popup.min.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/waypoints.js"></script>
    <script src="./assets/js/nice-select.js"></script>
    <script src="./assets/js/owl.min.js"></script>
    <script src="./assets/js/counterup.min.js"></script>
    <script src="./assets/js/paroller.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>