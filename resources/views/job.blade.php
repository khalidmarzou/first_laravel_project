<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
    <h1 class="font-extrabold text-xl text-yellow-900">Title : {{ $job['title'] }}</h1>
    <p>
        This job pays : {{ $job['salary'] }} Per month
    </p>

</x-layout>