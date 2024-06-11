<?php

namespace App\Livewire\TeamSplit;

use Livewire\Component;
use Livewire\Attributes\Locked;
use App\Models\Rank;
use App\Models\Player;
use App\Livewire\TeamSplit\PlayerList;
use App\Livewire\TeamSplit\AddPlayerForm;

class PlayerCard extends Component
{
    #[Locked]
    public string $id;
    #[Locked]
    public string $name;
    #[Locked]
    public string $rankId;
    public string $rankImageUrl;

    public function mount()
    {
        $rank = Rank::findOrFail($this->rankId);
        $this->rankImageUrl = asset('images/ranks/' . $rank->name . '.png');
    }

    public function render()
    {
        return view('livewire.team-split.player-card');
    }

    public function edit()
    {
        $player = Player::findOrFail($this->id);
        $this->dispatch('edit-player', [$player])->to(AddPlayerForm::class);
    }

    public function delete()
    {
        Player::findOrFail($this->id)->delete();
        $this->dispatch('delete-player')->to(PlayerList::class);
    }
}
