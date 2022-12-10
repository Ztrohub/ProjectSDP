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
        if (!Schema::hasTable("htrans")){
            Schema::create('htrans', function (Blueprint $table) {
                $table->id("htrans_id");
                $table->date("htrans_date");
                $table->decimal("htrans_total", 10, 2);
                $table->integer("htrans_status")->comment("1 Done, 0 Undone");
                $table->unsignedBigInteger("cashier_id");
                $table->foreign("cashier_id")->references("user_id")->on("users")->onDelete("cascade");
                $table->timestamps(); // created_at dan updated_at
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('htrans');
    }
};
