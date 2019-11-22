<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Client;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('document_number'); // modificar tamanho de cpf/cnpj
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter'); // inadimplente?
            $table->date('date_birth'); // data de nascimento
            $table->char('sex', 1);
            $table->enum('marital_status', array_keys(Client::MARITAL_STATUS));
            $table->string('physical_disability')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
