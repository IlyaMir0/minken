<?php namespace Ilyamir0\Minken;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ilyamir0\Minken\Components\ProductList' => 'ProductList',
            'Ilyamir0\Minken\Components\MainSlider' => 'MainSlider',
            'Ilyamir0\Minken\Components\CategoryList' => 'CategoryList',
        ];
    }

    public function registerSettings()
    {
    }
}
