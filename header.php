<?php
/**
 * The Header for our WP Basis theme
 *
 * @package    WordPress
 * @subpackage WordPress_Basis_Theme
 * @since      2012-05-08  0.0.1
 * @version    2014-11-03
 * @author     Frank Bültge <frank@bueltge.de>
 */
?>
<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
<!--    <link rel="stylesheet" href="./css/style.min.css">-->
    <!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
    <!-- <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> -->

    <?php wp_head(); ?>
</head>
<header>
    <!-- Navbar -->
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo mobile-no-show">
                    <a href="<?php echo home_url(); ?>"> <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/main-logo-1.svg'?>" alt="logo" /> </a>
                </div>
                <div class="logo mobile-show">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/mobile-logo.svg'?>" alt=" mobile-logo" />
                    </a>
                </div>
                <nav>
                    <ul class="menu">
                        <li class="menu__item">
                            <a href="<?php echo home_url(); ?>" class=" menu__item-link" data-scroll>Home</a>
                        </li>
                        <li class="menu__item">
                            <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="menu__item-link"
                                data-scroll>About</a>
                        </li>
                        <li class="menu__item">
                            <a href="<?php echo get_permalink(get_page_by_path('contact-us')); ?>"
                                class="menu__item-link" data-scroll>Contact</a>
                        </li>
                        <li class="menu__item">
                            <a href="https://squarebook.sharepoint.com/sites/ClientPortal" class="menu__item-link login" data-scroll>Login</a>
                        </li>
                    </ul>
                </nav>

                <button class="burger">
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>