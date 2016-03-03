<!-- MENU BOOTSPRAP MENU 
1. Cargar archivo wp_bootstrap_navwalker.php al theme -- descargarlo en https://github.com/twittem/wp-bootstrap-navwalker
2. Agregar el siguiente codigo al function.php
-->

<?php require_once('wp_bootstrap_navwalker.php'); ?>

<!--
3. Agregar al header del menu
-->

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php wp_nav_menu( array(
	'menu' => 'principal',
	'theme_location' => 'principal',
	'depth' => 2,
	'container' => '',
	'container_class' => '',
	'menu_class' => 'nav navbar-nav navbar-right',
	'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
	'walker' => new wp_bootstrap_navwalker())
);?>
</div>
