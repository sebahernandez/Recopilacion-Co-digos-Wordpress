<!-- CODIGOS DE USO GENERAL -->

<!-- Agregar clases al BODY -->
<body <?php body_class(); ?>> 

<!-- Código para llamar a la ruta del theme -->
<?php bloginfo( 'template_directory'); ?>

<!-- Código para llamar a la ruta del archivo style.css -->
<?php bloginfo('stylesheet_url'); ?>

<!-- Código para llamar a la ruta de Sitio -->
<?php bloginfo( 'home'); ?>

<!-- Código muestra nombre del Sitio -->
<?php bloginfo( 'name'); ?>

<!-- Código muestra la descripción del sitio -->
<?php bloginfo( 'description'); ?>