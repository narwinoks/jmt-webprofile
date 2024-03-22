<?php

use App\Models\ContentCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('title');
            $table->foreignIdFor(ContentCategory::class);
            $table->string('slug')->nullable();
            $table->integer('order')->nullable();
            $table->string('subtitle');
            $table->longText('content')->nullable();
            $table->boolean('status_enabled')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
