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
        Schema::create('disewakans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_properti');
            $table->string('slug');
            $table->text('thumb_image')->nullable();
            $table->string('kategori_properti');
            $table->integer('net_area');
            $table->boolean('status_properti');
            $table->text('deskripsi_properti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disewakans');
    }
};
