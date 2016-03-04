http://www.danielnabil.com/blog/mostrar-contenidos-wordpress-usuarios-conectados/

<?php // Accedemos a la variable global
      global $current_user;
       
      // Obtenemos la informacion del usuario conectado y asignamos los valores a las variables globales
      // Mas info sobre 'get_currentuserinfo()': 
      // http://codex.wordpress.org/Function_Reference/get_currentuserinfo
      get_currentuserinfo();
       
      // Guardamos el nombre del usuario en una variable
      $usuario = esc_attr($current_user->user_login);
 
      // Condicionales: mostramos contenido segun el nombre de cada usuario   
      if ($usuario === 'Admin') {
          // Aqui incluimos el contenido para el usuario 'Admin'
      } elseif ($usuario === 'Daniel') {
          // Aqui incluimos el contenido para el usuario 'Daniel' 
      } else {
          // Aqui incluimos el contenido para el resto de usuarios y visitantes
      } 
?>


Podríamos añadir el código anterior en la plantilla “sidebar.php”, o “header.php” para dar la bienvenida a cada usuario llamándole por su nombre, o por ejemplo para mostrar una foto diferente según el usuario. Las posibilidades dependen de la imaginación de cada uno.

Lo mismo se puede hacer si, en vez de diferenciar el contenido según el nombre, queremos hacerlo según su número de identificador (ID), su dirección de correo o su nombre de pantalla. Por ejemplo, para mostrar contenido diferente según el ID de cada usuario:


<?php 
$user_id = get_current_user_id();
if ( is_user_logged_in() ) {
     if ( 2 == $user_id ) {
    // Contenido exclusivo para el usuario con ID=2
     } elseif ( 3 == $user_id ) {
    // Contenido exclusivo para el usuario con ID=3
     } else {
    // Contenido para el resto de usuarios registrados
        // Cualquier ID menos los anteriores (2 y 3)
     }
} else {
     // Contenido para los usuarios que no están registrados
}
?>