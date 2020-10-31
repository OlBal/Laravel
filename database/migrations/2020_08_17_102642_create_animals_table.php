<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string("name",50);
            $table->string("type",50);
            $table->date("date_of_birth");
            $table->float("weight_kg")->length(50);
            $table->float("height_m")->length(50);
            $table->integer("biteyness")->length(1);
            $table->foreignId("owner_id")->unsigned();
            $table->foreign("owner_id")->references("id")
            ->on("owners")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
        $table->dropForeign(['owner_id']);
        $table->dropColumn("owner_id");
        });

         Schema::dropIfExists('animals');
    }


}
