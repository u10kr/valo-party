<form wire:submit="add">
    <div class="w-56">
        <x-input.text label="プレイヤー名" model="name"></x-input.text>
    </div>

    <div class="mt-5 flex">
        <x-input.rank-radio label="ランク" :dataList=$ranks model="rankId"></x-input.rank-radio>
    </div>

    <div class="mt-7 w-full">
        <x-button.submit label="追加"></x-button.submit>
    </div>
</form>
