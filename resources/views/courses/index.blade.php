<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Many to Many - Courses') }}
        </h2>
    </x-slot>

    <section class="py-6 flex flex-col gap-4 max-w-7xl">

        <section class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-4">
            <h3 class="text-lg font-bold text-neutral-500 border-b-2">Many to Many</h3>
            <p>
                Showing each course and the students who have taken it.
            </p>
        </section>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 grid grid-cols-3 gap-8">
                @foreach($courses as $course)
                    <article class="w-full h-full grow flex flex-col bg-white shadow rounded pb-2">

                        <header class="bg-neutral-600 text-neutral-200 p-4 rounded-t flex flex-row justify-between
                                       mb-4 items-baseline">
                            <h3 class="text-bold text-xl">{{ $course->title }}</h3>
                            <p class="text-xl text-neutral-400 pl-2 ml-2 border-l border-neutral-500">
                                {{ $course->code }}
                            </p>
                        </header>

                        <section class="px-4 mb-4">
                            <header>
                                <h4 class="text-lg font-semibold">Description</h4>
                            </header>
                            <p class="italic">
                                @empty($course->description)
                                    -
                                @else
                                    {{ $course->description }}
                                @endempty
                            </p>
                        </section>

                        <section class="px-4">
                            <header>
                                <h4 class="font-semibold">Students</h4>
                            </header>
                            <ul class="list-disc ml-6">
                                @if(!$course->students()->count())
                                    {{ __("No Students") }}
                                @else
                                    @foreach($course->students()->get() as $student)
                                        <li class="">{{ $student->familyGivenName }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </section>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

</x-guest-layout>
