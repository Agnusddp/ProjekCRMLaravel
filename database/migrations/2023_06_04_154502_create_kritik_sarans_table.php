<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kritik_sarans', function (Blueprint $table) {
            $table->id();
            $table->String('id_kritiksaran');
            $table->unsignedBigInteger('id_pengguna');
            $table->String('kritiksaran');
            $table->timestamps();
        });

        Schema::table('kritik_sarans', function (Blueprint $table) {
            $table->foreign('id_pengguna')->references('id')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik_sarans');
    }
};
