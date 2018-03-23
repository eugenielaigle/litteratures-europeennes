 </div> <!-- /.container -->

 <footer class="blog-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-3 footer-part1">
        <a href=""><img class="img-responsive" src="<?php bloginfo('stylesheet_directory') ?>/images/logo-footer.svg"></a>
        <p>&copy; 2018 - Création & développement <a href="https://www.comtogether.fr/">Com Together</a></p>
        <a href="">Mentions légales</a>
      </div>
      <div class="col-md-8 col-sm-6 footer-menu" id="navigation-principale" role="navigation">
       <?php wp_nav_menu( array( 'theme_location' => 'menu-footer',
       'menu_class'     => 'primary-menu', ) ); ?>
     </div>
     <div class="col-md-2 col-sm-3">
      <!-- ajout de footer widget area -->
      <?php if ( is_active_sidebar( 'widget-footer' ) ) : ?>
       <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
         <?php dynamic_sidebar( 'widget-footer' ); ?>
       </div>
     <?php endif; ?>
     <!-- fin footer widget area -->
     <p class="socialmedia-title-footer">SUIVEZ-NOUS</p>
     <div class="socialmedia">
            <a href="">
              <div class="social-container">
                <div class="facebook-container"></div>
              </div>
            </a>
            <a href="">
              <div class="social-container">
                <div class="twitter-container"></div>
              </div>
            </a>
            <a href="">
              <div class="social-container">
                <div class="insta-container"></div>
              </div>
            </a>
          </div>
   </div>
 </div>
</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
