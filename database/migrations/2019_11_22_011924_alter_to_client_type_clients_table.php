<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterToClientTypeClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('document_number')->unique()->change();
            $table->date('date_birth')->nullable()->change(); // data de nascimento
            $table->char('sex', 1)->nullable()->change();
            $table->enum('marital_status', array_keys(Client::MARITAL_STATUS))
                ->nullable()->change();
            $table->string('company_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropUnique('clients_document_number_unique');
            $table->date('date_birth')->change(); // data de nascimento
            $table->char('sex', 1)->change();
            $table->enum('marital_status', array_keys(Client::MARITAL_STATUS))->change();
            $table->dropColumn('company_name');
        });
    }
}
