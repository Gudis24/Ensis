<?php
/**
 * Template Name: Project Management
 * Template Post Type: page
 */

get_header();
?>
<?php $offer = get_field('offer'); ?>
<div class="container page">
<?php if( have_rows('sekcja') ): // repater1
  while( have_rows('sekcja')): the_row();?>
  <?php $section_type = get_sub_field('rodzaj_sekcji');  ?>
  <?php $parametr = get_sub_field('dodatkowy_parametr');  ?>
<section class="sections <?php echo $section_type; ?> <?php echo $parametr; ?>">
  <div class="sectionContainer flexing siteWidth">
    <?php if ($section_type == "Basic"): ?>
      <?php if( have_rows('sekcja_basic') ): // grupa sekcja_basic
        while( have_rows('sekcja_basic')): the_row();?>
        <?php $tytul_sekcji = get_sub_field('tytul');
              $tresc = get_sub_field('tresc');
              $zdjecie = get_sub_field('zdjecie'); ?>
      <div class="imageSide sectionSide">
          <?php echo wp_get_attachment_image($zdjecie, 'auto'); ?>
      </div>
      <div class="contentSide sectionSide">
          <h2><?php echo $tytul_sekcji; ?></h2>
              <?php echo $tresc; ?>
              <div class="buttonsContainer">
              <?php if( have_rows('przycisk') ): // repeater w grupie sekcja_basic
                while( have_rows('przycisk')): the_row();?>
                <?php $tytul_przycisku = get_sub_field('tytul_przycisku');
                      $link = get_sub_field('link'); ?>
                <a class="button" href="<?php echo $link; ?>"><?php echo $tytul_przycisku; ?></a>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
<?php elseif($section_type == "Advanced"): ?>
      <?php if( have_rows('sekcja_advanced') ): // grupa sekcja_advanced
        while( have_rows('sekcja_advanced')): the_row();?>
        <?php $zdjecie = get_sub_field('zdjecie');
              $tytul_sekcji = get_sub_field('tytul');
              $tresc = get_sub_field('tresc'); ?>
              <div class="imageSide sectionSide">
                  <?php echo wp_get_attachment_image($zdjecie['id'], 'auto'); ?>
              </div>
              <div class="contentSide sectionSide">
                <h2><?php echo $tytul_sekcji; ?></h2>
                <?php echo $tresc; ?>
                      <?php if( have_rows('ikony') ): // repeater ikon w grupie sekcja_advanced
                        while( have_rows('ikony')): the_row();?>
                        <div class="secIcons flexing">
                         <?php $ikon = get_sub_field('ikon');
                               $tytul = get_sub_field('tytul');
                               $tresc = get_sub_field('tresc'); ?>
                         <div class="iconWrapper"><?php echo wp_get_attachment_image($ikon['id'], 'icon'); ?></div>
                         <div class="secIcon flexing">
                           <div class="heading"><?php  echo $tytul; ?></div>
                           <div class="iconContent"><?php  echo $tresc; ?></div>
                         </div>
                       </div>
                      <?php endwhile; ?>
                      <?php endif; ?>
                      <div class="buttonsContainer">
                      <?php if( have_rows('przycisk') ): // repeater przycisku w grupie sekcja_advanced
                        while( have_rows('przycisk')): the_row();?>
                        <a class="button" href="<?php echo $link; ?>"><?php echo $tytul_przycisku; ?></a>
                      <?php endwhile; ?>
                      <?php endif; ?>
                      </div>
              </div>


      <?php endwhile; ?>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<section class="patternBar">
  <?php if($offer['tytul']): ?>
    <h2><?php echo $offer['tytul']; ?></h2>
  <?php endif; ?>
</section>
<section class="siteWidth">
  <div class="cards offer flexing">
   <?php
    if( have_rows('offer') ): // grupa
      while( have_rows('offer')): the_row();?>
        <?php if( have_rows('karta') ) : // repeater ?>

            <?php while( have_rows('karta') ) : the_row();
              $ikona = get_sub_field('ikona');
              $tytul = get_sub_field('tytul');
              $kontent = get_sub_field('kontent');
              $link = get_sub_field('link');

              ?>
              <div class="card">
                <div class="cardWrapper">
                  <div class="cardContent">
                    <div class="icon"><?php echo wp_get_attachment_image($ikona['id'], 'icon'); ?></div>
                    <h3><?php echo $tytul; ?></h3>
                    <p><?php echo $kontent; ?></p>
                  </div>
                </div>
              </div>

            <?php endwhile; ?>

        <?php endif; ?>
    <?php endwhile; endif; ?>
    </div>
</section>
</div>
<?php get_footer(); ?>
