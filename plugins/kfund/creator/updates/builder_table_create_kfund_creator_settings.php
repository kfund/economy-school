<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKfundCreatorSettings extends Migration
{
    public function up()
    {
        Schema::create('kfund_creator_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('discount')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kfund_creator_settings');
    }
}
