<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->string('name')->unique()->change();
        });
    }

    public function down()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->dropUnique('brands_name_unique');
        });
    }
};