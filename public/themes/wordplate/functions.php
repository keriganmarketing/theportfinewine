<?php

declare(strict_types=1);

use KeriganSolutions\KMAContactInfo\ContactInfo;
use KeriganSolutions\InstaFeed\InstaFeed;

// Register plugin helpers.
require template_path('includes/plugins/plate.php');
require template_path('includes/plugins/theme-setup.php');
require template_path('includes/plugins/acf-page-fields.php');

require('testing/InstaFeed/InstaFeed.php');

(new ContactInfo())->addField([
    'key' => 'hours',
    'label' => 'Hours',
    'name' => 'hours',
    'type' => 'text',
    'parent' => 'group_contact_info',
])->addField([
    'key' => 'footer_hours',
    'label' => 'Expanded Hours',
    'name' => 'footer_hours',
    'type' => 'wysiwyg',
    'parent' => 'group_contact_info',
    'tabs' => 'text',
    'toolbar' => 'basic',
    'media_upload' => 0,
])->use();

$socialLinks = new KeriganSolutions\SocialMedia\SocialSettingsPage();
if (is_admin()) {
    $socialLinks->createPage();
}

$instagram = new InstaFeed();
$instagram->setupAdmin();

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Disable the admin toolbar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 theme support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);
});

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

    wp_enqueue_style('wordplate', mix('styles/main.css'));

    wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('wordplate', mix('scripts/app.js'), '', '', true);
});


// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);

// Custom Blade Cache Path
add_filter('bladerunner/cache/path', function () {
    return '../../uploads/.cache';
});

function expand_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            width: auto;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'expand_login_logo');