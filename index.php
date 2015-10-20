<?php
  

get_header(); ?>

<?php /*if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="heading">
	<h1> <?php echo the_title() ?> </h1>
	<div class="blogintro">	
	<p><?php the_content() ?></p>
	</div>
</div>

<?php endwhile; */ // end of the loop. ?>

<section class=" content mod item full-width ">

<?php get_template_part( 'loop', 'index' ); ?>
</section>

<?php get_footer(); ?>