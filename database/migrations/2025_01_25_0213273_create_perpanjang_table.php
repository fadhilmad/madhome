<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpanjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create("perpanjang", function (Blueprint $table) {
            $table->id();
            $table->string("harga")->nullable();
            $table->date("tanggal_start")->nullable();
            $table->date("tangal_ahir")->nullable();
            $table->string("type_perpanjang")->nullable();
            $table->text("deskripsi")->nullable();
            $table
                ->foreignId("projek_id")
                ->nullable()
                ->references("id")
                ->on("projek")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("perpanjang");
    }
}
