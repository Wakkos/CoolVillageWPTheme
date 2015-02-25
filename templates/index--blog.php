<!-- Si, es obvio: le daremos un comportamiento de tabla con "display:table" -->
<main class="home-content">
    <section role="main" class="home-content__main">
    <!-- La navegación del blog -->
    
        <?php rewind_posts(); ?>
        <?php query_posts( "category_name=blog,tweet&posts_per_page=8" ) ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php $category = get_the_category(); ?>
            <article class="main__item  <?php echo $category[0]->cat_name; ?> portada">
                <header>                         
                    <h2>
                        <?php $url = rwmb_meta('cool_url'); ?>
                        <a href="<?php if ( $category[0]->cat_name == 'tweet' ) {echo $url;} else {the_permalink();}?>">
                            <?php the_title() ?>
                        </a>
                    </h2>  

                    <small> 
                        <time datetime="<?php the_date( 'd-m-Y') ?>" pubdate><?php the_time('n-j-Y') ?></time> 
                    </small>
                </header>
                    
                </article>
        <?php endwhile; ?>
        <!-- post navigation -->
            <?php include( TEMPLATEPATH . '/templates/global__next-prev.php' ); ?>
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>
    </section>
    
    <!-- Incluimos el sidebar aquí -->
    <?php get_sidebar(); ?>