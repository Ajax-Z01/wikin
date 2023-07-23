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
        Schema::create('form_komuns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kolom kunci asing
            $table->string('name');
            $table->string('comunity_name');
            $table->string('email');
            $table->text('description');
            $table->string('logo_image')->nullable();
            $table->timestamps();

            // Definisi relasi dengan tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_komuns');
    }
};
