<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('district_name')->index();
            $table->string('name')->unique();
            $table->string('link');
            $table->foreign('district_name')->references('name')->on('districts')->onDelete('cascade');
            $table->timestamps();
        });

        // Seeder Artisan Call
        if (config('laranepal.seeding_while_migration', true)) {
            Artisan::call('db:seed', [
                '--class' => MunicipalitySeeder::class,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}
