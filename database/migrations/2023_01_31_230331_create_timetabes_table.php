<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetabesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetabes', function (Blueprint $table) {
            $table->id();

            $table->string('time');

            $table->text('monday1_title')->nullable();
            $table->text('monday1_text1')->nullable();
            $table->text('monday1_text2')->nullable();

            $table->text('tuesday1_title')->nullable();
            $table->text('tuesday1_text1')->nullable();
            $table->text('tuesday1_text2')->nullable();

            $table->text('wednesday1_title')->nullable();
            $table->text('wednesday1_text1')->nullable();
            $table->text('wednesday1_text2')->nullable();

            $table->text('thursday1_title')->nullable();
            $table->text('thursday1_text1')->nullable();
            $table->text('thursday1_text2')->nullable();

            $table->text('friday1_title')->nullable();
            $table->text('friday1_text1')->nullable();
            $table->text('friday1_text2')->nullable();

            $table->text('saturday1_title')->nullable();
            $table->text('saturday1_text1')->nullable();
            $table->text('saturday1_text2')->nullable();

            $table->text('sunday1_title')->nullable();
            $table->text('sunday1_text1')->nullable();
            $table->text('sunday1_text2')->nullable();

            $table->text('monday2_title')->nullable();
            $table->text('monday2_text1')->nullable();
            $table->text('monday2_text2')->nullable();

            $table->text('tuesday2_title')->nullable();
            $table->text('tuesday2_text1')->nullable();
            $table->text('tuesday2_text2')->nullable();

            $table->text('wednesday2_title')->nullable();
            $table->text('wednesday2_text1')->nullable();
            $table->text('wednesday2_text2')->nullable();

            $table->text('thursday2_title')->nullable();
            $table->text('thursday2_text1')->nullable();
            $table->text('thursday2_text2')->nullable();

            $table->text('friday2_title')->nullable();
            $table->text('friday2_text1')->nullable();
            $table->text('friday2_text2')->nullable();

            $table->text('saturday2_title')->nullable();
            $table->text('saturday2_text1')->nullable();
            $table->text('saturday2_text2')->nullable();

            $table->text('sunday2_title')->nullable();
            $table->text('sunday2_text1')->nullable();
            $table->text('sunday2_text2')->nullable();

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
        Schema::dropIfExists('timetabes');
    }
}
