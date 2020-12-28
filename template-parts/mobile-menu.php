<?php
/**
 * Displays logo and mobile menu
 */
?>
<div class="mobile">
<div class="mobileBar">
    <div class="logo">
      <?php $company = get_field('company', 'option'); ?>
      <?php if ( $company ): ?>
    <a href="<?php echo get_site_url(); ?>"> <?php echo wp_get_attachment_image($company['logo_fixed']['id'], 'logo') ?></a>
  <?php  else: echo "ENSIS";
       endif; ?>
    </div>
    <button class="hamburger hamburger--emphatic" type="button"
            aria-label="Menu" aria-controls="navigation" aria-expanded="true/false">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
</div>
<nav id="mobileMenu">
  <div id="navigation">
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
  </div>
</nav>
</div>
