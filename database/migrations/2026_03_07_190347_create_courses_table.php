<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('courses', function (Blueprint $table) {
        $table->id(); // En Laravel 7 esto crea un bigIncremental ID
        $table->string('title');
        $table->string('cover');
        $table->text('content');
        $table->string('robotics_kit');

        //Se modifica un poco la parte de timestamps porque si no da error
        $table->unsignedBigInteger('group_id');
        $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
