<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('drivers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('experience_years');
        $table->decimal('average_speed', 5, 2);
        $table->integer('total_trips');
        $table->integer('accidents_count');
        $table->float('rating')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('drivers');
}

};
