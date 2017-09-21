<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
        $table -> string('address');
      });

      Schema::table('items', function (Blueprint $table) {
        $table -> decimal('default_shipping_fee', 10, 2);
      });

      Schema::table('order_items', function (Blueprint $table) {
        $table -> decimal('shipping_fee', 10, 2);
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
