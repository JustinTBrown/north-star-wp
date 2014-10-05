<!-- FOOTER -->
<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
  <div class="large-1 columns"></div>
  <div class="large-4 large-push-8 columns">
    <nav class="footer">
      <ul>
        <li>
          <a href="http://northstarcounselling.privacemail.com/" class="navlink-1">SIGN UP AND LET US HELP</a>
        </li>
        <li>
          <a href="http://northstarcounselling.privacemail.com/" class="navlink-1">MEMBER SIGN IN</a>
        </li>
        <br>
        <li>
          <a href="/?page_id=79" class="navlink-1">CONTACT US</a>
        </li>
        <br>
        <?php
          $home_id = get_option('page_on_front');
          $args = array(
            'sort_column' => 'menu_order',
            'child_of' => $home_id,
          );
          $pages = get_pages( $args );
          foreach ($pages as $page) {
            $page_title = get_the_title($page);
            $pg_title = mb_convert_case( $page_title , MB_CASE_UPPER);
            echo '<li><a href="' . get_page_link($page) . ' " class="navlink-' . $page->menu_order . '">' . $pg_title . '</a></li>';
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
       / <a href="/wp-admin" class="navlink-1">ADMIN</a>
    </p>
  </div>
  <?php do_action('foundationPress_after_footer'); ?>
</footer>

<a class="exit-off-canvas"></a>

<?php do_action('foundationPress_layout_end'); ?>

<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
