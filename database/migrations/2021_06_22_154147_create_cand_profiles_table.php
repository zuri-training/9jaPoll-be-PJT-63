<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('cand_name');
            $table->date('DOB');
            $table->integer('age');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('occupation');
            $table->string('post');
            $table->string('prev_post');
            $table->string('degrees_obtained');
            $table->string('honours');
            $table->string('schools_attended');
            $table->string('awards');
            $table->string('party');
            $table->string('wiki_link');
            $table->string('other_links');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('post_type');
            $table->string('profile_image');
            $table->text('text_content');
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
        Schema::dropIfExists('cand_profiles');
    }
}
