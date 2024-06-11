<div class="grid grid-flow-col grid-rows-3 gap-x-12 gap-y-2">
    @foreach ($dataList as $index => $data)
        <div class="flex" :key=$index>
            <input class="hidden" id="{{ $data['name'] . $index }}" type="radio" value="{{ $data['value'] }}"
                wire:model.change="{{ $model }}">
            <label
                class="flex h-12 w-12 cursor-pointer items-center justify-center rounded-full rounded-full border-2 border-primary-700 transition hover:scale-95 hover:opacity-50 bg-primary-800"
                for="{{ $data['name'] . $index }}">
                <img class="h-8 w-8" src="{{ asset('images/ranks/' . $data['name'] . '.png') }}"
                    alt="{{ $data['name'] }}">
            </label>
        </div>
    @endforeach
</div>
