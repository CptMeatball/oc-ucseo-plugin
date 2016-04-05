<?php namespace Unrebel\Ucseo\Models;

use Model;

/**
 * OpenGraphRule Model
 */
class OpenGraphRule extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'unrebel_ucseo_open_graph_rules';

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
    public $hasOne = [

    ];
    public $hasMany = [];
    public $belongsTo = [
      'seoPage' => ['Unrebel\Ucseo\Models\SeoPage'],
    ];

    public function getPropertyOptions()
    {
      $file = file_get_contents('./plugins/unrebel/ucseo/assets/json/og.properties.2016.v1.json');
      $json = json_decode($file, TRUE);

      foreach($json as $key => $option)
      {
        $options[$key] = $option;
      }
      return $options;
    }

}
