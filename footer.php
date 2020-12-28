  <footer>
    <div class="footer">
    <div class="footerWrapper siteWidth">
      <div class="columns flexing ">
    <?php $company = get_field('company', 'option'); ?>
    <?php $socialMedia = get_field('social_media', 'option'); ?>
      <div class="column">
        <a class="logoFooter" href="<?php echo get_site_url(); ?>"> <?php echo wp_get_attachment_image($company['footer_logo']['id'], 'logo') ?></a>
        <p><?php echo $company['dane_firmy'] ?></p>
      </div>
      <div class="column">
        <div class="heading"><?php _e('Contact Us', 'ensis'); ?></div>
        <p> <a href="tel:<?php echo $company['telefon'] ?>"><?php echo $company['telefon']; ?></a></br>
            <a href="mailto:<?php echo $company['e_mail'] ?>"><?php echo $company['e_mail']; ?></a></br>
            <ul class="socialMedia flexing">
            <?php if($socialMedia['facebook']): ?><li class="medium"><a class="icon icon-facebook" target="_blank" href="<?php echo $socialMedia['facebook']; ?>"></a></li> <?php endif; ?>
            <?php if($socialMedia['linkedin']): ?><li class="medium"><a class="icon icon-linkedin" target="_blank" href="<?php echo $socialMedia['linkedin']; ?>"></a></li> <?php endif; ?>
            <?php if($socialMedia['instagram']): ?><li class="medium"><a class="icon icon-instagram" target="_blank" href="<?php echo $socialMedia['instagram']; ?>"></a></li> <?php endif; ?>
            <?php if($socialMedia['youtube']): ?><li class="medium"><a class="icon icon-youtube" target="_blank" href="<?php echo $socialMedia['youtube']; ?>"></a></li> <?php endif; ?>
            </ul>
          </p>
      </div>
      <div class="column">
        <div class="heading"><?php _e('Services', 'ensis'); ?></div>
        <ul class="menu">
          <?php if ( has_nav_menu( 'footer' ) ) :
            wp_nav_menu(
              array(
                'container'  => '',
                'items_wrap' => '%3$s',
                'theme_location' => 'footer',
              )
            );
          endif; ?>
        </ul>
      </div>
      <div class="column">
        <div class="heading"><?php _e('Company', 'ensis'); ?></div>
        <ul class="menu">
          <?php if ( has_nav_menu( 'footer2' ) ) :
            wp_nav_menu(
              array(
                'container'  => '',
                'items_wrap' => '%3$s',
                'theme_location' => 'footer2',
              )
            );
          endif; ?>
        </ul>
      </div>
      </div>
      </div>
      </div>
      <div class="credits">
        <div class="siteWidth flexing">
          <div class="companyName"> © <?php echo date('Y'); ?> Ensis Bartosz Guździoł</div>
          <a href="https://lookslike.pl"  title="strony internetowe dla firm"><span>Crafted&nbsp;by:</span> <img loading="lazy" src="<?php echo get_template_directory_uri().'/dist/images/LL.svg' ?>" alt="Tworzenie stron www lookslike.pl"></a>
        </div>
      </div>
      <?php include( locate_template( 'template-parts/settings.php', false, false ) );  ?>
      <?php wp_footer(); ?>
  </footer>
  <?php cookies(); ?>
</body>
</html>
