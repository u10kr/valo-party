<?php

namespace App\UseCase\Player;

use App\Models\Player;
use App\Models\Team;

class TeamSplit
{
    public function __invoke(string $teamId): void
    {
        $attacker = collect([]);
        $defender = collect([]);
        $attackerScore = 0;
        $defenderScore = 0;

        Team::with('players.rank')
            ->findOrFail($teamId)
            ->players->shuffle()
            ->each(function ($player) use (&$attacker, &$defender, &$attackerScore, &$defenderScore) {
                $score = $player->rank->score;
                if ($attackerScore <= $defenderScore && $attacker->count() <= $defender->count()) {
                    $attacker->push($player);
                    $attackerScore += $score;
                } else if ($defenderScore <= $attackerScore && $defender->count() <= $attacker->count()) {
                    $defender->push($player);
                    $defenderScore += $score;
                } else if ($attacker->count() < $defender->count()) {
                    $attacker->push($player);
                    $attackerScore += $score;
                } else {
                    $defender->push($player);
                    $defenderScore += $score;
                }
            });

        Player::whereIn('id', $attacker->pluck('id'))->update(['team_type' => 'A']);
        Player::whereIn('id', $defender->pluck('id'))->update(['team_type' => 'B']);
    }
}
