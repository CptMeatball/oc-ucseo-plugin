<?php namespace Unrebel\Ucseo\Models;

use Model;

/**
 * SeoPage Model
 */
class SeoPage extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'unrebel_ucseo_seo_pages';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasMany = [
      'rules' => ['Unrebel\Ucseo\Models\OpenGraphRule', 'key' => 'seopage_id']
    ];

    public $attachMany = [
      'og_images' => ['System\Models\File'],
      'twt_images' => ['System\Models\File'],
    ];


    public function getOgTypeOptions()
    {
      $file = file_get_contents('./plugins/unrebel/ucseo/assets/json/og.types.2016.v1.json');
      $json = json_decode($file, TRUE);

      foreach($json as $key => $option)
      {
        $options[$key] = $option;
      }
      return $options;
    }

    public function getTwtCardOptions()
    {
      $file = file_get_contents('./plugins/unrebel/ucseo/assets/json/twitter.cards.2016.v1.json');
      $json = json_decode($file, TRUE);

      foreach($json as $key => $option)
      {
        $options[$key] = $option;
      }
      return $options;
    }
}
