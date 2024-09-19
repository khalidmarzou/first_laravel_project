@props(['red' => false])

<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-sm transition ease-in-out duration-150 ' . ($red ? 'bg-red-500 text-white hover:bg-red-600 focus:border-red-700 active:bg-red-700' : 'bg-gray-300 text-white hover:bg-gray-400 focus:border-gray-700 active:bg-gray-700')]) }}>
    {{ $slot }}
</button>
