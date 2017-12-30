<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 修改 users 資料表的 name 欄位，將其改名為 account
            $table->renameColumn('name', 'account');
            // 將 account 增加 unique 索引，確保 account 的值都是唯一的
            $table->unique('account');
            // 移除 email 的 unique 索引
            $table->dropUnique('users_email_unique');
            // 在 name 後面新增 user_name 欄位，這邊的欄位順序似乎是參考未執行 migrate 時的狀態，
            // 此時 name 尚未改成 account，因此如果不用 name 而改用 account 的話會發生找不到欄位的錯誤
            $table->string('user_name')->after('name');
            // 在 email 欄位後面新增 status 欄位，預設值為 'active'
            $table->string('status')->after('email')->default('active');
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

            $table->dropColumn('status');
            $table->dropColumn('user_name');
            $table->unique('email');
            $table->dropUnique('users_account_unique');
            $table->renameColumn('account', 'name');
        });
    }
}
