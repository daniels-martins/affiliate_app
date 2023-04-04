<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
    * Run the migrations.
    */
   public function up(): void
   {
      Schema::table('users', function (Blueprint $table) {
         // these are all compulsory fields during registration
         // upline data
         $table->string('referrer')->default('');
         // bank info
         $table->string('bank_name', 50)->default(''); //name of bank eg. GTB
         $table->string('bank_account_name', 50)->default(''); // eg. John doe
         $table->string('bank_account_num', 10)->default(''); // 1234567890
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::table('users', function (Blueprint $table) {
         if (Schema::hasColumns('users', ['suggested_upline', 'bank_name', 'bank_account_name', 'bank_account_num']))
            Schema::dropColumns('users', ['suggested_upline', 'bank_name', 'bank_account_name', 'bank_account_num']);
      });
   }
};
