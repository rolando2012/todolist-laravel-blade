@props(['href' => '#'])

<a href="{{ $href }}" class="btn btn-link text-secondary text-decoration-none fw-medium p-0 ms-2 fs-7 btn-cancel-action">
    {{ $slot }}
</a>