<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeartsTabale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hearts_tabale', function (Blueprint $table) {
            $table->id();
            $table->integer('person_id');
            $table->integer('post_id');
            $table->timestamp('created_at')->userCurrent()->nullable();
            $table->timestamp('updated_at')->userCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hearts_tabale');
    }
}
