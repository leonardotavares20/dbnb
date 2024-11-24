@props(['active' => false, 'href' => '#', 'type' => 'button'])

@if ($type == 'a')
    <a href="{{ $href }}"
       class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
       aria-current="{{ $active ? 'page' : 'false' }} {{ $attributes }}">
        {{ $slot }}
    </a>
@else
    <button class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
            aria-current="{{ $active ? 'page' : 'false' }} {{ $attributes }}">
        {{ $slot }}
    </button>
@endif
