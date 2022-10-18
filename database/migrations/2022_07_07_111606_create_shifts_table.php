<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->time('time_from');
            $table->time('time_in_min');
            $table->time('time_in_max');
            $table->time('time_out_min');
            $table->time('time_out_max');
            $table->integer('break_time')->nullable();
            $table->time('time_to');
            $table->text('title');
            $table->integer('company_id')->index('company_shift_fk');
            $table->boolean('status')->default(1);
            $table->boolean('shift_default')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shifts');
    }
}
