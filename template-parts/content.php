<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firsttechshowcase
 */

?>

<div class="col s12 m4 l4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blog-post">
    <div class="card">	
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="thumb-title entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="thumb-title entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="meta-media">
					<div class="single-meta">
						<?php firsttechshowcase_posted_on();?>
					</div>
					<div class="single-meta">
						<?php firsttechshowcase_posted_by();?>
					</div>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			
			
			<div class="card-content blog-post-content">
			<?php firsttechshowcase_post_thumbnail(); ?>
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'firsttechshowcase' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'firsttechshowcase' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php firsttechshowcase_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	  </div><!--blog-post-->
	</div><!--card-->				
  </div><!-- #post-<?php the_ID(); ?> -->
