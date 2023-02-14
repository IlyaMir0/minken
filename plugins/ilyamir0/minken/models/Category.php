<?php namespace Ilyamir0\Minken\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ilyamir0_minken_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $belongsToMany = [
        'categories' => [
            \Ilyamir0\Minken\Models\Product::class,
            'table' => 'ilyamir0_minken_category_product',
        ]
    ];
}
