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
            $table->dropColumn('budget_for_fabric_annually');
            $table->string('whatsapp_number')->nullable()->after('mobile_number');
            $table->string('preferred_communication_mode')->nullable()->after('whatsapp_number');
            $table->string('nature_of_business')->nullable()->after('type_of_business');
            $table->string('category_of_collection')->nullable()->after('nature_of_business');
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
            $table->string('budget_for_fabric_annually')->nullable()->after('how_long_in_business');
            $table->dropColumn('whatsapp_number');
            $table->dropColumn('preferred_communication_mode');
            $table->dropColumn('nature_of_business');
            $table->dropColumn('category_of_collection');
        });
    }
};
