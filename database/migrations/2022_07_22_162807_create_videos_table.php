<?php

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();

            $table->longText('name')->nullable();

            $table->longText('thumbnail')->nullable();

            $table->longText('source')->nullable();

            $table->tinyInteger('visibility')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->longText('slug')->nullable();

            $table->timestamps();
        });

        for ($user = 2; $user < 5; $user++) {

            for ($video = 1; $video < mt_rand(20, 50); $video++) {
                Video::create([
                    'name' => 'Video' . $video,
                    'thumbnail' => 'vide' . mt_rand(1,20) . '.png',
                    'source' => 'video.mp4',
                    'visibility' => mt_rand(0, 1),
                    'user_id' => $user,
                    'slug' => Str::random(10),
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
