<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('produk_type', function (Blueprint $table) {
            $table->unsignedBigInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('restrict');

            $table->unsignedBigInteger('types_id');
            $table->foreign('types_id')->references('id')->on('types')->onDelete('restrict');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('produk_type');
    }
};