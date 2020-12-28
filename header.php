<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
      <?php wp_head(); ?>
      <style>
        @font-face {font-family: 'Poppins';font-weight: 300;font-display: swap;src: url('<?php echo get_template_directory_uri().'/dist/font/Poppins-Light.woff'; ?>') format('woff')}
        @font-face {font-family: 'Poppins';font-weight: 400;font-display: swap;src: url('<?php echo get_template_directory_uri().'/dist/font/Poppins-Regular.woff'; ?>') format('woff')}
        @font-face {font-family: 'Poppins';font-weight: 600;font-display: swap;src: url('<?php echo get_template_directory_uri().'/dist/font/Poppins-SemiBold.woff'; ?>') format('woff')}
        <?php $Szerokosc = get_field('ustawienia_www', 'option') ?>
        <?php if($Szerokosc['szerokosc_kontenera']): ?>
        .basicSection {max-width:<?php echo $Szerokosc['szerokosc_kontenera'].'px'; ?>}
        <?php endif; ?>
      </style>
    </head>
    <body <?php body_class(); ?>>
      <?php  $header = get_field('header'); ?>
      <?php $company = get_field('company', 'option'); ?>
      <?php $socialMedia = get_field('social_media', 'option'); ?>
      <?php $ustawienia_www = get_field('ustawienia_www', 'option'); ?>
      <header id="header" class="pageHeader <?php if (!is_front_page()): echo 'subPage'; endif; ?>" <?php if (is_front_page()): ?> style="background:url('<?php echo get_template_directory_uri().'/dist/images/bg.svg'; ?>')" <?php else: ?> style="background:url('<?php echo get_template_directory_uri().'/dist/images/bgSimple.jpg'; ?>')" <?php endif;?>>
        <?php include( locate_template( 'template-parts/mobile-menu.php', false, false ) );  ?>
        <div class="navigation">
          <nav id="mainNav">
              <a class="logo" href="<?php echo get_site_url(); ?>"> <?php echo wp_get_attachment_image($company['logo']['id'], 'logo') ?></a>
              <a class="logoFixed" href="<?php echo get_site_url(); ?>"> <?php echo wp_get_attachment_image($company['logo_fixed']['id'], 'logo') ?></a>
              <div class="menuContainer">
                <ul class="menu">
                <?php
                if ( has_nav_menu( 'primary' ) ) :
                  wp_nav_menu(
                    array(
                      'container'  => '',
                      'items_wrap' => '%3$s',
                      'theme_location' => 'primary',
                    )
                  );
                endif; ?>
                </ul>
                <?php if($socialMedia): ?>
                <ul class="socialMedia">
                <?php if($socialMedia['facebook']): ?><li class="medium"><a class="icon icon-facebook" target="_blank" href="<?php echo $socialMedia['facebook']; ?>"></a></li> <?php endif; ?>
                <?php if($socialMedia['linkedin']): ?><li class="medium"><a class="icon icon-linkedin" target="_blank" href="<?php echo $socialMedia['linkedin']; ?>"></a></li> <?php endif; ?>
                <?php if($socialMedia['instagram']): ?><li class="medium"><a class="icon icon-instagram" target="_blank" href="<?php echo $socialMedia['instagram']; ?>"></a></li> <?php endif; ?>
                <?php if($socialMedia['youtube']): ?><li class="medium"><a class="icon icon-youtube" target="_blank" href="<?php echo $socialMedia['youtube']; ?>"></a></li> <?php endif; ?>
                </ul>
              <?php endif; ?>
            </div>
        </nav>
        </div>
        <?php if (is_front_page()): ?>
          <?php include( locate_template( 'template-parts/front-header.php', false, false ) );  ?>
        <?php elseif (is_404()): ?>
          <?php include( locate_template( 'template-parts/header-404.php', false, false ) );  ?>
        <?php else: ?>
        <?php include( locate_template( 'template-parts/page-header.php', false, false ) );  ?>
        <?php endif; ?>
      </header>
