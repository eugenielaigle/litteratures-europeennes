<?php
/*
* Template Name: Accueil
*
*/

get_header();
while ( have_posts() ) : the_post();?>
<div class="container-fluid">
  <div class="row border-bottom-red">
    <div class="col-md-8 slider-home no-padding">
      <img src="<?php the_field('image'); ?>" />
    </div>

    <!-- ACTIVITE 1 -->
    <div class="col-md-4 agenda-home">
      <?php if ( is_active_sidebar( 'widget-agenda-home' ) ) : ?>
       <div id="agenda-home-widget-area" class="agenda-home-widget widget-area" role="complementary">
         <?php dynamic_sidebar( 'widget-agenda-home' ); ?>
       </div>
     <?php endif; ?>
   </div>
 </div>
 <div class="row principal-parts">
  <div class="col-md-4 col-sm-4 activity-home border-right">
    <div class="img-activity">
     <img class="icone-activite-home" src="<?php the_field('icone_activite_1'); ?>" />
   </div>
   <h2 class="activity-title"><?php the_field('titre_activite_1'); ?></h2>
   <div class="activity-extrait">
     <p><?php the_field('description_activite_1'); ?></p>
   </div>
   <a href="<?php the_field('lien_vers_lire_la_suite_1'); ?>">
    <p class="lire-suite">Lire la suite >></p>
  </a>

  <a class="hover-bouton" href="<?php the_field('lien_vers_contenu_correspondant'); ?>">
    <button class="bouton-rouge-clair bouton-activity">
      <img class="icone-bouton-home" src="<?php the_field('icone_bouton_1'); ?>" alt="">
      <?php the_field('titre_du_contenu_1'); ?>
    </button>
  </a>
</div>

<!-- ACTIVITE 2 -->
<div class="col-md-4 col-sm-4 activity-home">
  <div class="img-activity">
   <img class="icone-activite-home" src="<?php the_field('icone_activite_2'); ?>" />
 </div>
 <h2 class="activity-title"><?php the_field('titre_activite_2'); ?></h2>
 <div class="activity-extrait">
   <p><?php the_field('description_activite_2'); ?></p>
 </div>
 <a href="<?php the_field('lien_vers_lire_la_suite_2'); ?>">
  <p class="lire-suite">Lire la suite >></p>
</a>

<a class="hover-bouton" href="<?php the_field('lien_vers_contenu_correspondant_2'); ?>">
  <button class="bouton-rouge-clair bouton-activity">
    <img class="icone-bouton-home" src="<?php the_field('icone_bouton_2'); ?>" alt="">
    <?php the_field('titre_du_contenu_2'); ?>
  </button>
</a>
</div>
<div class="col-md-4 col-sm-4 activity-home border-left">
    <div class="img-activity">
   <img class="icone-activite-home" src="<?php the_field('icone_activite_3'); ?>" />
 </div>
 <h2 class="activity-title"><?php the_field('titre_activite_3'); ?></h2>
 <div class="activity-extrait">
   <p><?php the_field('description_activite_3'); ?></p>
 </div>
 <a href="<?php the_field('lien_vers_lire_la_suite_3'); ?>">
  <p class="lire-suite">Lire la suite >></p>
</a>

<a class="hover-bouton" href="<?php the_field('lien_vers_contenu_correspondant_3'); ?>">
  <button class="bouton-rouge-clair bouton-activity">
    <img class="icone-bouton-home" src="<?php the_field('icone_bouton_3'); ?>" alt="">
    <?php the_field('titre_du_contenu_3'); ?>
  </button>
</a>
</div>
</div>

<!-- SLIDER LOGOS -->
<div class="row">
  <div class="col-md-10 col-md-offset-1 logo-slider-home">
    <?php echo do_shortcode('[logoshowcase hide_border="true" dots="false" slides_column="6"]'); ?>
    </div>
</div>
</div>

<div><?php  the_content();?></div>


</div>
<?php endwhile;
get_footer();

?>
