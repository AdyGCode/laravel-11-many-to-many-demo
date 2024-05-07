<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Many to Many - Students') }}
        </h2>
    </x-slot>

    <section class="py-6 flex flex-col gap-4 max-w-7xl">

        <heading class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-4">

            <h3 class="text-lg font-bold text-neutral-500 border-b-2">Many to Many</h3>
            <p>
                Here we see the Students and the courses they are taking or have taken.
            </p>

        </heading>

        <section class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">

            <header class="text-xl font-semibold mb-4">
                <h3>Students</h3>
            </header>

            <div class="text-gray-900 flex flex-row flex-wrap justify-between  gap-4">

                @foreach($students as $student)
                    <article class="w-1/4 h-full grow flex flex-col bg-white shadow rounded pb-2">

                        <header class="bg-neutral-600 text-neutral-200 p-4 rounded-t mb-6">
                            <h3 class="text-bold text-xl">{{ $student->fullName }}</h3>
                        </header>

                        <section class="px-4">
                            <header>
                                @if(!$student->courses()->count())
                                    <h4 class="text-neutral-500">
                                        {{ __("No Courses") }}
                                    </h4>
                                @else
                                    <h4 class="font-semibold">
                                        {{ __("Courses") }}
                                    </h4>
                                @endif
                            </header>

                            <ul class="list-disc ml-6">
                                @foreach($student->courses()->get() as $course)
                                    <li class="">
                                        {{ $course->code }}
                                        {{ $course->title }}
                                    </li>
                                @endforeach
                            </ul>

                        </section>

                    </article>
                @endforeach
            </div>
        </section>
    </section>
</x-guest-layout>
