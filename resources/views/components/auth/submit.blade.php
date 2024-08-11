@props([
    'value' => '',
])

<button
    {{ $attributes->merge(['class' => 'flex w-full justify-center rounded-md bg-[#f65b17] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-md hover:bg-[#f65b17]/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#f65b17] transition duration-200']) }}>
    {{ $value ?? $slot }}
</button>
