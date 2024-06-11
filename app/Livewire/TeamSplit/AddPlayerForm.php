<?php

namespace App\Livewire\TeamSplit;

use App\Models\Player;
use App\Models\Rank;
use App\Models\Team;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\Attributes\On;

class AddPlayerForm extends Component
{

    #[Locked]
    public ?string $teamId = null;
    public string $name;
    public string $rankId = '1';

    #[Locked]
    public array $ranks;

    public function mount()
    {
        $this->ranks = Rank::all()->map(
            function ($rank) {
                return [
                    'value' => $rank->id,
                    'name' => $rank->name
                ];
            }
        )
            ->toArray();
    }


    public function render()
    {
        return view('livewire.team-split.add-player-form');
    }

    public function add(): void
    {

        DB::beginTransaction();
        try {
            if (is_null($this->teamId)) {
                $this->teamId = $this->registerTeam();
                $this->addPlayer($this->teamId);
                $this->redirectRoute('team-split.edit', ['teamId' => $this->teamId]);
                DB::commit();
                return;
            }

            $this->addPlayer($this->teamId);
            DB::commit();

            $this->reset(['name', 'rankId']);
            $this->dispatch('add-player')->to(PlayerList::class);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage(), $e->getTrace());
        }
    }

    private function registerTeam(): string
    {
        return Team::create([
            'user_id' => auth()->id()
        ])->id;
    }

    private function addPlayer(string $teamId): void
    {
        Player::create([
            'team_id' => $teamId,
            'name' => $this->name,
            'rank_id' => $this->rankId
        ]);
    }

    #[On('edit-player')]
    public function edit(Player $player)
    {
        $this->name = $player->name;
        $this->rankId = $player->rank_id;
    }
}
