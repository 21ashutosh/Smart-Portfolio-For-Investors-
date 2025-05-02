<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add any columns you need
            if (!Schema::hasColumn('users', 'first_name')) {
                $table->string('first_name')->after('id');
            }
            
            if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->after('first_name');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Reverse the changes if needed
            $table->dropColumn(['first_name', 'last_name']);
        });
    }
};