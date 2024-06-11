<?php

namespace App\Livewire\TeamSplit;

use App\Models\Player;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class PlayerList extends Component
{
    #[Locked]
    public string $teamId;

    #[Computed]
    #[On(['add-player', 'delete-player'])]
    public function players()
    {
        return Player::where('team_id', $this->teamId)
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.team-split.player-list');
    }
}
