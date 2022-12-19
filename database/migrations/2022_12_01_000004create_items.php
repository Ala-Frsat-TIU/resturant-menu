<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->references('id')->on('categories')->nullable(false);
            $table->foreignId('res_id')->references('id')->on('resturants')->nullable(false);
            $table->string('name');
            $table->string('price');
            $table->string('image');
            $table->string('description');
        });
        DB::table('items')->insert([
            'cat_id' => '1',
            'res_id' => '1',
            'name' => 'Test1',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/750073/pexels-photo-750073.jpeg?auto=compress&cs=tinysrgb&w=1600',
            'description' => 'Test test',
        ]);
        DB::table('items')->insert([
            'cat_id' => '1',
            'res_id' => '1',
            'name' => 'Test2',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/8104576/pexels-photo-8104576.jpeg?auto=compress&cs=tinysrgb&w=1600',
            'description' => 'Test test',
        ]);
        DB::table('items')->insert([
            'cat_id' => '2',
            'res_id' => '1',
            'name' => 'Test3',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/6660070/pexels-photo-6660070.jpeg?auto=compress&cs=tinysrgb&w=1600',
            'description' => 'Test test',
        ]);
        DB::table('items')->insert([
            'cat_id' => '2',
            'res_id' => '2',
            'name' => 'Res2',
            'price' => '10',
            'image' => 'https://images.pexels.com/photos/6660071/pexels-photo-6660071.jpeg?auto=compress&cs=tinysrgb&w=1600',
            'description' => 'Test test',
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
