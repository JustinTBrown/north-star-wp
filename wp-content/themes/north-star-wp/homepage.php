<?php
/*
Template Name: HOME
*/
define( 'WP_USE_THEMES', false );
get_header(); ?>

<section class="introduction">
  <div class="row small-centered medium-10 large-8 columns">
    <div class="personal-intro">
      <p>
        Welcome to North Star.
        <span class="large">I'm Cheryl McDougall.</span>
        MSW RSW
      </p>
    </div>
    <div class="starting-questions">
      <p>
        Before we go any further,
        <span class="large">let me put your mind at rest by answering your three most important questions.</span>
      </p>
    </div>
  </div>
</section>

<!-- ACCORDION DIVS -->
<?php 
  $args = array(
    'category_name=homepage,-Uncategorized',
    // 'meta_key'   => 'order',
    // 'orderby'    => 'meta_value_num',
    'orderby'     => 'title',
    'order'       => 'ASC',
    // 'orderby'     => 'ID',
  );
?>
<?php $query = new WP_Query( $args ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

  <?php $meta = get_post_custom(); ?>
  <section class="question-and-answer question-<?php echo $meta['order'][0]; ?>">
    <div class="row small-centered medium-10 large-8 columns">
      <dl class="accordion" data-accordion>
        <dd class="accordion-navigation">
          <div class="question">
            <header>
              <span> <?php echo $meta['question-pre'][0]; ?></span>
              <h2> <?php echo $meta['question-main'][0]; ?> </h2>
            </header>
          </div>
          <a href="#panel<?php echo $meta['order'][0]; ?>" class="circle">
            <i class="fi-arrow-down"></i>
          </a>
          <div id="panel<?php echo $meta['order'][0]; ?>" class="content answer">
            <span class="large"> <?php echo $meta['answer'][0]; ?> </span>
            <p>
              <?php echo $meta['explanation'][0]; ?>
            </p>
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
  <a href="#">
    <button class="alternate-button">Let's begin...</button>
  </a>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>