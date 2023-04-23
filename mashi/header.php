<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav class="header-nav">
            <?php if (has_nav_menu('global')) : ?>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'global',
                        'menu_id' => 'global_menu',
                        'container' => 'ul',
                        'container_class' => 'header-navlist'
                    )
                )
                ?>
            <?php endif; ?>
        </nav>
    </header>