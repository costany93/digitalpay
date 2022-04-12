<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpnDigipayTransactionData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipn_digipay_transaction_data', function (Blueprint $table) {
            $table->id();
            $table->string("data_transactions");
            $table->string("hash_app_key");
            $table->string("hash_secret_key");
            $table->string("hash_public_key");
            $table->string("mode");
            $table->string("payment_method");
            $table->string("ref_commande");
            $table->string("commande_name");
            $table->double("amount");
            $table->double("currency");
            $table->string("ref_internal_bg");
            $table->string("statut");
            $table->string("event");
            $table->string("client_name");
            $table->string("client_phone");
            $table->string("client_email");
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
        Schema::dropIfExists('ipn_digipay_transaction_data');
    }
}
