<?php namespace Ilyamir0\Minken\Components;

use Cms\Classes\ComponentBase;
use Ilyamir0\Minken\Models\Size;
class SizeList extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'SizeList Component',
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
    public function getSizes() {
        return Size::all();       
    }    
}
