<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',128)->nullable();
            $table->string('name',128)->unique();
            $table->enum('state', ['Postulado','En ejecucion','Finalizado','Cancelado'])->default('Postulado');
            $table->date('startDate');
            $table->date('endDate')->nullable();
            $table->string('slug',128)->default('name');

            
            $table->bigInteger('investigation_group_id')->unsigned();
            
            $table->foreign('investigation_group_id')->references('id')->on('investigation_groups')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
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
        Schema::dropIfExists('projects');
    }
}
