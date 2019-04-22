<?php
/**
 * Coller functions and definitions
 *
 * @package Coller
 */

if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once get_template_directory() . '/inc/options-framework.php';
}

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});
	
	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}
	
});
</script>
 
<?php
}

if ( ! function_exists( 'coller_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function coller_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Coller, use a find and replace
	 * to change 'coller' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'coller', get_template_directory() . '/languages' );
	
	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	 global $content_width;
	 if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	
	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'coller' ),
		'footer' => __('Footer Menu', 'coller' )
	) );

	/**
	 * Enable support for Post Formats
	 */
	//add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'coller_custom_background_args', array(
		'default-color' => 'f7f7f7',
		'default-image' => '',
	) ) );
	
	add_editor_style( 'custom-editor-style.css' );
}
endif; // coller_setup
add_action( 'after_setup_theme', 'coller_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function coller_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'coller' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'coller_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function coller_scripts() {
	wp_enqueue_style( 'coller-style', get_stylesheet_uri(), array('coller-slider-style', 'coller-fonts') );
	wp_enqueue_style( 'coller-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
	wp_enqueue_style( 'coller-slider-style', get_template_directory_uri()."/css/jquery.bxslider.css" );
	
	wp_enqueue_script( 'coller-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'coller-slider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery') );

	wp_enqueue_script( 'coller-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( ( of_get_option('slider_enabled') != 0 ) && ( (is_home() == true) || (is_front_page() == true) ) ) {
		wp_enqueue_script( 'coller-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery','coller-slider') );
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'coller-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'coller_scripts' );

function coller_custom_head_codes() {
 
 if ( (function_exists( 'of_get_option' )) && (of_get_option('customcss1', true) != 1) ) {
	echo "<style>".of_get_option('customcss1', true)."</style>";
 }
}
add_action('wp_head', 'coller_custom_head_codes');
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


class Coller_Recent_Posts extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'coller_rp', // Base ID
			__('Coller Recent Posts', 'coller'), // Name
			array( 'description' => __( 'Display your recent posts, with a Thumbnail.', 'coller' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$no_of_posts = apply_filters( 'no_of_posts', $instance['no_of_posts'] );

		echo $args['before_widget'];
		
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		
		// WP_Query arguments
		$qa = array (
			'post_type'              => 'post',
			'posts_per_page'		 => $no_of_posts,
			'offset'				 => 0,
			'ignore_sticky_posts'    => 1

		);
		
		// The Query
		$recent_articles = new WP_Query( $qa );
		if($recent_articles->have_posts()) : ?>
		<ul class="rp">
		<?php
			while($recent_articles->have_posts()) : 
			$recent_articles->the_post();
         ?>
         		 
		         <li class='rp-item'>
		         <?php if( has_post_thumbnail() ) : ?>
		         <div class='rp-thumb'><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
		         <?php 
		         else :
		         ?>
		         <div class='rp-thumb'><a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nthumb.png"></a></div>
		         <?php
		         endif; ?>	
		         <div class='rp-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		         <div class="rp-date"><?php the_time('M j, Y'); ?></div>
		         </li>      
		      
		<?php
		      endwhile;
		      wp_reset_postdata();
		   else: 
		?>
		
		      Oops, there are no posts.
		
		<?php
		   endif;
		?>
		</ul>
		<?php
		
		echo $args['after_widget'];
	}

 	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Latest Articles', 'coller' );
		}
		if ( isset( $instance[ 'no_of_posts' ] ) ) {
			$no_of_posts = $instance[ 'no_of_posts' ];
		}
		else {
			$no_of_posts = __( '5', 'coller' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' , 'coller'); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'no_of_posts' ); ?>"><?php _e( 'No. of Posts:','coller' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'no_of_posts' ); ?>" name="<?php echo $this->get_field_name( 'no_of_posts' ); ?>" type="text" value="<?php echo esc_attr( $no_of_posts ); ?>" />
		</p>
		<?php 
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['no_of_posts'] = ( ! empty( $new_instance['no_of_posts'] ) ) ? strip_tags( $new_instance['no_of_posts'] ) : '5';
		if ( is_numeric($new_instance['no_of_posts']) == false ) {
			$instance['no_of_posts'] = $old_instance['no_of_posts'];
			}
		return $instance;
		
		
	}
}
add_action( 'widgets_init', 'register_coller_widget' );  
function register_coller_widget() {  
    register_widget( 'Coller_Recent_Posts' );  
}  

function coller_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
	            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	            echo '<div class="pagination"><div><ul>';
	            echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
	            foreach ( $page_format as $page ) {
	                    echo "<li>$page</li>";
	            }
	           echo '</ul></div></div>';
	 }
}
add_action('coller-content-below', 'coller_pagination' );

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
