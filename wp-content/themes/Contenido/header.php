<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
	
<!--Script Redireccionamiento-->
<script type="text/javascript">  

var myVar;

function Redireccionar() {

    myVar = setTimeout(function(){ window.open('http://localhost/CAR','_parent'); }, 60000);

}


function Detener() {

    clearTimeout(myVar);

	Redireccionar();

}

</script>
<!--Fin Script Redireccionamiento-->
	
<!--Script Cronometro-->
  <script type="text/javascript">
    //setInterval
	
    var cronometro;

    function detenerse() {
        clearTimeout(contador_s)
		{
					contador_s=60;
                }
    }
	
    function carga()
    {
        contador_s =60;
        s = document.getElementById("segundos");
		
        cronometro = setInterval(
            function(){
                if(contador_s==0)
                {
					contador_s=60;
                }
 
                s.innerHTML = contador_s;
                --contador_s;
            }
            ,1000);
    }
     </script>
<!--Fin Script Cronometro-->
	
<script type="text/javascript" src="http://localhost/CAR/wp-content/themes/Contenido/js/jquery-1.11.3.js" ></script> 

<!--Botonera-->
<script type="text/javascript">

$(document).ready(function(){

		var contador = 0;
	$('#menu_logo').click(function efecto(){
	if (contador/2==0){
	$('#Menu').animate({'left': 320+'px'});
	contador+=1;
	}
	else{
	$('#Menu').animate({'left': 0+'%'});
	contador+=-1;
		
	}
	});

});

$(document).ready(function(){
		var contador = 0;
	$('#Boton_Flecha').click(function efecto(){
	if (contador/2==0){
	$('#Menu').animate({'left': 320+'px'});
	contador+=1;
	$('#Boton_Flecha').addClass('Boton_Flecha_active');
	}
	else{
	$('#Menu').animate({'left': 0+'%'});
	contador+=-1;	
	$('#Boton_Flecha').removeClass('Boton_Flecha_active');
	}
	
	});

});

</script>

<!--Fin Botonera-->
	
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onload="Redireccionar(); carga()" onClick="Detener(); detenerse()" onKeyPress="Detener(); detenerse()" style="overflow:hidden;width:100%;"  <?php body_class(); ?>>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<!-- Logo -->
	<a href="http://localhost/CAR/contenido/"><object class="Logo" data="http://localhost/CAR/wp-content/uploads/2018/02/Logo.svg" type="image/svg+xml"></object></a>
	<!-- Fin Logo -->
	
	<!-- Menu Vertical -->
<div class="Menu" id="Menu" onclick="Detener()">

<div class="Boton_Flecha" id="Boton_Flecha">
    <img name="Ancla_Menu" src="http://localhost/CAR/wp-content/uploads/2018/02/Menu-1.png" width="100%"/>
</div>
	
	    <a href="http://localhost/CAR/contenido/">
        <div class="Contenedor_Botones">
          <img src="http://localhost/CAR/wp-content/uploads/2018/07/Inicio.png" width="100%"/>
        </div>
    </a>
	
    <a href="http://localhost/CAR/consultas-2/">
        <div class="Contenedor_Botones">
            <img src="http://localhost/CAR/wp-content/uploads/2018/02/Consultas.png" width="100%"/>
        </div>
    </a>
    
    <a href="http://localhost/CAR/galeria-2/">
        <div class="Contenedor_Botones">
          <img src="http://localhost/CAR/wp-content/uploads/2018/02/Galeria.png" width="100%"/>
        </div>
    </a>
    
    
    
</div>
<!-- Fin Menu Vertical -->
	
<div class="Cuenta_Atras">
	<p><span id="segundos">60</span></p>
</div>  
	
<video class="video-fondo" width="100%" autoplay loop preload="auto" muted>
  <source src="http://localhost/CAR/wp-content/uploads/2018/02/Especies.mp4" type="video/mp4">
</video>

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
