<!-- Si, es obvio: le daremos un comportamiento de tabla con "display:table" -->
<main class="article-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <header>
                    <h1>
                            <?php the_title() ?>
                    </h1>

                    <small>
                        <time datetime="<?php the_date( 'd-m-Y') ?>" pubdate><?php the_time('n-j-Y') ?></time>
                    </small>
                </header>
                <?php the_content(); ?>
    <?php endwhile; ?>

    <?php else : ?>

        <h2>pagina no encontrada</h2>

    <?php endif; ?>
</main>