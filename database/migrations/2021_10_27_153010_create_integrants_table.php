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
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('email');
            $table->string('url_photo')->default('https://avataaars.io/?avatarStyle=Circle&topType=Hat&accessoriesType=Round&facialHairType=Blank&clotheType=BlazerSweater&eyeType=EyeRoll&eyebrowType=FlatNatural&mouthType=Sad&skinColor=Pale');
            $table->string('photo_id')->default('1');
            $table->string('state')->default('active');
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
