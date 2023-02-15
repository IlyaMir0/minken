<?php namespace Ilyamir0\Minken\Models;

use Model;

/**
 * Model
 */
class Sizes extends Model
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
}
