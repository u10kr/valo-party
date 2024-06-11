<div class="mt-5 w-9/12">
    <div class="bg-seance-800">
        <livewire:team-split.add-player-form :$teamId></livewire:team-split.add-player-form>
    </div>

    <livewire:team-split.player-list :$teamId></livewire:team-split.player-list>
    <form wire:submit="teamSplit">
        <x-button.submit label="チームを編集する"></x-button.submit>
    </form>
</div>
