<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_info', function (Blueprint $table) {
            $table->id();
            $table->text('aboutUs_who_we_are');
            $table->text('aboutUs_establishment');
            $table->text('aboutUs_why_choose_us');
            $table->text('aboutUs_vission');
            $table->text('aboutUs_mission');
            $table->text('contact_addres');
            $table->text('contact_phone')->nullable();
            $table->text('contact_email')->nullable();
            $table->text('contact_facebook')->nullable();
            $table->text('contact_youtube')->nullable();
            $table->text('contact_insta')->nullable();
            $table->text('home_desc');
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
        Schema::dropIfExists('general_info');
    }
};
