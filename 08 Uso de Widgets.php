<!-- REGISTRAR WIDGETS -->

<?php
// Aplicar a functions.php
if ( function_exists('register_sidebars') )
	register_sidebar(array(
		'name'=>'Sidebar_Prueba',
		'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',));
	register_sidebar(array(
		'name'=>'Sidebar_Dos',
		'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',));
?>


<!-- APLICAR EL THEME -->
<?php
// Aplicar en el themes
if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('Sidebar_Prueba') ) : ?>
<?php endif; ?>