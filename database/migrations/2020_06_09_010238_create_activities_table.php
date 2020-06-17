<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('holder_id');
			$table->bigInteger('from_account_number');
			$table->bigInteger('to_account_number');
			$table->string('description')->nullable();
			$table->float('transaction_amount', 10, 2)->nullable();
			$table->float('available_balance', 10, 2)->nullable();
			$table->string('transaction_type');
			$table->string('status');
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
        Schema::dropIfExists('activities');
    }
}
