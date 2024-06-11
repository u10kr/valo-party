@props(['label', 'model'])

@php
    $hasError = $errors->has($model);
@endphp

<div>
    <label class="mb-2 block text-sm font-medium text-white" for="{{ $model }}">{{ $label }}</label>
    <div class="relative mb-2">
        <input id="{{ $model }}" type="text" aria-describedby="hs-validation-name-error-helper"
            wire:model.blur="{{ $model }}" @class([
                'block w-full rounded-lg px-4 py-3 text-sm',
                'border-gray-200 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50' => !$hasError,
                'border-red-500 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500' => $hasError,
            ]) required="">
        @if ($hasError)
            <div class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-3">
                <svg class="size-4 flex-shrink-0 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" x2="12" y1="8" y2="12"></line>
                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                </svg>
            </div>
        @endif
    </div>
    @if ($hasError)
        <p class="text-sm text-red-600" id="hs-validation-name-error-helper">{{ $errors->first($model) }}</p>
    @endif
</div>
