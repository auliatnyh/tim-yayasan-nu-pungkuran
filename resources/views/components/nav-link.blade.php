@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-black-300 hover:bg-white-700 hover:text-black' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>



