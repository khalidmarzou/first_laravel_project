@props(['active' => false])

<!--
    This component renders an anchor (<a>) element that can represent
    a navigation link. The appearance changes based on the $active property.
-->
<a {{ $attributes }}
   class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
    block rounded-md px-3 py-2 text-base font-medium"
   aria-current="{{ $active ? 'page' : 'false' }}">

    {{ $slot }} <!-- Content of the link will be inserted here -->

</a>
