<?php get_header(); ?>
<section id="wrap" role="main">
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php endwhile; endif; ?>
</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>