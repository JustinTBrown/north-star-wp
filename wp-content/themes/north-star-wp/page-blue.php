<?php
/*
Template Name: BLUE PAGE
*/
get_header(); ?>

<!-- HERO IMAGE -->
<?php
  // Must be inside a loop.

  if ( has_post_thumbnail() ) {
    $post_thumbnail_id = get_post_thumbnail_id( $page->ID );
    $post_thumbnail_link = wp_get_attachment_url( $post_thumbnail_id );
    $a = '<section class="hero" style="background-image:url(';
    $b = $post_thumbnail_link;
    $c = ')";></section>';
    echo $a . $b . $c;
  }
  else {
    // do nothing
  }
?>

<!-- ABOUT US -->
<section class="secondary-page blue-page">
  <div class="row">
    <div class="medium-3 large-4 columns"><br></div>
    <div class="medium-8 large-7 columns">
      <?php do_action('foundationPress_before_content'); ?>

      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>
          <?php do_action('foundationPress_page_before_entry_content'); ?>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile;?>

      <?php do_action('foundationPress_after_content'); ?>
    </div>
    <div class="medium-1 large-1 columns"><br></div>
  </div>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>