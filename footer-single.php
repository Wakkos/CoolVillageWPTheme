<footer itemscope itemtype="http://schema.org/Person" role="contentinfo" class="footer">
    <div class="footer__logo">
    	<a href="<?php bloginfo('url'); ?>" alt="<?php echo '' . get_bloginfo ( 'description' );  ?>" title="<?php echo '' . get_bloginfo ( 'description' );  ?>" class="logo-footer">
    			<img src="<?php bloginfo('template_url'); ?>/img/wakkos_footer.jpg" itemprop="brand" alt="<?php echo '' . get_bloginfo ( 'description' );  ?>" title="<?php echo '' . get_bloginfo ( 'description' );  ?>" alt="<?php echo '' . get_bloginfo ( 'description' );  ?>">
    		</a>
    </div>

    <div class="footer__info">
    	<p>
    		<a href="http://coolvillage.es" itemprop="worksFor">Wakkos.com</a> y todas sus entradas &#169; de <a href="http://twitter.com/Wakkos" target="_blank">Daniel Martínez</a>, ilustraciones de <a href="http://twitter.com/Madhatter_Lady" target="_blank">Andrea Nogués</a>. Más info en <a href="<?php bloginfo( template_url ) ?>/humans.txt" target="_blank">humans.txt</a> y en <a href="/about">Acerca de...</a>.
    		Nos encantan los nuevos retos, puedes contactarnos en Twitter a <a href="http://twitter.com/wakkos" itemprop="name">Daniel</a> </span> o a <a href="http://twitter.com/madhatter_Lady">Andrea</a>. Si 140 letras es muy poco, siempre puedes escribirnos a <a href="mailto:info@coolvillage.es" itemprop="email">info@coolvillage.es</a>
    	</p>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="<?php bloginfo(template_url); ?>/js/min/prism-min.js"></script>
</body>
</html>