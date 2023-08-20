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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('title1')->nullable();
            $table->text('details1')->nullable();

            $table->string('title2')->nullable();
            $table->text('details2')->nullable();

            $table->string('title3')->nullable();
            $table->text('details3')->nullable();

            $table->string('title4')->nullable();
            $table->text('details4')->nullable();

            $table->string('title5')->nullable();
            $table->text('details5')->nullable();

            $table->string('title6')->nullable();
            $table->text('details6')->nullable();

            $table->string('award')->nullable();
            ;

            $table->string('client')->nullable();


            $table->string('coffeDate')->nullable();


            $table->string('totalProject')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
