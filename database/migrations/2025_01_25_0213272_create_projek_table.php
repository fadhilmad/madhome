<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create("projek", function (Blueprint $table) {
            $table->id();
            $table->string("nama")->nullable();
            $table->date("tanggal_masuk")->nullable();
            $table->string("gambar")->nullable();
            $table->text("link")->nullable();
            $table
                ->foreignId("type_projek_id")
                ->nullable()
                ->references("id")
                ->on("type_projek")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table
                ->foreignId("status_projek_id")
                ->nullable()
                ->references("id")
                ->on("status_projek")
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
        Schema::dropIfExists("projek");
    }
}
