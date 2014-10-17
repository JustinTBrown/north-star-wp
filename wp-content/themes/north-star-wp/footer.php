<!-- FOOTER -->
<footer class="row">
  <?php do_action('foundationPress_before_footer'); ?>
  <div class="large-1 columns"></div>
  <div class="large-4 large-push-8 columns">
    <nav class="footer">
      <ul>
        <li>
          <a href="https://northstarcounselling.privacemail.com/index.php?page=register" class="navlink-1" onclick="ga('send', 'event', 'Footer', 'Click', 'Sign up');">SIGN UP AND LET US HELP</a>
        </li>
        <li>
          <a href="http://northstarcounselling.privacemail.com/" class="navlink-1" onclick="ga('send', 'event', 'Footer', 'Click', 'Sign in');">MEMBER SIGN IN</a>
        </li>
        <!-- <br> -->
        <p class="list-break"></p>
        <!-- <div class="list-break"></div> -->
        <li>
          <a href="/contact" class="navlink-1 <?php if (is_page('contact')) {echo "is-current";} ?>">CONTACT US</a>
        </li>
        <!-- <div class="list-break"></div> -->
        <p class="list-break"></p>
        <!-- <br> -->
        <?php
          $home_id = get_option('page_on_front');
          $args = array(
            'sort_column' => 'menu_order',
            'meta_key' => 'secondary_page',
            'meta_value' => 'yes',
          );
          $pages = get_pages( $args );
          foreach ($pages as $page) {
            $page_title = get_the_title($page);
            $pg_title = mb_convert_case( $page_title , MB_CASE_UPPER);
            $current_page_title = get_the_title();
            if ( $page_title == $current_page_title ) {
              $is_current = " is-current";
            } else {
              // nothing
            }
            echo '<li><a href="' . get_page_link($page) . ' " class="navlink-' . $page->menu_order . $is_current . '">' . $pg_title . '</a></li>';
            $is_current = "";
          };
        ?>
      </ul>
    </nav>
  </div>
  <div class="large-7 large-pull-4 columns content">
    <a href="/">
      <img src="/wp-content/uploads/2014/10/north-star-logo.png" alt="North Star Counselling" class="footer-logo">
    </a>
    <p class="copyright">
      COPYRIGHT © 2014 NORTH STAR COUNSELLING LTD. ALL RIGHTS RESERVED
    </p>
  </div>
  <?php do_action('foundationPress_after_footer'); ?>
</footer>

<a class="exit-off-canvas"></a>

<?php do_action('foundationPress_layout_end'); ?>

<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55613798-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>