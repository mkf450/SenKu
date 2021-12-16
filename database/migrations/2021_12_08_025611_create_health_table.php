<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health', function (Blueprint $table) {
            $table->id('idHealth');
            // $table->decimal('height', 5, 2)->default(0);
            // $table->decimal('mass', 5, 2)->default(0);
            $table->string('title');
            $table->enum('tag', ['herbs', 'lowFat', 'lowSugar', 'vegan', 'fruit', 'vitamin'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health');
    }
}
