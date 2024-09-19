<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="flex gap-4 flex-wrap w-full">
        @php
            $colors = [
                'bg-red-200', 'bg-green-200', 'bg-blue-200', 'bg-yellow-200', 'bg-purple-200',
                'bg-pink-200', 'bg-indigo-200', 'bg-teal-200', 'bg-orange-200', 'bg-cyan-200',
                'bg-lime-200', 'bg-amber-200', 'bg-fuchsia-200', 'bg-rose-200', 'bg-violet-200',
                'bg-sky-200', 'bg-emerald-200', 'bg-slate-200', 'bg-zinc-200', 'bg-neutral-200'
            ];
        @endphp

        @foreach ($jobs as $index => $job)
            <article class="w-1/5">
                <a href="/jobs/{{ $job['id'] }}" class="block max-w-sm p-6 {{ $colors[$index % count($colors)] }} border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $job['title'] }}</h5>
                    <h6 class="mb-2 text-xl tracking-tight text-red-700">Employer :{{ $job->employer->name }}</h6>
                    <p class="font-light text-gray-700">Pays -> {{ $job['salary'] }} $</p>
                </a>
            </article>
        @endforeach

    </div>

    <div class="mt-6">
        {{ $jobs->links()  }}
    </div>

</x-layout>
