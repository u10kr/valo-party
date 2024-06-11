<div class="group flex flex-col rounded-xl border bg-white shadow-sm transition hover:shadow-md" href="#">
    <div class="p-4 md:p-5">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img class="size-[38px] rounded-full" src="{{ $rankImageUrl }}" alt="{{ $rankImageUrl }}">
                <div class="ms-3">
                    <h3 class="font-semibold text-gray-800">
                        {{ $name }}
                    </h3>
                </div>
            </div>

        </div>
        <div class="flex items-center justify-between">
            <button type="button" wire:click="edit">edit</button>
            <button type="button" wire:click="delete">delete</button>
        </div>
    </div>
</div>
