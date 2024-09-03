<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <li type="square">
                <a href="/jobs/{{ $job['id'] }}" class="hover:text-blue-400 hover:underline">
                    <strong>{{ $job['title'] }} :</strong> pays -> {{ $job['salary'] }} $
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>