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
        Schema::create('consultorias', function (Blueprint $table) {
            $table->id('id_consultoria');
            $table->string('nome_cliente');
            $table->string('telefone');
            $table->string('email');
            $table->string('servico_consultoria');
            $table->boolean('notification')->default(false);
            $table->enum('status', ["pendente", "atendido"]);
            $table->string("attachment")->nullable();
            $table->text('mensagem')->nullable();
            $table->foreignId("userId")->constraint()->onDelete()->cascade();
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
        Schema::dropIfExists('consultorias');
    }
};
