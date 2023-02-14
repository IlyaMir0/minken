<?php namespace Ilyamir0\Minken\Components;

use Cms\Classes\ComponentBase;
use Ilyamir0\Minken\Models\MainSliderSlide;
class MainSlider extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'MainSlider Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function getSlider() {
        return MainSliderSlide::all();       
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [];
    }
}
