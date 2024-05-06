<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Many to Many - Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col gap-8">
                    @foreach($courses as $course)
                        <article class="h-full flex flex-col gap-8 bg-white shadow rounded pb-8">

                            <header class="bg-neutral-600 text-neutral-200 p-4 rounded-t flex flex-row justify-between">
                                <h3 class="text-bold text-xl">{{ $course->title }}</h3>
                                <p class="text-xl text-neutral-300">{{ $course->code }} </p>
                            </header>

                            <section class="px-4">
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
        </div>
    </div>
</x-guest-layout>
