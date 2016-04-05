<?php namespace Unrebel\Ucseo\Components;

use Cms\Classes\ComponentBase;
use Unrebel\Ucseo\Models\SeoPage;
class UserSeo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'UserSeo Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
      $this->loadAssets();
    }

    protected function loadAssets(){
      $this->page['seoPage'] = SeoPage::where('url', $this->page->url)->first();
    }

}
