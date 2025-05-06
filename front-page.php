<?php
/**
 * The main template file.
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 * @link        http://codex.wordpress.org/Template_Hierarchy
 * 
 * @package    WP Basis
 * @subpackage 
 * @since      05/08/2012  0.0.1
 * @version    05/08/2012
 * @author     fb
 */

get_header();
	?>


<section>
    <div class="container">
        <div class="main-inner">
            <h1 class="main-header">The platform for more efficient access to capital.</h1>
            <p class="main-text">SquareBook’s mission is to facilitate access to capital by providing a unified platform that connects companies, advisors, and investors. We empower all stakeholders through a streamlined, transparent, and collaborative approach, facilitating successful transactions and fostering growth across industries and markets.</p>
            <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="button-secondary" href="">Learn
                more about us <svg class="chevron" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 12.5L7 7L1 1.5" stroke="#8A6B24" stroke-width="1.5" stroke-linecap="round"/>
                </svg>


            </a>


        </div>

        <!-- "<?php
echo site_url() . '/wp-content/themes/squarebook-main/img/main-image.jp';
?>" -->
        <img class="main-image" src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/main-image.jpg';
?>" alt="">

</section>



<section>
    <div class="container">
        <div class="advantages">
            <div class="advantages-box">
                <h4 class="advantages-box__title">For Issuers</h4>
                <p class="advantages-box__subtitle">Companies seeking funding</p>
                <p class="advantages-box__text"> SquareBook helps issuers connect with the right advisor, ensuring expert guidance throughout the process of accessing capital. By leveraging our extensive network and innovative platform, we simplify the process of finding advisors and investors, ultimately leading to a broad range of capital access solutions.<br> <br> Our platform enables businesses to connect with the right intermediaries expertise to design and lead their transactions effectively.</p>
            </div>
            <div class="advantages-box">
                <h4 class="advantages-box__title">For Advisors</h4>
                <p class="advantages-box__subtitle">Supporting capital raising</p>
                <p class="advantages-box__text"> SquareBook provides advisors with the tools to connect with a vast network of investors, other advisors, and cross-jurisdiction opportunities. Our low-cost platform simplifies operations, reduces compliance burdens, and brings a steady deal flow through access to new markets and partnerships.<br> <br>  We help advisors stay competitive by enabling them to manage deals more efficiently, collaborate globally, and enhance their client offerings.</p>
            </div>
            <div class="advantages-box">
                <h4 class="advantages-box__title">For Investors</h4>
                <p class="advantages-box__subtitle">Seeking opportunities</p>
                <p class="advantages-box__text">SquareBook brings investors unique deal flow opportunities through strategic partnerships. Our platform reduces friction in the investment process by offering seamless connections to advisors and enhanced deal flow visibility.<br> <br>  Investors can join the platform to access an expanding network of curated opportunities, empowering them to make more informed and efficient investment decisions.</p>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="text-image-section">
            <div class="text-content">
                <h3 class="text-content__header">The complete toolkit for better access to capital.</h3>
                <p class="text-content__text"> SquareBook’s mission is to facilitate access to capital by providing a unified platform that connects companies, advisors, and investors. We empower all stakeholders through a streamlined, transparent, and collaborative approach, facilitating successful transactions and fostering growth across industries and markets.</p>
            </div>
            <div class="image-content">


                <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/main-section-image-1.svg'?>" alt="image">
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="features">
            <div class="features-box">
                <div class="features-box__icon">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/features-icon-1.svg'?>" alt="">
                </div>
                <div class="features-box__title">FCA regulated</div>
                <div class="features-box__text"></div>
            </div>
            <div class="features-box">
                <div class="features-box__icon">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/features-icon-2.svg'?>" alt="">
                </div>
                <div class="features-box__title">Inclusive, efficient and<br> compliant</div>
                <div class="features-box__text"></div>
            </div>
            <div class="features-box">
                <div class="features-box__icon">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/features-icon-3.svg'?>" alt="">
                </div>
                <div class="features-box__title">Remove conflicts of interest</div>
                <div class="features-box__text"></div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="text-image-section-reverse mobile-no-show">
            <div class="image-content">
                <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/main-section-image-2.svg' ?>" alt=" image">
            </div>
            <div class="text-content">
                <h3 class="text-content__header">Better outcomes for companies, advisors and investors.</h3>
                <p class="text-content__text">SquareBook delivers a powerful, all-in-one platform designed to simplify capital raising for issuers, advisors, and investors. By leveraging an extensive network and user-friendly technology, we enable businesses to find the right advisors, help advisors expand their reach and connect with new investors, and offer investors unique deal flow opportunities. Our platform enhances collaboration, reduces friction, and drives successful outcomes for all participants.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="text-image-section-reverse mobile-show">

            <div class="text-content">
                <h3 class="text-content__header">Better outcomes for companies, advisers and investors.</h3>
                <p class="text-content__text">SquareBook delivers a powerful, all-in-one platform designed to simplify capital raising for issuers, advisors, and investors. By leveraging an extensive network and user-friendly technology, we enable businesses to find the right advisors, help advisors expand their reach and connect with new investors, and offer investors unique deal flow opportunities. Our platform enhances collaboration, reduces friction, and drives successful outcomes for all participants.</p>
            </div>
            <div class="image-content">
                <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/main-section-image-2.svg'?>" alt="image">
            </div>
        </div>
    </div>
</section>


<section id="cta-section">
    <div class="container">
        <div class="cta">
            <div class="cta-info">
                <h3 class="cta-info__header">Let’s have a chat</h3>
                <div class="cta-info__text">Have questions or want to learn more about how SquareBook can support your investment journey? Fill out the form below, and our team will get back to you promptly. We look forward to connecting!

</div>
                <div class="cta-info__contacts">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/mail.svg'?>" alt=" eamil">
                    <a href="mailto:contact@squarebook.com">contact@squarebook.com</a>
                </div>
            </div>
            <div class="cta-form">

                <?php echo do_shortcode('[contact-form-7 id="87f2ab8" title="Contact form 2"]'); ?>
                <div class="form-submitted" id="form-submitted">
                    <img src="<?php
                    echo site_url() . '/wp-content/themes/squarebook-main/assets/img/check-circle.svg'?>" alt="">
                    <h2 class="form-submitted__title">Form submitted</h2>
                    <p class="form-submitted__text">We’ve received your response</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();