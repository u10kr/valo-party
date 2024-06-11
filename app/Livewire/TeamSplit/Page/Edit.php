<?php

namespace App\Livewire\TeamSplit\Page;

use Livewire\Component;
use App\Models\Team;
use App\Models\Player;
use App\UseCase\Player\TeamSplit;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public string $teamId;

    public function mount(string $teamId): void
    {
        $this->teamId = $teamId;
    }

    public function teamSplit(): void
    {
        DB::beginTransaction();
        try {
            (new TeamSplit)($this->teamId);
            $this->redirectRoute('team-split.result', ['teamId' => $this->teamId]);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage(), $e->getTrace());
            return;
        }
    }

    public function render()
    {
        return view('livewire.team-split.page.edit');
    }
}
