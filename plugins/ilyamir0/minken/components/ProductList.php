<?php namespace Ilyamir0\Minken\Components;

use Cms\Classes\ComponentBase;
use Ilyamir0\Minken\Models\Product;

class ProductList extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'ProductList Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function getList() {
        return Product::all();
    }


    public function getByCategory($categoryId) {
        if(is_null($categoryId)) {
            return Product::all();
        }

        return Product::withWhereHas('categories', fn($query) =>
            $query->where('id', $categoryId)
        )->get();
    }

    public function getDetail($slug) {
        return Product::where('slug', $slug)->first();
    }   

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [];
    }
}
