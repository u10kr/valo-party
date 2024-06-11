<?php

namespace App\Livewire\TeamSplit\Page;

use Livewire\Component;
use App\Models\Player;

class Result extends Component
{
    public array $attackers = [];
    public array $defenders = [];

    public function mount(string $teamId)
    {
        $players = Player::with('rank')->where('team_id', $teamId)->get()->sortByDesc(function ($player) {
            return $player->rank->score;
        });

        $this->attackers = $players->where('team_type', 'A')->values()->toArray();
        $this->defenders = $players->where('team_type', 'B')->values()->toArray();
    }

    public function render()
    {
        return view('livewire.team-split.page.result');
    }
}
