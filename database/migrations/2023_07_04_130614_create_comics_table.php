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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string("title", 50);
            $table->text("description")->nullable();
            $table->string("series", 50);
            $table->string("thumb")->nullable();
            $table->string("type", 20);
            $table->string("price", 20);
            $table->string("updated_at", 30);
            $table->string("created_at", 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
