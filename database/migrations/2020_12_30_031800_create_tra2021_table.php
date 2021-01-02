<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTra2021Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tra2021', function (Blueprint $table) {
            $table->id();
            $table->string("bill_number");
            $table->date("bill_date");
            $table->string("so_number");
            $table->date("so_date");
            $table->string("vender");
            $table->bigInteger("bill_amount");
            $table->string("bill_head");
            $table->string("fund_status");
            $table->date("bill_rcvt_from");
            $table->date("bil_rtrn_to");
            $table->bigInteger("progracive_expendture");
            $table->bigInteger("balance_fund_avlbl");
            $table->float("progracive_ex_prcnt",6);
            $table->float("balance_fund_avlbl_prcnt",6);
            $table->string("remarks");
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
        Schema::dropIfExists('tra2021');
    }
}
