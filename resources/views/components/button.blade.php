@props(['red' => false, 'isButton' => false])

<!--
    This component renders either a button or an anchor tag
    based on the $isButton property. It also applies different
    styles based on the $red property.
-->
<{{ $isButton ? 'button' : 'a' }}
{{ $attributes->merge([
    'class' => 'inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-sm transition ease-in-out duration-150 ' .
    ($red ?
        'bg-red-500 text-white hover:bg-red-600 focus:border-red-700 active:bg-red-700' :
        'bg-gray-300 text-white hover:bg-gray-400 focus:border-gray-700 active:bg-gray-700')
]) }}>

{{ $slot }} <!-- Content of the button or link will be inserted here -->

</{{ $isButton ? 'button' : 'a' }}>
