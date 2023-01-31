<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->enum('accepted', ['Si', 'No'])->default(null);
            $table->enum('state',['ToDo','InProgress','Done'])->nullable()->default('ToDo');
            $table->datetime('start_date')->nullable();
            $table->datetime('final_date')->nullable();
            $table->float('price')->nullable();
            $table->string('manages')->nullable();
            $table->BigInteger('user_id')->nullable();
            $table->BigInteger('questionary_id')->nullable();
            $table->BigInteger('answer_id')->nullable();
            $table->unsignedBigInteger('budget_id')->nullable();
            $table->foreign('budget_id')->references('id')->on('budgets'); //relacion hecha
            $table->BigInteger('impact_id')->nullable();
            $table->BigInteger('percentage')->nullable();
            $table->date('hidden')->nullable()->default(null);
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
        Schema::dropIfExists('tasks');
    }
};
