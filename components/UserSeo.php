<?php namespace Unrebel\Ucseo\Components;

use Cms\Classes\ComponentBase;
use Unrebel\Ucseo\Models\SeoPage;
class UserSeo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'UC Seo Standard',
            'description' => 'Provides extensive SEO and SM tags.'
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
