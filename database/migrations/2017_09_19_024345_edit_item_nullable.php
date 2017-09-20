<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditItemNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('items', function(Blueprint $table) {
        $table -> string('image_url') -> nullable() -> change();
        $table -> string('description') -> nullable() -> change();
        $table -> integer('sold_amount') -> default(0) -> change();
        $table -> softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
