<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1 class="font-extrabold text-xl text-yellow-900">Title : {{ $job->title }}</h1>
    <p>
        This job pays : {{ $job->salary }} $ Per month
    </p>

    <div>
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        <x-button form="delete-form" type="submit" :red="true">Delete Job</x-button>
    </div>

    <form class="mt-2" action="/jobs/{{ $job->id }}" method="POST" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>


</x-layout>
