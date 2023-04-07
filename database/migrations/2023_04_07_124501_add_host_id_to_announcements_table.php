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
        Schema::table('announcements', function (Blueprint $table) {
            
            $table->unsignedBigInteger('host_id')->nullable()->after('id');
            $table->foreign('host_id')->references('id')->on('hosts')
            ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('announcements', function (Blueprint $table) {
            
            $table->dropForeign('announcements_host_id_foreign');
            $table->dropColumn('host_id');

        });
    }
};
