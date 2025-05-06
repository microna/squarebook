<?php
/**
 * The Template for displaying the footer.
 * 
 * @package    WP Basis
 * @subpackage 
 * @since      06/12/2012  0.0.1
 * @version    01/21/2013
 * @author     fb
 */
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<footer>
    <div class="container">
        <div class="footer">
            <div class="footer-logo"><a href="#"> <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/footer-logo.svg'?>" alt=""> </a> </div>
            <nav>
                <ul class=" footer-menu">
                    <li class="footer-menu__item"><a href="<?php echo get_permalink(get_page_by_path('about')); ?>"
                            class=" footer-menu__item-link" data-scroll>About 1</a></li>
                    <li class="footer-menu__item"><a href="<?php echo get_permalink(get_page_by_path('contact-us')); ?>"
                            class=" footer-menu__item-link" data-scroll>Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="socials">
                <a target="_blank" href="https://www.linkedin.com/company/square-book-limited/?originalSubdomain=ru">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/inst-footer-2.svg'?>" alt="">
                </a>
                <a target="_blank" href="">
                    <img src=" <?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/linkdfooter.svg'?>" alt="">
                </a>
            </div>
        </div>
        <div class="exclaimer-text">
            SquareBook is authorised and regulated by the Financial Conduct Authority (FRN 812594) in relation to
            its
            arranging activities.
            SquareBook Financial Ltd, 71-75 Shelton Street, Covent Garden, London WC2H 9JQ


        </div>
        <div class="copyright-text">Copyright 2024 - All Rights Reserved</div>
    </div>
</footer>

</div> <?php // end #wrap in header.php ?>

<?php wp_footer(); ?>
</body>

</html>