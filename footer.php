<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colony_Suppliers
 */
?>

<div>
    <!-- footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="footer-heading">
                        <a href="#" class="logo">
                            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/colony-logo1.png" alt="Colony Logo">
                        </a>
                    </h2>
                    <p class="menu">
                        <a href="#">Home</a>
                        <a href="#">Groceries</a>
                        <a href="#">Frozen Meats</a>
                        <a href="#">Gallery</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact</a>
                    </p>
                    <ul class="footer-social p-0">
                        <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
