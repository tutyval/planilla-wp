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

?> 

<?php


	function registro_scrip () {


 // registro de scrip

 wp_register_script( 'bootstrap.min',  get_theme_file_uri ('/assets/js/bootstrap.min.js'), null, 1.0, true );




 //euqueue scrip
 wp_enqueue_script('bootstrap.min');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );
 ?>
