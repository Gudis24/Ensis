<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 */

get_header();
?>
<?php $contact = get_field('contact'); ?>
<div class="container page">
<?php if( have_rows('contact') ): // groupe
  while( have_rows('contact')): the_row();?>
  <?php $tytul = get_sub_field('tytul');  ?>
  <?php $contact_form = get_sub_field('contact_form');  ?>
  <?php $image = get_sub_field('image');  ?>
<section class="sections contact">
  <div class="sectionContainer flexing siteWidth">
      <div class="imageSide sectionSide">
          <?php echo wp_get_attachment_image($image['id'], 'auto'); ?>
      </div>
      <div class="contentSide sectionSide">
          <h2><?php echo $tytul; ?></h2>
              <?php echo do_shortcode($contact_form); ?>
      </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

</div>
<?php get_footer(); ?>
