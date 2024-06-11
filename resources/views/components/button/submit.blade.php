@props(['label'])
<button
    class="w-full items-center gap-x-2 rounded-lg border border-transparent bg-secondary-500 px-4 py-3 text-sm font-semibold text-white hover:bg-secondary-600 disabled:pointer-events-none disabled:opacity-50"
    type="submit">
    {{ $label }}
</button>
