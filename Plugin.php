<?php namespace Unrebel\Ucseo;

use Backend;
use System\Classes\PluginBase;

/**
 * ucseo Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'unrebel.ucseo::lang.plugin.name',
            'description' => 'unrebel.ucseo::lang.plugin.description',
            'author'      => 'unrebel',
            'icon'        => 'icon-shield'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Unrebel\Ucseo\Components\UserSeo' => 'UserSeo',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'unrebel.ucseo.manage_seo_pages' => [
                'tab' => 'User Centered Seo',
                'label' => 'Manage SEO pages'
            ],
            'unrebel.ucseo.manage_seo_rules' => [
                'tab' => 'User Centered Seo',
                'label' => 'Manage SEO rules'
            ],
            'unrebel.ucseo.manage_seo_ogproperties' => [
                'tab' => 'User Centered Seo',
                'label' => 'Manage Open Graph Properties'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'ucseo' => [
                'label'       => 'unrebel.ucseo::lang.navigation.seo',
                'url'         => Backend::url('unrebel/ucseo/seopages'),
                'icon'        => 'icon-tags',
                'permissions' => ['unrebel.ucseo.manage_seo_pages'],
                'order'       => 500,
                'sideMenu'    => [
                    'seopages'      => [
                        'label'       => 'unrebel.ucseo::lang.navigation.seopage',
                        'icon'        => 'icon-tag',
                        'url'         => Backend::url('unrebel/ucseo/seopages'),
                        'permissions' => ['unrebel.ucseo.manage_seo_pages']
                    ],
                ]
            ],
        ];
    }

}
