<?php
/**
 * @package Coller
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php coller_posted_on(); ?>
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"> <?php comments_popup_link( __( 'Leave a comment', 'coller' ), __( '1 Comment', 'coller' ), __( '% Comments', 'coller' ) ); ?></span>
		<?php endif; ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
    <?php if ( has_post_thumbnail() ) { ?>
    <div id="featured_image">
    	<?php the_post_thumbnail( array(150,150) ); ?>
    </div>
    <?php }
		?>
	<div class="entry-content">
		<?php the_excerpt(500); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-## -->
