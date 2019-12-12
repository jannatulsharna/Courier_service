<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',40);
            $table->string('email',40);
            $table->string('phone',40);
            $table->string('address',40);
            $table->string('branchName',40);
            $table->string('where',40);
            $table->string('date',20);
            $table->string('receiversNumber',40);
            $table->string('receiversName',40);
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
        Schema::dropIfExists('parcel_requests');
    }
}
