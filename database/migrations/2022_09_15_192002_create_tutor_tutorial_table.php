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
        Schema::create('tutor_tutorial', function (Blueprint $table) {
            $table->string('tutor_id', 5);
            $table->unsignedBigInteger('tutorial_id');
            $table->timestamps();

            $table->primary(['tutor_id', 'tutorial_id']);

            $table->foreign('tutor_id')
                ->references('id')
                ->on('tutors');

            $table->foreign('tutorial_id')
                ->references('id')
                ->on('tutorials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_tutorial');
    }
};
