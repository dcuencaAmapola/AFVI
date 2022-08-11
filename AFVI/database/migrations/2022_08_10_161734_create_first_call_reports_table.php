<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstCallReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_call_reports', function (Blueprint $table) {
            $table->increments('id_first_call_report');
            $table->datetime('date_first_call_report')->useCurrent();
            $table->string('company_name_first_call_report')->default('Not Apply');
            $table->string('product_first_call_report')->default('Not Apply');
            $table->string('name_customer_first_call_report');
            $table->string('lastname_customer_first_call_report');
            $table->string('mail_adress_first_call_report');
            $table->char('phone_numbrer_first_call_report', 15);
            $table->string('policy_holder_first_call_report',40);
            $table->string('dni_customer_first_call_report');
            $table->string('name_deceased_first_call_report');
            $table->string('lastname_deceased_first_call_report');
            $table->string('dni_deceased_first_call_report');
            $table->string('cause_death_first_call_report');
            $table->date('date_death_first_call_report');
            $table->string('country_death_first_call_report');
            $table->string('city_death_first_call_report');
            $table->tinyInteger('active_first_call_report')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_call_reports');
    }
}
