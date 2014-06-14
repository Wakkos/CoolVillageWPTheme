<header class="mainheader" role="banner">
		<a href="<?php bloginfo('url'); ?>" class="logo" alt="<?php echo '' . get_bloginfo ( 'description' );  ?>" title="<?php echo '' . get_bloginfo ( 'description' );  ?>">
			<img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="<?php echo '' . get_bloginfo ( 'description' );  ?>" title="<?php echo '' . get_bloginfo ( 'description' );  ?>" alt="<?php echo '' . get_bloginfo ( 'description' );  ?>">
		</a>
<div class="kekos">
    <div class="wakkos">
        <div data-picture data-alt="<?php the_title(); ?>">
        <div data-src="<?php bloginfo('template_url'); ?>/img/wakkos.jpg"></div>
        <div data-src="<?php bloginfo('template_url'); ?>/img/kekosalsol.jpg"data-media="(min-width: 48em)"></div>
        <div data-src="<?php bloginfo('template_url'); ?>/img/wakkos.png" data-media="(min-width: 64em)"></div>
        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
        <noscript><img src="<?php bloginfo('template_url'); ?>/img/wakkos.jpg" alt="<?php the_title(); ?>"></noscript>
        </div>
    </div>

    <div class="madhatterlady">
        <div data-picture data-alt="<?php the_title(); ?>">
        <div data-src="<?php bloginfo('template_url'); ?>/img/madhatterlady.jpg" data-media="(max-width: 48em)"></div>
        <div data-src="<?php bloginfo('template_url'); ?>/img/madhatterlady.png" data-media="(min-width: 64em)"></div>

        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
        <noscript><img src="<?php bloginfo('template_url'); ?>/img/madhatterlady.jpg" alt="<?php the_title(); ?>"></noscript>
        </div>
	</div>
</div>