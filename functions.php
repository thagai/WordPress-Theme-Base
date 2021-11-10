<?php

function college_files()
{
 wp_enqueue_script('main-college-js', get_theme_file_uri('build/index.js'), array('jquery'), '1.0', true);
 wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
 wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
 wp_enqueue_style('college_main_styles', get_theme_file_uri('/build/style-index.css'));
 wp_enqueue_style('college_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'college_files'); //first argument is importing javascript, second argument is the function name to import the css file

function college_features()
{
 add_theme_support('title-tag');
 register_nav_menu('headerMenuLocation', 'Header Menu Location');
 register_nav_menu('footerLocationOne', 'Footer Location One');
 register_nav_menu('footerLocationTwo', 'Footer Location Two');
}

add_action('after_setup_theme', 'college_features');
