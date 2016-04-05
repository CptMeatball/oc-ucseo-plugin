<?php namespace Unrebel\Ucseo\Controllers;

use BackendMenu;
use Cms\Classes\Page;
use Redirect;
use Unrebel\Ucseo\Models\SeoPage;
use Backend\Classes\Controller;

/**
 * Seo Pages Back-end Controller
 */
class SeoPages extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Unrebel.Ucseo', 'ucseo', 'seopages');
        $this->addCss('/plugins/unrebel/ucseo/assets/css/bootstrap.alerts.css');
        $this->addCss('/plugins/unrebel/ucseo/assets/css/meta.validation.css');
        $this->addJs('/plugins/unrebel/ucseo/assets/js/meta.validation.js');
    }

    public function onGeneratePages(){
      $pages = Page::all();

      foreach($pages as $page){
        $seopage = SeoPage::where('title', $page->title)->where('url', $page->url)->get();
        if($seopage->isEmpty()){
          unset($seopage);
          $seopage = new SeoPage();
          $seopage->title = $page->title;
          $seopage->url = $page->url;
          $seopage->save();
        }
      }

      return Redirect::refresh();

    }
}
