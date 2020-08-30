<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('favicon');
            $table->string('active')->default(0)->comment('0:pasif 1:aktif');
            $table->string('site_url');
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->string('author');
            $table->string('googlemap');
            $table->string('analystic');
            $table->string('smptp_password');
            $table->string('smptp_port');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs');
    }
}
