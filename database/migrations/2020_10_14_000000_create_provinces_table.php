<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('province_name');
            $table->string('capital')->nullable();
            $table->bigInteger('no_of_districts')->nullable();
            $table->bigInteger('area')->nullable()->default(12);
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Seeder Artisan Call
        Artisan::call('db:seed', [
            '--class' => ProvinceSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
