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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('tagline')->nullable();
            $table->string('sub_tagline')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('introduction')->nullable();
            $table->string('logo')->nullable();
            $table->string('url')->nullable();
            $table->string('industry')->nullable();
            $table->string('headquaters')->nullable();
            $table->string('country')->nullable();
            $table->string('comapany_size')->nullable();
            $table->string('our_services')->nullable();
            $table->string('challenge')->nullable();
            $table->string('challenge_text')->nullable();
            $table->string('challenge_image')->nullable();
            $table->string('challenge_image_2')->nullable();
            $table->string('feature_1')->nullable();
            $table->string('feature_2')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('feature_image_caption')->nullable();
            $table->string('feature_image_2')->nullable();
            $table->string('feature_image_2_caption')->nullable();
            $table->string('mockup_image_1')->nullable();
            $table->string('mockup_image_2')->nullable();
            $table->string('mockup_image_3')->nullable();
            $table->string('optimal')->nullable();
            $table->string('mockup_image_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
