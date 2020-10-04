<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_details', function (Blueprint $table) {
            $table->string('body_type')->after('marital_status');
            $table->string('complexion')->after('body_type');
            $table->string('city')->after('complexion');
            $table->string('country')->after('city');
            $table->string('language')->after('country');
            $table->string('hobbies')->after('language');
            $table->string('education')->after('hobbies');
            $table->string('occupation')->after('education');
            $table->string('income')->after('occupation');
            $table->string('about_myself')->after('income');
            $table->string('about_partner')->after('about_myself');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_details', function (Blueprint $table) {
            $table->dropColumn('body_type');
            $table->dropColumn('complexion');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('language');
            $table->dropColumn('hobbies');
            $table->dropColumn('education');
            $table->dropColumn('occupation');
            $table->dropColumn('income');
            $table->dropColumn('about_myself');
            $table->dropColumn('about_partner');
        });
    }
}
