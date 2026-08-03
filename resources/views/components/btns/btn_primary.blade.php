@props(['href' => '#', 'type' => 'a', 'icon' => null])

@php
    $classes = 'btn btn-dark rounded-3 px-3 py-2 fw-medium shadow-sm d-inline-flex align-items-center gap-2 active-push';
@endphp

@if($type === 'button')
    <button {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon) <i class="bi bi-{{ $icon }}"></i> @endif
        <span>{{ $slot }}</span>
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon) <i class="bi bi-{{ $icon }}"></i> @endif
        <span>{{ $slot }}</span>
    </a>
@endif