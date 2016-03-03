<!-- REGISTRAR MENU -->

<!-- Esto es para el Menu Principal function.php -->
<?php register_nav_menu( 'principal', __( 'Menu Principal') ); ?>
<?php register_nav_menu( 'footer', __( 'Menu Footer') ); ?>



<!-- Insertar en header.php -->
<div id="menu">
	<?php wp_nav_menu( array( 'theme_location' => 'principal', 	'menu_class' => 'nav-menu' ) ); ?>
</div>


<div id="menufooter">
	<?php wp_nav_menu( array( 'theme_location' => 'principal', 	'menu_class' => 'nav-menu' ) ); ?>
</div>