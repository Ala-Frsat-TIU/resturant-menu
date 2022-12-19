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
        Schema::create('resturants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('phone');
            $table->string('address');
            $table->string('description');
        });


        DB::table('resturants')->insert([
            'name' => 'KFC',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/bf/KFC_logo.svg/640px-KFC_logo.svg.png',
            'phone' => '11111111',
            'address' => 'Erbil-100m Road',
            'description' => 'Some Description...',
        ]);
        DB::table('resturants')->insert([
            'name' => 'Hardees',
            'image' => 'https://seeklogo.com/images/H/Hardee_s-logo-A40E6409AB-seeklogo.com.png',
            'phone' => '2222222222',
            'address' => 'Erbil-100m Road',
            'description' => 'Some Description...',
        ]);
        DB::table('resturants')->insert([
            'name' => 'Laventana',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAE15fPjabhl3B7cFUNYS8Sce3tIWw-kpE6A&usqp=CAU',
            'phone' => '2222222222',
            'address' => 'Erbil-Near Airport',
            'description' => 'Some Description...',
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resturants');
    }
};
