<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('targets', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->enum('type',['General','Quest','Skill','QuestPoints']);
            $table->boolean('members_only_own');
            $table->boolean('members_only_inh');
            $table->unsignedTinyInteger('p2p_prio_own');
            $table->unsignedTinyInteger('f2p_prio_own');
            $table->unsignedTinyInteger('p2p_prio_inh');
            $table->unsignedTinyInteger('f2p_prio_inh');
            $table->unsignedSmallInteger('p2p_usefulness');
            $table->unsignedSmallInteger('f2p_usefulness');
            $table->timestamp('completed')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('targets');
    }

};
