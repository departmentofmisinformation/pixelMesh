<?php
$config["path"] = "/projects/pixelMesh/";
$config["site_title"] = "a";
$config["absolute_url"] = "http://localhost/projects/pixelMesh/";
// Admin menus

$config['general'] = ['site_title', 'tagline', 'links','use_password', 'footer_left', 'footer_right', 'path', 'absolute_url', 'lightswitch'];
$config['gallery'] = ['per_page'];
$config['slideshow'] = ['slider', 'slider_images', 'slider_get', 'slider_pics', 'slider_theme', 'slider_pausetime', 'slider_transition', 'slider_extrasettings'];
$config['social'] = ['social_foot', 'social_top', 'adn', 'bitbucket', 'dropbox', 'facebook', 'flickr', 'foursquare', 'github', 'google-plus', 'instagram', 'linkedin', 'reddit', 'soundcloud', 'tumblr', 'twitter', 'vimeo', 'vk', 'yahoo'];
$config['advanced'] = ['bootstrap', 'font-awesome', 'root', 'pages', 'admin_pages', 'links'];
$config['admin_tabs'] = ['general', 'gallery', 'slideshow', 'social', 'advanced'];

// General

$config['tagline'] = "";
$config['footer_left'] = "";
$config['use_password'] = 0;
$config['footer_right'] = "";
$config['lightswitch'] = 1; //chenge to TRUE when you get bool fixed

// Gallery

$config['per_page'] = 5;

// Slider

$config['slider'] = 1; //on/off
$config['slider_images'] = 5; //images that the slider uses (ignored by choose)
$config['slider_get'] = 'oldest'; //where to get images (oldest, newest, choose)
$config['slider_pics'] = [0, 4, 2, 6, 8]; //id of the pics you want in your slider for choose
$config['slider_theme'] = 'default'; //default, light, dark, bar
$config['slider_pausetime'] = 5000; // how long between slides
$config['slider_transition'] = 'boxRain'; //sliceDown ,sliceDownLeft ,sliceUp ,sliceUpLeft ,sliceUpDown ,sliceUpDownLeft ,fold ,fade ,random ,slideInRight ,slideInLeft ,boxRandom ,boxRain ,boxRainReverse ,boxRainGrow ,boxRainGrowReverse
$config['slider_extrasettings'] = "pauseOnHover: true,manualAdvance: false,"; // add your own settings. end with a comma

// System

$config['root'] = $_SERVER['DOCUMENT_ROOT'] . $config['path'];
$config['pages'] = ['about'];
$config['admin_pages'] = ['dash', 'rebuild', 'edit', 'settings', 'upload', 'manage'];
$config['links'] = [];

// Social

$config['social_top'] = ['facebook', 'twitter', 'flickr'];
$config['social_foot'] = ['facebook', 'twitter', 'flickr'];
$config['adn'] = "";
$config['bitbucket'] = "";
$config['dropbox'] = "";
$config['facebook'] = "https://www.facebook.com/zuck";
$config['flickr'] = "http://flickr.com";
$config['foursquare'] = "";
$config['github'] = "";
$config['google-plus'] = "";
$config['instagram'] = "";
$config['linkedin'] = "";
$config['reddit'] = "";
$config['soundcloud'] = "";
$config['tumblr'] = "";
$config['twitter'] = "http://twitter.com";
$config['vimeo'] = "";
$config['vk'] = "";
$config['yahoo'] = "";

// Advanced

$config['bootstrap'] = $config['absolute_url'] . "css/bootstrap.min.css";
$config['font-awesome'] = "//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css";
// includes 'system' and semi-implemented features

// Load the user configs

if (file_exists($config['root'] . 'inc/user.config.php')) include ($config['root'] . 'inc/user.config.php');

// Username and password for the admin panel


$config["salt"] = "j9tvi3";
$config["admin"] = array("lecks" => "d5932eb06f6c706b2bcc62bd81bf0b52");