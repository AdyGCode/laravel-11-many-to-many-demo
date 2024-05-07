<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Many to Many - Students') }}
        </h2>
    </x-slot>

    <section class="py-6 flex flex-row gap-4 max-w-7xl">

        <section class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-4">
            <h3 class="text-lg font-bold text-neutral-500 border-b-2">Many to Many</h3>

            <p>
                Many to many relationships use an reference, or pivot table as part of the 'normalisation'
                process to remove redundancy and issues with data integrity.
            </p>

            <p>
                In this example we have students who may have taken many courses, and any single course may have many
                students that have taken or are taking it.
            </p>

            <figure class="w-full p-1 shadow flex flex-col gap-1">
                <img src="{{ route('image.show', ['imageName' => 'ER-Many-to-Many.png']) }}"
                     alt="Your Image"
                     class="mx-auto">
                <figcaption class="text-xs bg-neutral-200 p-1 text-center w-full">
                    Image showing Many to Many transformed to One to Many : Many to One
                </figcaption>
            </figure>

        </section>

        <div class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">

            <div class="p-6 text-gray-900 flex flex-col gap-8">
                @foreach($students as $student)
                    <article class="h-full flex flex-col gap-8 bg-white shadow rounded pb-8">

                        <header class="bg-neutral-600 text-neutral-200 p-4 rounded-t flex flex-row justify-between">
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
        </div>
    </section>
</x-guest-layout>
