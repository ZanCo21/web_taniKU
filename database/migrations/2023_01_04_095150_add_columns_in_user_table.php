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
        Schema::table('user', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
			$table->string('address1')->nullable()->after('phone');
			$table->string('address2')->nullable()->after('address1');
			$table->integer('province_id')->nullable()->after('address2');
			$table->integer('city_id')->nullable()->after('province_id');
			$table->integer('postcode')->nullable()->after('city_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('phone');
			$table->dropColumn('address1');
			$table->dropColumn('address2');
			$table->dropColumn('province_id');
			$table->dropColumn('city_id');
			$table->dropColumn('postcode');
        });
    }
};
