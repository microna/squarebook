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


<section id="about-us-section" class="mobile-no-show" style="background-image: url(  <?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/about-us-bg.jpg'?>); background-repeat: no-repeat; background-size: cover; background-repeat: no-repeat;
    background-position: right;
    background-size: 39% 588px;">
    <div class="container">
        <div class="about-us">
            <div class="about-us-content">
                <h2 class="about-us-content__header">About us</h2>
                <div class="about-us-content__text">
                  Our mission at SquareBook is to transform access to capital by offering a comprehensive platform that seamlessly connects companies, advisors, and investors. We empower stakeholders through a streamlined and transparent process, reducing complexities and fostering a collaborative environment that enhances decision-making and facilitates successful transactions. By bridging the gap between opportunity and investment, SquareBook is driving growth across diverse industries and markets, helping businesses unlock their potential and investors access curated, high-quality deal flow.
                </div>
            </div>

            <div class="about-us-bg">
                <!-- <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/about-us-bg.jpg'?>" alt="image-about-us" /> -->
            </div>
        </div>
    </div>
</section>

<section id="about-us-section" class="mobile-show">
    <div class="container">
        <div class="about-us">
            <div class="about-us-content">
                <h2 class="about-us-content__header">About us</h2>
                <div class="about-us-content__text">
                   SquareBook delivers a powerful, all-in-one platform designed to simplify access to capital for issuers, advisors, and investors. By leveraging an extensive network and user-friendly technology, we enable businesses to find the right advisors, help advisors expand their reach and connect with new investors, and offer investors unique deal flow opportunities. Our platform enhances collaboration, reduces friction, and drives successful outcomes for all participants.
                </div>
            </div>

            <div class="about-us-bg"
                style="background-image: url(  <?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/about-us-bg.jpg'?>); background-repeat: no-repeat; background-size: cover;">
                <!-- <img src="../img/about-us-bg.jpg" alt="image-about-us" /> -->
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="value">
            <div class="value-content">
                <h3 class="value-content__header">Value Proposition</h3>
                <p class="value-content__text">
                    SquareBook delivers a powerful, all-in-one platform designed to
                    simplify capital raising for issuers, advisors, and investors. By
                    leveraging an extensive network and user-friendly technology, we
                    enable businesses to find the right advisors, help advisors expand
                    their reach and connect with new investors, and offer investors unique
                    deal flow opportunities. Our platform enhances collaboration, reduces
                    friction, and drives successful outcomes for all participants.
                </p>
            </div>
            <div class="value-image">
                <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/about-section-1.svg'?>" alt="image" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="why-squarebook">
            <h3 class="why-squarebook__title">Why Squarebook?</h3>

            <div class="why-squarebook-wrapper">
                <div class="why-squarebook-box">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/why-squarebook-icon-1.svg'?>" alt="" class="
                        why-squarebook-box__image" />
                    <h5 class="why-squarebook-box__title">Empowerment</h5>
                    <p class="why-squarebook-box__text">
We empower Companies by helping them navigate the complex process of accessing capital, connecting them with trusted Advisors. We empower Advisors with access to a broader network of investors including cross-border connections. We provide Investors with exclusive access to deal flow and the advisors managing these opportunities.                    </p>
                </div>
                <div class="why-squarebook-box">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/why-squarebook-icon-2.svg'?>" alt=""
                        class="why-squarebook-box__image" />
                    <h5 class="why-squarebook-box__title">Transparency</h5>
                    <p class="why-squarebook-box__text">
                        Our platform promotes transparency by enabling the broad sharing of high-level information while offering exclusive access to detailed insights for platform members. With our comprehensive toolkit, users can navigate a clear and open process, ensuring informed decisions every step of the way.
                    </p>
                </div>
                <div class="why-squarebook-box">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/why-squarebook-icon-3.svg'?>" alt=""
                        class="why-squarebook-box__image" />
                    <h5 class="why-squarebook-box__title">Collaboration</h5>
                    <p class="why-squarebook-box__text">
                      By leveraging our platform, issuers and advisors work together seamlessly to ensure successful access to capital. SquareBook facilitates collaboration among advisors across jurisdictions, enabling more dynamic, cross-border deal-making. Our platform empowers partners to explore both non-dilutive and equity-based capital options, providing flexible pathways to funding.
                    </p>
                </div>
                <div class="why-squarebook-box">
                    <img src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/why-squarebook-icon-4.svg'?>" alt=""
                        class="why-squarebook-box__image" />
                    <h5 class="why-squarebook-box__title">Efficiency</h5>
                    <p class="why-squarebook-box__text">
                       Our platform simplifies the process for Investors of finding the right advisor and navigating any access to capital transaction. Our platform is designed to streamline compliance, operations, and deal flow management, bringing Advisors a modern front end for their clients. SquareBook streamlines the process of accessing capital for Investors, reducing friction and improving access to diverse investment opportunities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="team-section">
    <div class="container">
        <div class="team">
            <h3 class="team-header">Meet the team</h3>
            <div class="team-wrapper">
                <div class="team-box">
<!--                    https://squarebook.com/wp-content/uploads/2024/12/Mask-group.png-->
                    <img class="team-box__image" src="<?php
echo site_url() . '/wp-content/uploads/2024/12/Mask-group.png'?>" alt="team" />
                    <div class="team-box__content">
                        <div class="team-box__title">Joe Sluys</div>
                        <div class="team-box__subtitle">CEO</div>
                    </div>
                </div>
                <div class="team-box">
                    
                    <img class="team-box__image" src="<?php
echo site_url() . '/wp-content/uploads/2024/11/Mask-group123.png'?>" alt="team" />
                    <div class="team-box__content">
                        <div class="team-box__title">Daniel Lapeña Gomez</div>
                        <div class="team-box__subtitle">COO</div>
                    </div>
                </div>
                <div class="team-box">
                    <img class="team-box__image" src="<?php
echo site_url() . '/wp-content/uploads/2024/12/Mask-group12.png'?>" alt="team" />
                    <div class="team-box__content">
                        <div class="team-box__title">Anders F. Börjesson</div>
                        <div class="team-box__subtitle">Legal Counsel</div>
                        <div class="team-box__subtitle">Advisory Board Member</div>
                    </div>
                </div>
                <div class="team-box">
                    <img class="team-box__image" src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/team-placeholder.svg'?>" alt="team" />
                    <div class="team-box__content">
                        <div class="team-box__title">Adam Conn</div>
                        <div class="team-box__subtitle">Advisory Board Member</div>
                    </div>
                </div>
                <div class="team-box">
                    <img class="team-box__image" src="<?php
echo site_url() . '/wp-content/themes/squarebook-main/assets/img/team-placeholder.svg'?>" alt="team" />
                    <div class="team-box__content">
                        <div class="team-box__title">Patrick Buxton</div>
                        <div class="team-box__subtitle">Advisory Board Member</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();