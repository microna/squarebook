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
        <div class="contact-wrapper">
            <div class="contact-info">
                <h3 class="contact-info__header">Get in touch.</h3>
                <div class="contact-info__text">
                 Have questions or want to learn more about how SquareBook can support your investment journey?
Fill out the contact form and our team will get back to you promptly.
We look forward to connecting!
                </div>
                <div class="contact-info__socials">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/linkid-gold.svg'?>" alt=" linkid" />
                    <a href="https://www.linkedin.com/company/square-book-limited/?originalSubdomain=ru" target="_blank"
                        class="contact-info__socials-text">Squarebook</a>
                </div>
                <div class="contact-info__socials">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/insta-gold.svg'?>" alt="inst" />
                    <a class="contact-info__socials-text">Squarebook</a>
                </div>
            </div>
            <div class="contact-form">
                <!-- <label class="contact-form__label" for="">Your name</label>
                <input class="contact-form__input" type="text" />
                <label class="contact-form__label" for="">Your email address</label>
                <input class="contact-form__input" type="text" />

                <label class="contact-form__label" for="">How can we help?</label>
                <select class="contact-form__select" type="text">
                    <option value="">Consultation</option>
                </select>
                <label class="contact-form__label" for="">Send us a message</label>
                <textarea class="contact-form__textarea" type="text"> </textarea>
                <button class="primary-button">Submit form ></button> -->
                <?php echo do_shortcode('[contact-form-7 id="434fa17" title="Contact form 1"]'); ?>
                <div class="form-submitted" id="form-submitted">
                    <img src="<?php
                    echo site_url() . '/wp-content/themes/squarebook-main/assets/img/check-circle.svg'?>" alt="">
                    <h2 class="form-submitted__title">Form submitted</h2>
                    <p class="form-submitted__text">We’ve received your response</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>






<?php
get_footer();