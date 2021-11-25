<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('films', function (Blueprint $table) {

            $table->id();
            $table->string('name',255)->nullable();
            $table->string('name_original',255)->nullable();

            $table->text('description')->nullable();

            $table->string('poster', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('video', 255)->nullable();

            $table->string('ulr_kp',255)->unique();
            $table->string('url_imdb', 255)->nullable();
            $table->string('url_kt', 255)->nullable();

            $table->string('rate_kp', 10)->nullable();
            $table->string('rate_kp_count', 10)->nullable();
            $table->string('rate_imdb', 10)->nullable();
            $table->string('rate_imdb_count', 10)->nullable();


            $table->json('actor')->nullable();

            $table->json('encyclopedia')->nullable();

//            $table->json('country')->nullable();
//            $table->json('genre')->nullable();
//            $table->string('tagline',255)->nullable();
//            $table->json('script')->nullable();
//            $table->json('producer')->nullable();
//            $table->json('operator')->nullable();
//            $table->json('composer')->nullable();
//
//            $table->json('artist')->nullable();
//            $table->json('installation')->nullable();
//
//            $table->string('budget',30)->nullable();
//            $table->string('fees_usa',30)->nullable();
//            $table->string('fees_ru',30)->nullable();
//
//            $table->string('earnings_usa',100)->nullable();
//            $table->string('earnings_world',100)->nullable();
//
//
//            $table->string('digital',150)->nullable();
//            $table->string('age',30)->nullable();
//            $table->string('rating_mpaa',30)->nullable();
 //           $table->integer('time',)->nullable();




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
        Schema::dropIfExists('films');
    }
}
