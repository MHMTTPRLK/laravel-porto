<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('slider_name');
            $table->string('slider_image');
            $table->string('slider_slug');
            $table->integer('slider_order');
            $table->integer('status')->default(1)->comment('0:pasif 1:aktif');
            $table->timestamps();
            $table->softDeletes();// soft delete table olması içinmifrat

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
