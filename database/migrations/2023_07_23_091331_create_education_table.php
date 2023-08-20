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
        Schema::create('education', function (Blueprint $table) {
            $table->id();

            $table->date('year1')->nullable();
            $table->string('degree1')->unique();
            $table->string('university1')->nullable();
            $table->float('result1')->nullable();
            $table->text('details1')->nullable();
            $table->date('year2')->nullable();
            $table->string('degree2')->unique();
            $table->string('university2')->nullable();
            $table->float('result2')->nullable();
            $table->text('details2')->nullable();
            $table->date('year3')->nullable();
            $table->string('degree3')->unique();
            $table->string('university3')->nullable();
            $table->float('result3')->nullable();
            $table->text('details3')->nullable();
            $table->date('year4')->nullable();
            $table->string('degree4')->unique();
            $table->string('university4')->nullable();
            $table->float('result4')->nullable();
            $table->text('details4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
