<?php namespace Ilyamir0\Minken\Models;

use Model;

/**
 * Model
 */
class Product extends Model
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
    public $table = 'ilyamir0_minken_products';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
    
    public $hasMany = [
        'images' => \Ilyamir0\Minken\Models\Image::class,
    ];

    public $belongsToMany = [
        'categories' => [
            \Ilyamir0\Minken\Models\Category::class,
            'table' => 'ilyamir0_minken_category_product',
        ]
    ];
}
