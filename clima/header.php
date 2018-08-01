<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Graphy
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="note-popup--wrapper">
    <div class="note-popup">
        <h3>Create note</h3>
        <div class="close close-img"><img src="/wp-content/themes/graphy/img/close.png" alt="" class="close-img"></div>
        <div class="note-popup__row1">
            <p class="note-popup__title">
                Note length
            </p>
            <div class="note-length__wrapper">
                <div class="note-length-btn note-length-btn__32">32</div>
                <div class="note-length-btn note-length-btn__16">16</div>
                <div class="note-length-btn note-length-btn__8">8</div>
                <div class="note-length-btn note-length-btn__4">4</div>
                <div class="note-length-btn note-length-btn__2">2</div>
                <div class="note-length-btn note-length-btn__1">1</div>
                <div class="note-length-btn note-length-btn__X">X</div>
            </div>
        </div>
        <div class="note-popup__row2">
            <p class="note-popup__title">
                Fret
            </p>
            <div class="input-box">
                <input class="slider note-slider" value="0" min="0" max="25" name="rangeslider" type="range" />
            </div>
            <div class="values">
                <span>0</span><span>25</span>
            </div>
        </div>
        <div class="note-popup__row3">
            <p class="note-popup__title">
                Technique
            </p>
            <div class="note-technique__wrapper">
                <div class="note-technique__ico note-technique__ico1"><img src="/wp-content/themes/graphy/img/hammer.png" title="hammer/pull" alt="hm"></div>
                <div class="note-technique__ico note-technique__ico2"><img src="/wp-content/themes/graphy/img/slide.png" title="slide" alt="slide"></div>
                <div class="note-technique__ico note-technique__ico3"><img src="/wp-content/themes/graphy/img/vibrato.png" title="vibrato" alt="vibrato"></div>
                <div class="note-technique__ico note-technique__ico4"><img src="/wp-content/themes/graphy/img/half-vibrato.png" title="half vibrato" alt="half-vibrato"></div>
                <div class="note-technique__ico note-technique__ico5"><img src="/wp-content/themes/graphy/img/bend.png" title="bend" alt="bend"></div>
                <div class="note-technique__ico note-technique__ico6"><img src="/wp-content/themes/graphy/img/half-bend.png" title="half-bend" alt="half-bend"></div>
                <div class="note-technique__ico note-technique__ico7"><img src="/wp-content/themes/graphy/img/bend-from-top.png" title="top bend" alt="top-bend"></div>
                <div class="note-technique__ico note-technique__ico8"><img src="/wp-content/themes/graphy/img/half-bend-from-top.png" title="half top bend" alt="half-top-bend"></div>
                <div class="note-technique__ico note-technique__ico9"><img src="/wp-content/themes/graphy/img/hammer.png" alt=""></div>
                <div class="note-technique__ico note-technique__ico10"><img src="/wp-content/themes/graphy/img/hammer.png" alt=""></div>

            </div>
        </div>
        <div class="custom-btn add-note">+ &nbsp;Add note</div>
        <div class="custom-btn edit-note">Edit note</div>
    </div>
</div>
    <svg style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      
<defs>
<symbol id="ico1"  viewBox="0 0 1109.729 387.01">
<title>Tabber</title>
  <g id="Group_16" data-name="Group 16" transform="translate(0.029 0.012)">
    <path id="Path_39" data-name="Path 39" class="cls-1" d="M768.4,58.8s69.4-27.7,68-27c-28,14-492.6,206.1-825.8,80.5a.939.939,0,0,1,.1-1.8C61.2,99.3,172.4,36,195.4,16.8c6-5,6,1-3,10-184,229-208,350-151,350,35,0,62.6-30,120.8-117.1,48.9-73.2,93.2-51.9,102.5-40,1.7,2.1,1.8,2.1.6.1-6-10-52.5-29.6-102.2,39.9h0c-26.8,37.1-42.8,115.1.2,115.1,46,0,62-48,98.5-103.8,4.6-7.1,7-8.1,1.9.6-29.4,50.2-39.9,104.5-2.4,103.2,30-1,83.1-103.7,101.6-149a1.205,1.205,0,0,1,.5-.5c112.9-42.1,248.4-156.2,208-209.6-37-48.9-171.7,231.4-188.8,270-.4.9.9,1.9,1.5,1.1,50.3-79,124.1-108.9,122.3-43-1.3,50.6-57,131-101,131-33,0-40.4-27-27-51.6,59.2-28.5,320-171.4,354-237.4,7.1-13.7,28.8-48.6,12-70.1a15.346,15.346,0,0,0-6.6-5c-44.2-15.3-166,238.5-182.2,275.1-.4.9.9,1.9,1.5,1.1,50.3-79,124.1-108.9,122.3-43-1.3,50.6-57,131-101,131-33,0-40.4-27-27-51.6a1.193,1.193,0,0,1,.9-.5c69-4.9,110-8.9,144-12.9,36-5,98-7,126.1-60,17.6-33.1-17.1-67-68-23.6-11.4,9.7-29.9,31.5-44.1,76.3-17.5,55.3,1,72.4,37,72.4,114,0,200.7-126.7,166-160-24-23-55.7,4.5-46,27,9,21,33,37,130-35.2,1.3-.7.8.5,0,1.2-86.8,75.3-83,165-31,165,59.9,0,99.4-82.6,164-162.3,42.2-52.1,75.9-95.6,97.6-125.2"/>
    <path id="Path_40" data-name="Path 40" class="goldJack" d="M1239.2,91.9l-48.1,62.6-20.6-15.8,48.1-62.6s6.2-1.5,7-.9,10.9-20,10.9-20l10.5-1.4,6.3,4.9,1.4,10.5s-17.3,15.1-16.5,15.7S1239.2,91.9,1239.2,91.9Z"/>
    <g id="Group_15" data-name="Group 15">
      <rect class="darkJack" id="Rectangle_75" data-name="Rectangle 75" width="8" height="26" transform="translate(1211.325 85.534) rotate(-52.463)"/>
      <rect class="darkJack" id="Rectangle_76" data-name="Rectangle 76" width="8" height="26" transform="translate(1196.672 104.512) rotate(-52.463)"/>
      <rect class="darkJack" id="Rectangle_77" data-name="Rectangle 77" width="107" height="34" transform="translate(1102.137 221.007) rotate(-52.463)"/>
    </g>
  </g>

</symbol>

</defs>
</svg>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'graphy' ); ?></a>

	<header id="masthead" class="site-header">

<!--
		<div class="site-branding">
		<?php graphy_logo(); ?>
		<?php graphy_site_title(); ?>
		<?php if ( ! get_theme_mod( 'graphy_hide_blogdescription' ) ) : ?>
			<div class="site-description"><?php bloginfo( 'description' ); ?></div>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'header-social' ) ) : ?>
			<nav id="header-social-link" class="header-social-link social-link">
				<?php wp_nav_menu( array( 'theme_location' => 'header-social', 'depth' => 1, 'link_before'  => '<span class="screen-reader-text">', 'link_after'  => '</span>' ) ); ?>
			</nav>
		<?php endif; ?>
		</div> 
-->
<!--        .site-branding -->

		<?php if ( ! get_theme_mod( 'graphy_hide_navigation' ) ) : ?>
		<nav id="site-navigation" class="main-navigation">
           <a href="#" class="ico-block">
    <svg class="icon shadow"><use xlink:href="#ico1"></use></svg>
</a>
            <?php if ( ! get_theme_mod( 'graphy_hide_search' ) ) : ?>
			<?php get_search_form(); ?>
			<?php endif; ?>
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
			
			<button class="menu-toggle"><span class="menu-text"><?php esc_html_e( 'Menu', 'graphy' ); ?></span></button>
		</nav><!-- #site-navigation -->
		<?php endif; ?>

		<?php if ( is_page() && has_post_thumbnail() ) : ?>
		<div id="header-image" class="header-image">
			<?php the_post_thumbnail( 'graphy-page-thumbnail' ); ?>
		</div><!-- #header-image -->
		<?php elseif ( ( get_header_image() && 'site' == get_theme_mod( 'graphy_header_display' ) ) ||
		               ( get_header_image() && 'page' == get_theme_mod( 'graphy_header_display' ) && is_page() ) ||
		               ( get_header_image() && 'page' != get_theme_mod( 'graphy_header_display' ) && is_home() ) ) : ?>
		<div id="header-image" class="header-image">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</div><!-- #header-image -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

