<?php
/*
Template Name: HOME
*/
define( 'WP_USE_THEMES', false );
get_header(); ?>

<!-- INTRODUCTION-HERO SECTION -->
<?php
  // Must be inside a loop.

  if ( has_post_thumbnail() ) {
    $post_thumbnail_id = get_post_thumbnail_id( $page->ID );
    $post_thumbnail_link = wp_get_attachment_url( $post_thumbnail_id );
    // $a = '<section class="hero" style="background-image:url(';
    // $b = $post_thumbnail_link;
    // $c = ')";></section>';
    // echo $a . $b . $c;
  }
  else {
    // do nothing
  }
?>

<section class="introduction" style="background-image:url( <?php echo $post_thumbnail_link; ?> )">
  <?php $home_id =  get_option( 'page_on_front'); ?>
  <!-- <?php echo $home_id; ?> -->
  <!-- <?php $home_meta = get_post_meta( $home_id, 'lets-begin-link', true); ?> -->
  <!-- <?php echo $home_meta; ?> -->
  <!-- <?php echo get_post_meta( $home_id, 'welcome', true); ?> -->

  <?php $intro_meta = get_post_custom(); ?>


  <div class="row small-centered medium-10 large-8 columns">
<!--     <div class="personal-intro">
      <p>
        <?php echo $intro_meta['welcome'][0]; ?>
        <span class="large"><?php echo $intro_meta['name'][0]; ?></span>
        <?php echo $intro_meta['cred'][0]; ?>
      </p>
    </div>

    <div class="starting-questions">
      <p>
        Before we go any further,
        <span class="large">let me put your mind at rest by answering your three most important questions.</span>
      </p>
    </div> -->

    <?php while (have_posts()) : the_post(); ?>
      <?php do_action('foundationPress_page_before_entry_content'); ?>
      <?php the_content(); ?>
    <?php endwhile;?>

  </div>
</section>

<!-- ACCORDION DIVS -->
<?php 
  $args = array(
    // 'category_name=homepage,-Uncategorized',
    'cat=-4',
    // 'meta_key'   => 'post-order',
    // 'orderby'    => 'meta_value_num',
    'orderby'     => 'title',
    'order'       => 'ASC',
    // 'orderby'     => 'ID',
  );
?>
<?php $query = new WP_Query( $args ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

  <?php $meta = get_post_custom(); ?>
  <section class="question-and-answer question-<?php echo $meta['post-order'][0]; ?>">
    <div class="row small-centered medium-10 large-8 columns">
      <dl class="accordion" data-accordion>
        <dd class="accordion-navigation">
          <div class="question">
            <header>
              <span> <?php echo $meta['question-pre'][0]; ?></span>
              <h2> <?php echo $meta['question-main'][0]; ?> </h2>
            </header>
          </div>

          <a href="#panel<?php echo $meta['post-order'][0]; ?>" class="circle">
            <p class="down-arrow rotate-90">
              &#62;
            </p>
          </a>

          <div id="panel<?php echo $meta['post-order'][0]; ?>" class="content answer">

            <?php if ( $meta['left-justified'][0] == yes ) {
              echo '<div class="medium-2 large-3 columns"><br></div><div class="medium-9 large-7 columns">';
            } ?>

              <span class="large"> <?php echo $meta['answer'][0]; ?> </span>
              <p>
<!--                 <?php echo $meta['explanation'][0]; ?> -->
                <?php the_content(); ?>
              </p>
            
            <?php if ( $meta['left-justified'][0] == yes ) {
              echo '</div><div class="medium-1 large-2 columns"><br></div>';
            } ?>

          </div>
        </dd>
      </dl>
    </div>
  </section>

<?php endwhile; else : ?>
  <!-- do nothing -->
<?php endif; ?>


<!-- FIFTH SECTION -->

<section class="get-started">
  <a href="https://northstarcounselling.privacemail.com/index.php?page=register" onclick="ga('send', 'event', 'Home', 'Click', 'Let\'s Begin');">
    <button class="alternate-button">Let's begin...</button>
  </a>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>