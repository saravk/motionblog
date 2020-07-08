<div class="js-responsive-nav">
  <div class="responsive-nav">
    <div class="close-responsive-click-area" tabindex="1" role="button" on="tap:id-body.toggleClass(class='show-responsive-nav')">
      <div class="close-responsive-button"></div>
    </div>
    <nav class="nav-container">
      <?php wp_nav_menu( array('menu_class' => 'navbar-nav', 'theme_location'  => 'primary', 'container' => '', 'container_class' => '',));// ?>
    </nav>
    <div class="social pf-nav-social">
      <ul><?php mb_social_links_nav();?></ul>
    </div>
  </div>
</div>