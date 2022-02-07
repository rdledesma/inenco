<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('charge');
            $table->string('description');
            $table->string('url_photo')->default('https://avataaars.io/?avatarStyle=Circle&topType=Hat&accessoriesType=Round&facialHairType=Blank&clotheType=BlazerSweater&eyeType=EyeRoll&eyebrowType=FlatNatural&mouthType=Sad&skinColor=Pale');
            $table->string('cv')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('integrants');
    }
}
