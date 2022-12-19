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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('res_id')->references('id')->on('resturants')->nullable(false);
            $table->string('name');
            $table->string('image');
        });

        DB::table('categories')->insert([

            'name' => 'Foods',
            'image' => 'https://images.pexels.com/photos/11161412/pexels-photo-11161412.jpeg?auto=compress&cs=tinysrgb&w=1600',
            "res_id" => "1"

        ]);
        DB::table('categories')->insert([
            'name' => 'Drinks',
            'image' => 'https://images.pexels.com/photos/2789328/pexels-photo-2789328.jpeg?auto=compress&cs=tinysrgb&w=1600',
            "res_id" => "1"

        ]);
        DB::table('categories')->insert([
            'name' => 'Salads',
            'image' => 'https://images.pexels.com/photos/257816/pexels-photo-257816.jpeg?auto=compress&cs=tinysrgb&w=1600', "res_id" => "1"

        ]);
        DB::table('categories')->insert([
            'name' => 'Desserts',
            'image' => 'https://images.pexels.com/photos/1126359/pexels-photo-1126359.jpeg?auto=compress&cs=tinysrgb&w=1600', "res_id" => "1"

        ]);
        DB::table('categories')->insert([
            'name' => 'Desserts',
            'image' => 'https://images.pexels.com/photos/1126359/pexels-photo-1126359.jpeg?auto=compress&cs=tinysrgb&w=1600', "res_id" => "2"

        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
