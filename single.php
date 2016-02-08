<?php get_header("single"); ?>

<!-- El contenido de un artículo concreto -->
<?php include( TEMPLATEPATH . '/templates/index--single.php' ); ?>

<!-- Comentarios -->
<?php comments_template(); ?>

<?php get_footer("single"); ?>