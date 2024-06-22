@props(['color' => 'primary', 'size' => ''])

<button {{ $attributes->class([
        "btn-{$color}", ($size ? "btn-{$size}" : ''),  "form-control"
    ])->merge([
    'type' => 'button',
    ]) }}  style="height: 80px;">
    {{ $slot }}
</button>
