<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("setting", function (Blueprint $table) {
            $table->id();
            $table->string("logo")->nullable();
            $table->string("favicon")->nullable();
            $table->string("nama_instansi")->nullable();
            $table->string("link_fb")->nullable();
            $table->string("link_ig")->nullable();
            $table->string("link_tiktok")->nullable();
            $table->string("deskripsi")->nullable();
            $table->string("map")->nullable();
            $table->string("alamat")->nullable();
            $table->string("no_wa")->nullable();
            $table->string("email")->nullable();
            $table->text("analytic");
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
        Schema::dropIfExists("setting");
    }
}
