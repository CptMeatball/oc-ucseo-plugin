<?php namespace Unrebel\Ucseo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Rules Back-end Controller
 */
class Rules extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Unrebel.Ucseo', 'ucseo', 'rules');
    }
}