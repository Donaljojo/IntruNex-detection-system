<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('threat_logs', function (Blueprint $table) {
        $table->id();
        $table->ipAddress('ip');
        $table->string('endpoint');
        $table->text('payload');
        $table->string('type');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threat_logs');
    }
};
