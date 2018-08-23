<?php

//regisro de estilo

function registro_defunciones(){

//registrando estilos, carpeta css

wp_register_style( 'animate',get_parent_theme_file_uri ('/assets/css/animate.css'), null, 1.0, 'screen');
wp_register_style( 'bootstra', get_parent_theme_file_uri("/assets/css/bootstrap.css"), null, 1.0, 'screen');
wp_register_style( 'flexslider',get_parent_theme_file_uri("/assets/css/flexslider.css"), null, 1.0, 'screen');
wp_register_style( 'icomoon',get_parent_theme_file_uri("/assets/css/icomoon.css"), null, 1.0, 'screen');
wp_register_style( 'owl.carrousel.min',get_parent_theme_file_uri("/assets/css/owl.carrousel.min.css"), null, 1.0, 'screen');
wp_register_style( 'owl.theme.default.min',get_parent_theme_file_uri("/assets/css/owl.owl.theme.default.min.min.css"), null, 1.0, 'screen');
wp_register_style( 'style',get_parent_theme_file_uri("/assets/css/style.css"), null, 1.0, 'screen');
wp_register_style( 'themify-icons',get_parent_theme_file_uri("/assets/css/themify-icons.css"), null, 1.0, 'screen');



//enqueue estilos, estilos en cola

wp_enqueue_style('animate');
wp_enqueue_style('bootstrap');
wp_enqueue_style('flexslider');
wp_enqueue_style('icomoon');
wp_enqueue_style('owl.carrousel.min');
wp_enqueue_style('owl.theme.default.min');
wp_enqueue_style('style');
wp_enqueue_style('themify-icons');

}
add_action( 'wp_enqueue_scripts', 'registro_defunciones');


	function register_enqueue_scripts () {


 // registro de scrip

 wp_register_script( 'bootstrap.min',  get_theme_file_uri ('/assets/js/bootstrap.min.js'), array('jQuery3'), null, true );
 wp_register_script( 'google_map',  get_theme_file_uri ('/assets/js/google_map.js'), array('jQuery3'), null, true );
 wp_register_script( 'jquery.easing.1.3',  get_theme_file_uri ('/assets/js/jquery.easing.1.3.js'), array('jQuery3'), null, true );
wp_register_script( 'jquery.min',  get_theme_file_uri ('/assets/js/jquery.min.js'), array('jQuery3'), null, true );
wp_register_script( 'jquery.waypoints.min',  get_theme_file_uri ('/assets/js/jquery.waypoints.min.js'), array('jQuery3'), null, true );
wp_register_script( 'main',  get_theme_file_uri ('/assets/js/main.js'), array('jQuery3'), null, true );
wp_register_script( 'modernizr-2.6.2.min',  get_theme_file_uri ('/assets/js/modernizr-2.6.2.min.js'), array('jQuery3'), null, true );
wp_register_script( 'owl.carousel.min',  get_theme_file_uri ('/assets/js/owl.carousel.min.js'), array('jQuery3'), null, true );
wp_register_script( 'respond.min',  get_theme_file_uri ('/assets/js/respond.min.js'), array('jQuery3'), null, true );

 //euqueue scrip

 wp_enqueue_script('jquery.min');
 wp_enqueue_script('jquery.easing.1.3');
 wp_enqueue_script('jquery.waypoints.min');
 wp_enqueue_script('bootstrap.min');
 wp_enqueue_script('google_map');
 wp_enqueue_script('modernizr-2.6.2.min');
 wp_enqueue_script('owl.carousel.min');
 wp_enqueue_script('respond.min');
 wp_enqueue_script('main');
}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

//desactibar bufer de salida

remove_action('shutdown','wp_ob_end_flush_all', 1);
 ?>
