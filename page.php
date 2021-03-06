<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<div class="srodkowa_czesc">
<div class="container">
<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>
    <?php get_sidebar( 'left' ); ?>

    <div class="col-md-<?php gierojbootstrap3_main_content_width(); ?> dmbs-main zwykla_strona">

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!--<h2 class="page-header"><?php the_title() ;?></h2>-->
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php comments_template(); ?>

        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

    </div>

    <?php //get the right sidebar ?>
    <?php get_sidebar( 'right' ); ?>
 </div>

</div> 
</div>
<!-- end content container -->

<?php get_footer(); ?>
