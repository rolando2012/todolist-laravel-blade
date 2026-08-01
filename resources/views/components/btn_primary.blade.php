@props(['href' => '#', 'type' => 'a'])

@if($type === 'button')
    <button {{ $attributes->merge(['class' => 'btn btn-dark rounded-3 px-3 py-2 fw-medium shadow-sm']) }}>
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn btn-dark rounded-3 px-3 py-2 fw-medium shadow-sm']) }}>
        {{ $slot }}
    </a>
@endif