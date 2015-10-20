<?php
/**
 * Template Name: Full width page
 * Description: for full width pages
 *
 *
 */

get_header(); ?>

<section class=" content mod item full-width ">
<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<?php if (!is_front_page() ){?>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
					<?php }?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php if ( ! is_admin() ) { edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); } ?>
						
					</div> 
				</article> 

	</section>

<?php get_footer(); ?>