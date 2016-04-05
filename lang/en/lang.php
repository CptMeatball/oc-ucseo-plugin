<?php

return [
    'plugin'          => [
        'name'        => 'User Centered SEO',
        'description' => 'Extensive SEO tool that allows users to control SEO entries without accessing the CMS section.'
    ],
    'navigation'      => [
        'seo'       => 'SEO',
        'rules'     => 'Rules',
        'seopage'   => 'Page'
    ],
    'fields'      => [
        'title'       => 'Title',
        'url'     => 'URL',
        'modified_at'   => 'Modified at',
        'meta_title'  => 'Title',
        'meta_description'  => 'Description',
        'og_title' => 'Facebook Title',
        'og_description' => 'Facebook Description',
        'og_type' => 'Facebook Type',
        'og_rules' => 'Other Facebook Rules',
        'og_property' => 'Property name',
        'og_content' => 'Content',
        'og_image' => 'Facebook Image(s)',
        'twt_card' => 'Twitter Card type',
        'twt_site' => 'Twitter Site handle',
        'twt_creator' => 'Twitter Creator handle',
        'twt_title' => 'Twitter Title',
        'twt_description' => 'Twitter Description',
        'twt_images' => 'Twitter Image(s)',

    ],
    'tabs'      => [
        'twitter'     => 'Twitter',
        'og'   => 'Open Graph',
        'analysis' => 'SEO Check'
    ],

];
