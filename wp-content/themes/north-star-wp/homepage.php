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

<!-- FIRST SECTION -->
<!-- <section class="question-and-answer first-question">
  <div class="row small-centered medium-10 large-8 columns">
    <dl class="accordion" data-accordion>
      <dd class="accordion-navigation">
        <div class="question">
          <header>
            <span>Your first, and most important question.</span>
            <h2>Can counselling work for me?</h2>
          </header>
        </div>
        <a href="#panel1" class="circle">
          <i class="fi-arrow-down"></i>
        </a>
        <div id="panel1" class="content answer">
          <span class="large">Yes it can.</span>
          <p>
            It helps millions every day in all walks of life, with all kinds of problems. It helps the young and the old, the rich and the poor, the ones who have made it and the ones on their way. It will help you.
          </p>
        </div>
      </dd>
    </dl>
  </div>
</section> -->

<!-- SECOND SECTION -->
<!-- <section class="question-and-answer second-question">
  <div class="row small-centered medium-10 large-8 columns">
    <dl class="accordion" data-accordion>
      <dd class="accordion-navigation">
        <div class="question">
          <header>
            <span>Your second question is...</span>
            <h2>Can you help me?</h2>
          </header>
        </div>
        <a href="#panel2" class="circle">
          <i class="fi-arrow-down"></i>
        </a>          
        <div id="panel2" class="content answer">
          <span class="large">Aenean massa, mattis congue.</span>
          <p>
            Mauris non ex odio. Suspendisse augue diam, rutrum a nibh at, porttitor bibendum dui. Donec porttitor nisi a tortor laoreet cursus. Proin porta orci arcu, sit amet mollis nisi efficitur.Mauris non ex odio. Suspendisse augue diam, rutrum a nibh at, porttitor bibendum dui.
          </p>
        </div>
      </dd>
    </dl>
  </div>
</section> -->

<!-- THIRD SECTION -->
<!-- <section class="question-and-answer third-question">
  <div class="row small-centered medium-10 large-8 columns">
    <dl class="accordion" data-accordion>
      <dd class="accordion-navigation">
        <div class="question">
          <header>
            <span>And finally...</span>
            <h2>Can online counselling work for me?</h2>
          </header>
        </div>
        <a href="#panel3" class="circle">
          <i class="fi-arrow-down"></i>
        </a>          
        <div id="panel3" class="content answer">
          <span class="large">Aenean massa, mattis congue.</span>
          <p>
            Mauris non ex odio. Suspendisse augue diam, rutrum a nibh at, porttitor bibendum dui. Donec porttitor nisi a tortor laoreet cursus. Proin porta orci arcu, sit amet mollis nisi efficitur.Mauris non ex odio. Suspendisse augue diam, rutrum a nibh at, porttitor bibendum dui.
          </p>
        </div>
      </dd>
    </dl>
  </div>
</section> -->

<!-- FOURTH SECTION -->
<!-- <section class="question-and-answer fourth-question">
  <div class="row small-centered columns">
    <dl class="accordion" data-accordion>
      <dd class="accordion-navigation">
        <div class="question">
          <header>
            <span>Now, I have a question for you.</span>
            <h2>Why have you come to visit me today?</h2>
          </header>
        </div>
        <a href="#panel4" class="circle">
          <i class="fi-arrow-down"></i>
        </a>          
        <div id="panel4" class="content answer">
          <div class="medium-2 large-3 columns"><br></div>
          <div class="medium-9 large-7 columns">
            <span class="large">You aren't here by accident.</span>
            <p>
              Like millions of others, you’ve decided counselling may help you get through one of the countless situations life puts us all in, through no fault of our own.
            </p>
            <p>
              You may be struggling with depression, anxiety, phobias, addiction, PTSD or ADHD, and seeking healthy ways to cope.
            </p>
            <p>
              Perhaps something in your life is causing you distress, and it seems like there is no place to turn for help.
            </p>
            <p>
              You may have experienced a loss, and you seek a safe, supportive place to talk about it and get through these uncharted waters/difficult times.
            </p>
            <p>
              Like so many others, you may be looking for help with relationships, or you may simply want to know yourself better in order to gain more control over your life.
            </p>
            <p>
              Whatever your reason, North Star is here to be your guiding light.
            </p>
            <p>
              You’ve made a good decision to seek assistance.
            </p>
            <p>
              Together, we’ll get through this.
            </p>
          </div>
          <div class="medium-1 large-2 columns"><br></div>
        </div>
      </dd>
    </dl>
  </div>
</section> -->

<!-- FIFTH SECTION -->
<section class="get-started">
  <a href="#">
    <button class="alternate-button">Let's begin...</button>
  </a>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>