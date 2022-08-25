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
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile_number')->nullable()->after('password');
            $table->string('country')->nullable()->after('mobile_number');
            $table->string('company_name')->nullable()->after('country');
            $table->string('job_title')->nullable()->after('company_name');
            $table->string('iec_code')->nullable()->after('job_title');
            $table->string('bin_code')->nullable()->after('iec_code');
            $table->string('type_of_business')->nullable()->after('bin_code');
            $table->string('how_long_in_business')->nullable()->after('type_of_business');
            $table->string('budget_for_fabric_annually')->nullable()->after('how_long_in_business');
            $table->string('brand_price_point')->nullable()->after('budget_for_fabric_annually');
            $table->string('which_month_start_sourcing_for_ss')->nullable()->after('brand_price_point');
            $table->string('which_month_start_sourcing_for_fw')->nullable()->after('which_month_start_sourcing_for_ss');
            $table->text('business_description')->nullable()->after('which_month_start_sourcing_for_fw');
            $table->text('company_website')->nullable()->after('business_description');
            $table->text('company_instagram_url')->nullable()->after('company_website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile_number');
            $table->string('country');
            $table->string('company_name');
            $table->string('job_title');
            $table->string('iec_code');
            $table->string('bin_code');
            $table->string('type_of_business');
            $table->string('how_long_in_business');
            $table->string('budget_for_fabric_annually');
            $table->string('brand_price_point');
            $table->string('which_month_start_sourcing_for_ss');
            $table->string('which_month_start_sourcing_for_fw');
            $table->text('business_description');
            $table->text('company_website');
            $table->text('company_instagram_url');
        });
    }
};
