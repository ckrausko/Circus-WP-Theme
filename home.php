<?php
/*
Template Name: Test
*/
?>

<?php get_header(); ?>

<div id="clear">
</div>
<section id="homeWrap" role="main">
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">

</header>

</article>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
