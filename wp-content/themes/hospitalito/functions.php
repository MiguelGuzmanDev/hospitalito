<?php 

//Tamaño de imagen 
add_image_size( 'destacada', 750, 300,true );

// Etiqueta de titulo 
add_theme_support( 'title-tag' );


function fac_enqueue_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'fac-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'fac-style', 'rtl', 'replace' );

	// Add output of Customizer settings as inline style.
	// wp_add_inline_style( 'fac-style', twentytwenty_get_customizer_css( 'front-end' ) );

	// Add print CSS.
	wp_enqueue_style( 'fac-bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', null, $theme_version, 'all' );
	wp_enqueue_style( 'fac-boostrap-icons', get_template_directory_uri() . '/css/bootstrap-icons.css', null, $theme_version, 'all' );
	wp_enqueue_style( 'fac-carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css', null, $theme_version, 'all' );
	wp_enqueue_style( 'fac-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', null, $theme_version, 'all' );
	wp_enqueue_style( 'fac-medic-care', get_template_directory_uri() . '/css/templatemo-medic-care.css', null, $theme_version, 'all' );
}

add_action( 'wp_enqueue_scripts', 'fac_enqueue_styles' );

function fac_enqueue_scripts() {
    // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'Carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Scrollspy', get_template_directory_uri() . '/js/scrollspy.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'fac_enqueue_scripts');

add_theme_support( 'custom-logo', array(
    //ALTO
    'height'      => 50,
    //ANCHO
    'width'       => 250,
    //PERMITIR FLEXIBILIDAD EN EL TAMAÑO
	'flex-height' => true,
    'flex-width'  => true,
    //
	'header-text' => array( 'Conócenos', 'Hospitalito de la Mixteca, A. C., inició en el año 2018 en el Municipio de la Heroica Ciudad de Tlaxiaco de la región Mixteca del estado de Oaxaca, México.' ),
) );  


add_action( 'after_setup_theme', 'raiola_registrar_menu' );
function raiola_registrar_menu() {
    register_nav_menu( 'menu-principal', 'Menu Principal' );
}

add_filter('nav_menu_css_class' , 'raiola_nav_class' , 10 , 2);
 
function raiola_nav_class($classes, $item){
    $classes[] = 'nav-link';
    return $classes;
}


/*
* Sin esta linea no se habilita la opcion en imagen destacada al editar un post de lade derecho.
* es.wordpress.org/support/topic/no-me-aparece-para-anadir-imagen-destacada/
*/
add_theme_support( 'post-thumbnails' );


//Tamaño de imagen 
add_image_size( 'destacada', 350, 300, true );




/* meta tags*/

//Agregar metadatos de Open Graph para Facebook y Twitter
add_action('wp_head', 'opengraph_fb_tw', 5);

function opengraph_fb_tw() {
	global $post;
  	if( is_single() || is_page() ) {
	    $post_id = get_queried_object_id();
	    $url = get_permalink($post_id);
	    $title = get_the_title($post_id);
	    $site_name = get_bloginfo('name');	
	    $description = wp_trim_words( get_post_field('post_content', $post_id), 25, '...' );
	    echo '<meta property="og:type" content="article" />';
	    echo '<meta property="og:title" content="' . esc_attr($title) . ' - Hospitalito de la Mixteca A. C." />';
	    echo '<meta property="og:description" content="' . esc_attr($description) . '" />';
	    echo '<meta property="og:url" content="' . esc_url($url) . '" />';
	    echo '<meta property="og:site_name" content="Hospitalito de la Mixteca A. C." />';
		if(!has_post_thumbnail( $post->ID )) { 
	        $default_image="https://hospitalitodelamixteca.org/wp-content/themes/hospitalito/assets/img/conocenos/HDLM1.png";
	        echo '<meta property="og:image" content="' . $default_image . '">';
	        echo '<meta name="twitter:image" content="' . $default_image . '">';
	    }
	    else{
	        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	        echo '<meta name="twitter:image" content="' . esc_attr( $thumbnail_src[0] ) . '">';
	    }
	    echo '<meta property="og:image:width" content="500" />';
		echo '<meta property="og:image:height" content="332" />';
		//echo '<meta property="fb:app_id" content="XXXXXXX" />';
		echo '<meta property="article:author" content="https://www.facebook.com/SudoMiguelGuzman" />';
	    
	    // Twitter Card
	    echo '<meta name="twitter:card" content="summary">';
	    echo '<meta name="twitter:title" content="' . esc_attr($title) . ' - Hospitalito de la Mixteca A. C.">';
	    echo '<meta name="twitter:site" content="@HospitalitoA">';
	    echo '<meta name="twitter:creator" content="@MiguelGuzmanDev">';
	    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">';
  	}
}

//norfipc.com/wordpress/agregar-datos-open-graph-paginas-de-wordpress.php