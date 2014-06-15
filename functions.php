<?php
// Los Menús
add_action( 'init', 'register_my_menus' );
 
function register_my_menus() {
	register_nav_menus(
		array(
			'main-nav-menu' => __( 'Menu Superior' ),
      'footer' => __( 'Menu del footer' )
		)
	);
}


//_______Datos para Autor
function new_contactmethods( $contactmethods ) {
  $contactmethods['twitter'] = 'Twitter'; // Add Twitter
  $contactmethods['facebook'] = 'Facebook'; // Add Facebook
  unset($contactmethods['yim']); // Remove Yahoo IM
  unset($contactmethods['aim']); // Remove AIM
  unset($contactmethods['jabber']); // Remove Jabber

return $contactmethods;
}
add_filter('user_contactmethods','new_contactmethods',10,1);


//Featured Image!
if (function_exists('add_theme_support')) {
     add_theme_support('post-thumbnails');
}

// Tamaños predefinidos para nuestro diseño
if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'post-thumb', 550, 400 );
add_image_size( 'home-thumb', 380, 245, true );
}



//Función para definir el tamaño del excerpt

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

  /* Register the 'primary' sidebar. Es el texto que tiene Stimpy */
  register_sidebar(
    array(
      'id' => 'Stimpy',
      'name' => __( 'Stimpy' ),
      'description' => __( 'Dentro del globo de Stimpy.' ),
      'before_widget' => '<div id="twitter_update_list"><h4 class="widget-title">',
      'after_widget' => '</h4></div>',
      'before_title' => '',
      'after_title' => ''
    )
  );


 /* Register the 'large' sidebar. El resto del sidebar */
  register_sidebar(
    array(
      'id' => 'Contenido',
      'name' => __( 'Contenido' ),
      'description' => __( 'A short description of the sidebar.' ),
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
}

//Function to style comments
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; 
 
   ?>

   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
         <?php echo get_avatar( $comment, $size = '80'); ?>

         <?php printf(__('<h4 class="fn">%s</h4>'), get_comment_author_link()) ?>
         <time class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></time>

      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      
  <div class="c-text">
      <?php comment_text() ?>
  </div>
    <!--   <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div> -->
     </div>
<?php
        }

// Eliminamos el jQuery que tanto insiste WP en incluir aún cuando yo no lo use.
function my_functions_init_booktrib() {
if ( !is_admin() ) wp_deregister_script('jquery');
}
add_action( 'init', 'my_functions_init_booktrib' );


// Incluímos el archivo en que se basan los metaboxes.
include 'metaboxes.php';



//Eliminamos mierda que mete el JetPack si o si.
        function remove_jetpack_styles(){
wp_deregister_style('AtD_style'); // After the Deadline
wp_deregister_style('jetpack-carousel'); // Carousel
wp_deregister_style('grunion.css'); // Grunion contact form
wp_deregister_style('the-neverending-homepage'); // Infinite Scroll
wp_deregister_style('infinity-twentyten'); // Infinite Scroll - Twentyten Theme
wp_deregister_style('infinity-twentyeleven'); // Infinite Scroll - Twentyeleven Theme
wp_deregister_style('infinity-twentytwelve'); // Infinite Scroll - Twentytwelve Theme
wp_deregister_style('noticons'); // Notes
wp_deregister_style('post-by-email'); // Post by Email
wp_deregister_style('publicize'); // Publicize
wp_deregister_style('sharedaddy'); // Sharedaddy
wp_deregister_style('sharing'); // Sharedaddy Sharing
wp_deregister_style('stats_reports_css'); // Stats
wp_deregister_style('jetpack-widgets'); // Widgets
}
add_action('wp_print_styles', 'remove_jetpack_styles');


// Esta función me permite darle a todos los LI de la navegación una misma clase.
// http://www.miguelmanchego.com/2010/wordpress-3-menus/
function custom_nav_class($classes, $item){
$classes[] = "nav--top__item";
return $classes;
}
add_filter('nav_menu_css_class' , 'custom_nav_class' , 10 , 2);



?>