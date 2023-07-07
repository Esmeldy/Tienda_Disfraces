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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->text('description');
            $table->float('price', 5,2);
            $table->enum('age',['Hombre','Mujer','Infantiles']);
            $table->string('image');
            $table->integer('quantity')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('thematic_id')->nullable();
            $table->unsignedBigInteger('provider_id')->nullable();
            

            $table->foreign('thematic_id')->references('id')->on('thematics')->nullOnDelete();
            $table->foreign('provider_id')->references('id')->on('providers')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
