<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateIlyamir0MinkenProducts extends Migration
{
    public function up()
{
    Schema::create('ilyamir0_minken_products', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('price')->unsigned();
        $table->text('description');
        $table->integer('size')->unsigned();
        $table->text('titile');
        $table->integer('color')->unsigned();
        $table->text('slug');
        $table->integer('remains')->unsigned();
        $table->boolean('active')->default(1);
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('ilyamir0_minken_products');
}
}
