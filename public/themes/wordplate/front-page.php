<?php

use KeriganSolutions\InstaFeed\InstaFeed;

// $instagram = new InstaFeed();

bladerunner('views.pages.front', [
    'featureBox1' => [
        'title' => get_field('feat_1_headline'),
        'text' => get_field('feat_1_text'),
        'link' => get_field('feat_1_link')
    ],
    'featureBox2' => [
        'title' => get_field('feat_2_headline'),
        'text' => get_field('feat_2_text'),
        'link' => get_field('feat_2_link')
    ],
    'featureBox3' => [
        'title' => get_field('feat_3_headline'),
        'text' => get_field('feat_3_text'),
        'link' => get_field('feat_3_link')
    ],
    'mast' => [
        'headline' => get_field('mast_headline'),
        'content' => get_field('mast_supporttext'),
    ],
    // 'photos' => $instagram->getFeed(7),
]);
