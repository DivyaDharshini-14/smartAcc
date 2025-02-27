{{--
-- Important note:
--
-- This template is based on an example from Tailwind UI, and is used here with permission from Tailwind Labs
-- for educational purposes only. Please do not use this template in your own projects without purchasing a
-- Tailwind UI license, or they’ll have to tighten up the licensing and you’ll ruin the fun for everyone.
--
-- Purchase here: https://tailwindui.com/
--}}

@props([
    'placeholder' => null,
    'trailingAddOn' => null,
])

<div class="flex">
    <label>
        <select {{ $attributes->merge(['class' => 'form-select bg-transparent text-xs font-lex block pl-3 pr-10 py-2.5 leading-6 border-gray-300 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:leading-5' . ($trailingAddOn ? ' rounded-r-none' : '')]) }}>
            @if ($placeholder)
                <option disabled value="">{{ $placeholder }}</option>
            @endif

            {{ $slot }}
        </select>
    </label>

    @if ($trailingAddOn)
        {{ $trailingAddOn }}
    @endif
</div>
