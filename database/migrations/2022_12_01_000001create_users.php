<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{


    //create user admin after migration is done

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('res_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
        });
        DB::table('users')->insert([
            'type' => 'admin',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('11111111'),
        ]);
        DB::table('users')->insert([
            'type' => '',
            'res_id' => '1',
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('11111111'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
