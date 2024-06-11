<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('ranks')->insert(
            [
                [
                    'name' => 'iron1',
                    'score' => 1,
                ],
                [
                    'name' => 'iron2',
                    'score' => 2,
                ],
                [
                    'name' => 'iron3',
                    'score' => 3,
                ],
                [
                    'name' => 'bronze1',
                    'score' => 4,
                ],
                [
                    'name' => 'bronze2',
                    'score' => 5,
                ],
                [
                    'name' => 'bronze3',
                    'score' => 6,
                ],
                [
                    'name' => 'silver1',
                    'score' => 7,
                ],
                [
                    'name' => 'silver2',
                    'score' => 8,
                ],
                [
                    'name' => 'silver3',
                    'score' => 9,
                ],
                [
                    'name' => 'gold1',
                    'score' => 10,
                ],
                [
                    'name' => 'gold2',
                    'score' => 11,
                ],
                [
                    'name' => 'gold3',
                    'score' => 12,
                ],
                [
                    'name' => 'plat1',
                    'score' => 13,
                ],
                [
                    'name' => 'plat2',
                    'score' => 14,
                ],
                [
                    'name' => 'plat3',
                    'score' => 15,
                ],
                [
                    'name' => 'dia1',
                    'score' => 16,
                ],
                [
                    'name' => 'dia2',
                    'score' => 17,
                ],
                [
                    'name' => 'dia3',
                    'score' => 18,
                ],
                [
                    'name' => 'ascendant1',
                    'score' => 19,
                ],
                [
                    'name' => 'ascendant2',
                    'score' => 20,
                ],
                [
                    'name' => 'ascendant3',
                    'score' => 21,
                ],
                [
                    'name' => 'immortal1',
                    'score' => 22,
                ],
                [
                    'name' => 'immortal2',
                    'score' => 23,
                ],
                [
                    'name' => 'immortal3',
                    'score' => 24,
                ],
                [
                    'name' => 'radiant',
                    'score' => 25,
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
