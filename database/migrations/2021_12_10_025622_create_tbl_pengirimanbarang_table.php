<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPengirimanbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengirimanbarang', function (Blueprint $table) {
           $table->id();
            $table->timestamps("tanggal");
            $table->foreign("produk_id")->references("id")
                ->on("tblproduk");
            $table->integer("qty");
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pengirimanbarang');
    }
}
