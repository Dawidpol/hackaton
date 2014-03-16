<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title("",true); ?> | <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/calendar.js"></script>
</head>
<body>
	
    <div id="top-menu">
			<h1 id="logo">health up</h1>
            <?php wp_nav_menu(array('theme_location'  => 'primary',
                                    'container_class' => 'menu')); ?>
			<div id="menu-shadow"></div>
            <div class="clear"></div> 
    </div>