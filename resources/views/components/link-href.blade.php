@props([
    'value' => '',
])

<a
    {{ $attributes->merge(['class' => 'font-semibold text-xs text-indigo-600 hover:text-indigo-500 hover:underline dark:text-sky-500 duration-500']) }}>
    {{ $value ?? $slot }}
</a>
