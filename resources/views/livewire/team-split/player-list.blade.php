<div class="mt-10 grid grid-cols-5 gap-4">
    @foreach ($this->players as $index => $player)
        <div wire:transition>
            <livewire:team-split.player-card :id="$player['id']" :name="$player['name']" :rank_id="$player['rank_id']" :key=$index />
        </div>
    @endforeach
</div>
