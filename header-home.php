<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title><?php the_title() ?></title>


<?php wp_head(); ?>

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">

<!-- For all browsers -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link type="text/plain" rel="author" href="https://plus.google.com/105124035852901319352" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />



<!-- Google+ stuff -->
<!-- Update your html tag to include the itemscope and itemtype attributes. -->
<html itemscope itemtype="http://schema.org/Blog">

<!-- Add the following three tags inside head. -->
<meta itemprop="name" content="<?php the_title() ?>">
<meta itemprop="description" content="<?php bloginfo('description'); ?> ">
<meta itemprop="image" content="<?php bloginfo('template_url'); ?> /img/logo.png">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Iconos -->

<!-- 16x16 -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
<!-- 32x32 -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png">
<!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-precomposed.png">
<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72-precomposed.png">
<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114-precomposed.png">
<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144-precomposed.png">

<!--iOS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Windows 8 / RT http://bit.ly/HHkt7m -->
<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#000">
<meta http-equiv="cleartype" content="on">

<link href='https://fonts.googleapis.com/css?family=Oswald|Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>
<body>

 <!-- La navegación. -->
 <div class="bg">
     <div class="top">
         <div class="logo">
            <img src="https://pbs.twimg.com/profile_images/586077262543507456/4XEvbYXj_400x400.jpg" alt="frontend, profesor y tutor de arquitectura CSS y Responsive Designs">
         </div>
        <?php include( TEMPLATEPATH . '/templates/role__navigation--top.php' ); ?>
    </div>
    <!-- El Claim -->
    <div class="claims">
        <header class="header" role="banner">
            <h1 class="header__title">CoolVillage es la web de Daniel Martínez (<a href="https://twitter.com/Wakkos">@Wakkos</a>) <small>consultor,
            profesor y tutor de arquitectura frontend, CSS y Responsive Designs. </small></h1>
            <p class="header__text">Trabajo junto a equipos en grandes proyectos enfocándome en escalabilidad, mantenibilidad y optimizacion del <strong>frontend</strong>. Normalmente me uno a ellos en los sprints iniciales para organizar la arquitectura y el flujo de trabajo para que, al acabar, el proyecto y su equipo sea auto suficiente.</p>
        </header>
        <div class="cta">
            <a href="" class="btn--info btn--block">Próximo curso</a>
            <a href="" class="btn--success btn--block">Contratar</a>
        </div>
    </div>
</div>


    <?php include( TEMPLATEPATH . '/templates/social-icons.php' ); ?>

