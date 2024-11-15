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
    Schema::create('trip_records', function (Blueprint $table) {
        $table->id();
        $table->foreignId('driver_id')->constrained('drivers');
        $table->date('trip_date');
        $table->decimal('distance', 8, 2);
        $table->decimal('fuel_consumption', 5, 2);
        $table->time('trip_duration');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('trip_records');
}

};
