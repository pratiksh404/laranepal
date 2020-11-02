<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('province_id');
            $table->string('name')->index();
            $table->string('headquater');
            $table->bigInteger('area')->nullable()->default(12);
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->timestamps();
        });

        // Seeder Artisan Call
        if (config('laranepal.seeding_while_migration', true)) {
            Artisan::call('db:seed', [
                '--class' => DistrictSeeder::class,
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
        Schema::dropIfExists('districts');
    }
}
