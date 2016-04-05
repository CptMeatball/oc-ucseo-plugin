<?php namespace Unrebel\Ucseo\Models;

use Model;

/**
 * OpenGraphProperty Model
 */
class OpenGraphProperty extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'unrebel_ucseo_open_graph_properties';

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
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}
