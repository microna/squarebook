<?php

get_header();?>


<section>
    <div class="container">
        <div class="text-image-section">
            <div class="text-content">
                <p class="text-content__subheader"><?php the_field('subtitle'); ?></p>
                <h2 class="text-content__header">
                    <?php the_field('title'); ?>
                </h2>
                <p class="text-content__text">
                    <?php the_field('invest_text'); ?>
                </p>
            </div>
            <div class="aside-content">
                <?php
if (function_exists('get_field') && $logo = get_field('invest_logo')):
    $logo_url = is_array($logo) ? $logo['url'] : $logo;
?>
                <img src="<?php echo esc_url($logo_url); ?>" alt="" class="aside-content__logo" />
                <?php endif; ?>
                <div class="aside-content__location">
                    <div class="aside-content__text">Location:</div>
                    <div class="aside-content__heading"> <?php the_field('location'); ?></div>
                </div>
                <div class="aside-content__website">
                    <?php if (function_exists('get_field') && get_field('website')): ?>
                    <div class="aside-content__text t">Website:</div>


                    <div class="aside-content__heading website-text"><a href="https://<?php the_field('website'); ?>"
                            target="_blank"><?php the_field('website'); ?></a></div>
                    <?php endif; ?>



                </div>
                <div class="aside-content__sectors">
                    <div class="aside-content__text">Sectors:</div>
                    <div class="aside-content__tag">• <?php the_field('sectors'); ?></div>
                </div>
                <?php if (function_exists('get_field') && get_field('invest_social')): ?>
                <div class="aside-content__socials">
                    <div class="aside-content__text">Social media:</div>
                    <div class="aside-content__socials-items">
                        <a target="_blank" href="https://www.facebook.com/mybackhug/">
                            <img src="<?php echo site_url() . '/wp-content/themes/squarebook-main/assets/img/linkid.svg'?>"
                                alt="" />
                        </a>
                        <a target="_blank" href="https://www.instagram.com/mybackhug/">
                            <img src="<?php echo site_url() . '/wp-content/themes/squarebook-main/assets/img/insta.svg'?>"
                                alt="" />
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="aside-content__advised">
                        <div class="aside-content__text">Advised by:</div>
                        <div class="">
                            <img style="width: 172px"
                                src="<?php echo site_url() . '/wp-content/themes/squarebook-main/assets/img/MansunCapital.png'?>"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<?php
if (function_exists('get_field') && get_field('invest_video')) {
    $video_url = get_field('invest_video');
    ?>
<section class="hero-video mobile-no-show" id="video-container">
    <video id="video" width='100%' height='100%'>
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
    <button id="play-button">></button>
</section>
<?php
}
?>


<?php
if (function_exists('get_field') && get_field('invest_video')) {
    $video_url = get_field('invest_video');
    ?>
<section class="hero-video mobile-show" id="video-container">
    <video id="video" width='100%' height='100%' controls autoplay loop muted>
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
    <button id="play-button">></button>
</section>
<?php
}
?>

<?php
// Check if the ACF function exists and if the invest_image field has a value
if (function_exists('get_field') && get_field('invest_image')) {
    // Get the image data - this works whether you're returning an ID, URL, or array
    $image = get_field('invest_image');
    
    // Handle different return formats from ACF
    if (is_array($image)) {
        // If returning an array (ACF default)
        $image_url = $image['url'];
        $image_alt = $image['alt'];
    } elseif (is_numeric($image)) {
        // If returning an ID
        $image_url = wp_get_attachment_url($image);
        $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
    } else {
        // If returning a URL
        $image_url = $image;
        $image_alt = get_the_title(); // Default alt text
    }
    ?>
<section class="full-width-image-section">
    <div class="full-width-image-container">
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"
            class="full-width-image">
    </div>
</section>

<style>
/* Styles for responsive full-width image */
.full-width-image-section {
    width: 100%;
    overflow: hidden;
    margin: 0;
    padding: 0 0 60px 0
}

.full-width-image-container {
    width: 100%;
}

.full-width-image {
    width: 1200px;
    margin: 0 auto;
    height: auto;
    display: block;
    object-fit: contain;
}
</style>
<?php
}
// If the field doesn't exist or has no value, nothing will be displayed
?>


<section>
    <div class="container">
        <h2 class="text-content__header-bold">
            <?php the_field('invest_additional_title'); ?>
        </h2>
        <div class="text-content__text" style="padding: 0 0 60px 0;">
            <?php the_field('invest_additional_text'); ?>
        </div>
    </div>
</section>


<?php
// Get the current page URL
$current_url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Check if the URL contains both 'backhug-com' and 'invest'
if (strpos($current_url, 'invest/backhug-com') !== false) {
?>
<section class="section-image invest">
    <div class="container">
        <div class="text-image-section" style="gap:250px;">
            <div class="text-content ">
                <h2 class="text-content__header">
                    Transformative Back Pain Relief: Early Study Results </h2>
                <p class="text-content__text">
                    In our ongoing clinical study, participants are experiencing remarkable improvements—one individual
                    with severe back pain saw a 57% reduction in tension after just a 10-minute session, outperforming
                    the 40% average improvement with chiropractors. <br><br>
                    These breakthrough findings confirm what our previous trials and studies have shown: BackHug is
                    setting a new standard for back pain relief.
                </p>
            </div>
            <div class="" style="text-align : center;">
                <img src="<?php echo site_url() . '/wp-content/themes/squarebook-main/assets/img/images222.png'?>"
                    alt="" />
            </div>
        </div>
        <div class=" boxes-wrapper">
            <div class="boxes">
                <p class="boxes__text">US distributor pipeline of</p>
                <h5 class="boxes__title">Over 2,000 units</h5>
                <!--                <p class="boxes__text">vs $500/month in our ARR assumptions</p>-->
            </div>
            <div class="boxes">
                <p class="boxes__text">Average use by our at home customers</p>
                <h5 class="boxes__title">2.8x a week</h5>
            </div>
        </div>
        <img class="graph-image"
            src="<?php echo site_url() . '/wp-content/uploads/2024/12/f30963e8-c067-480c-a127-7f0c962654b7.png'?>"
            alt="">
    </div>
</section>
<?php
}
?>




<?php
// Get the current page URL
$current_url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Check if the URL contains 'invest/backhug-com'
if (strpos($current_url, 'invest/backhug-com') !== false) {
?>
<section>
    <div class="container">
        <div class="testimonial">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="swiper-slide__image"
                            src=<?php echo site_url() . '/wp-content/themes/squarebook-main/assets/img/image-stars.svg'?>
                            alt="stars">
                        <h5 class="swiper-slide__title">"Backhug is truly a gamechanger"</h5>
                        <p class="swiper-slide__text">BackHug is truly a game-changer: brilliant app, great design,
                            fantastic customer service, and everything you want a product to do / a company to be. I'll
                            be recommending it to all!</p>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-slide__image"
                            src=<?php echo site_url() . '/wp-content/themes/squarebook-main/assets/img/image-stars.svg'?>
                            alt="stars">
                        <h5 class="swiper-slide__title">"Get one if you can"</h5>
                        <p class="swiper-slide__text">This is a serious bit of kit to have in your house. It is the only
                            device which I have ever found which actually replicates the way a physio works on your
                            back. The Backhug is sufficiently strong that I don't even need to turn it up to full
                            strength.</p>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-slide__image"
                            src=<?php echo site_url() . '/wp-content/themes/squarebook-main/assets/img/image-stars.svg'?>
                            alt="stars">
                        <h5 class="swiper-slide__title">"Complete Game Changer"</h5>
                        <p class="swiper-slide__text">I have had back problems for most of my adult life , back surgery
                            back in 1999, always have flare ups and pain , being a Nurse doesn't help , Back Hug is a
                            game changer for me , what a difference in a short period of time , feel way less tight ,
                            sciatica gone :)) and feel way more flexible, will be taking on a subscription now my trial
                            has finished, amazed!</p>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-slide__image"
                            src=<?php echo site_url() . '/wp-content/themes/squarebook-main/assets/img/image-stars.svg'?>
                            alt="stars">
                        <h5 class="swiper-slide__title">"Nothing short of a miracle!"</h5>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>


<!-- <?php
$item_slug = 'item-' . get_post_field('post_name', get_the_ID());
echo $item_slug;
?> -->

<section id="cta-section">
    <div class="container">
        <div class="cta">
            <div class="cta-info">
                <h3 class="cta-info__header">Register your interest</h3>
                <div class="cta-info__text">
                    Sign up here to know more
                </div>

            </div>
            <div class="cta-form">
                <?php
                 $item_slug = 'item ' . get_post_field('post_name', get_the_ID());

                echo '<input type="hidden" name="debug-item-label" value="' . esc_attr($item_slug) . '" />';
                echo do_shortcode('[contact-form-7 id="0adea42" title="Invest page" item-label="' . esc_attr($item_slug) . '"]');
                ?>
                <div class="form-submitted" id="form-submitted">
                    <img src="<?php
                    echo site_url() . '/wp-content/themes/squarebook-main/assets/img/check-circle.svg'?>" alt="">
                    <h2 class="form-submitted__title">Form submitted</h2>
                    <p class="form-submitted__text">We've received your response</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();