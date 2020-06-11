<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('account_type');
            $table->bigInteger('number');
			$table->bigInteger('tracking_number');
			$table->bigInteger('route_number');
            $table->float('balance', 10, 2);
			$table->boolean('active')->default(true);
			$table->bigInteger('holder_id')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
