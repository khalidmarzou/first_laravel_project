<x-layout>
    <x-slot:heading>
        Job <!-- Sets the heading for the layout -->
    </x-slot:heading>

    <!-- Display the job title -->
    <h1 class="font-extrabold text-xl text-yellow-900">Title: {{ $job->title }}</h1>

    <!-- Display the job salary -->
    <p>
        This job pays: {{ $job->salary }} $ per month
    </p>

    <div>
        <!-- Button to edit the job, linking to the edit page -->
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>

        <!-- Button to delete the job, uses a form for submission -->
        <x-button :isButton="true" form="delete-form" type="submit" :red="true">Delete Job</x-button>
    </div>

    <!-- Form for deleting the job -->
    <form class="mt-2" action="/jobs/{{ $job->id }}" method="POST" id="delete-form" class="hidden">
        @csrf <!-- CSRF token for form protection -->
        @method('DELETE') <!-- Spoof the DELETE request method -->
    </form>
</x-layout>
