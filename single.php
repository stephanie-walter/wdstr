<?php

get_header(); ?>
<section class=" content mod item full-width ">
  
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<nav class="nav-single">
						<p class="assistive-text"><?php _e( 'Post navigation', 'themename' ); ?></p>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'themename' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'themename' ) ); ?></span>
				</nav><!-- #nav-single -->

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>

						<div class="entry-meta">
								<?php _e('Publié le', 'themename') ?> <strong>
								  <?php the_time( get_option('date_format') ); ?></strong> 
						   -  
						  <span class="comment-count"> <?php comments_popup_link(__('No Comments', 'themename'), __('1 Comment', 'themename'), __('% Comments', 'themename')); ?>
						  </span>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

					
				</article><!-- #post-<?php the_ID(); ?> -->

				<nav class="nav-single">
						<p class="assistive-text"><?php _e( 'Post navigation', 'themename' ); ?></p>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'themename' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'themename') ); ?></span>
				</nav><!-- #nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

</section>


<?php get_footer(); ?>