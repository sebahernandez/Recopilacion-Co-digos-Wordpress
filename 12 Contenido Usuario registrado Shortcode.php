<!-- Agregar a functions.php -->
<?php
add_shortcode('solo_usuarios_registrados', 'galusso_solo_usuarios_registrados');
function galusso_solo_usuarios_registrados($atts, $content = null){
	
    if (is_user_logged_in()){
        return $content;
    }else{
        return "Contenido solo disponible para usuarios registrados";
    }
 
}
?>

<!-- usar en el editor -->

[solo_usuarios_registrados]
// Contenido que solo verán los usuarios logueados
[/solo_usuarios_registrados]