<?php namespace Ilyamir0\Minken\Components;

use Cms\Classes\ComponentBase;
use Ilyamir0\Minken\Models\Category;
class CategoryList extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'CategoryList Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [];
    }
    public function getCategories() {
        return Category::all();       
    }    
}
