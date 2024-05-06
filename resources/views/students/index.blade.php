<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Many to Many - Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col gap-8">
                    @foreach($students as $student)
                        <article class="h-full flex flex-col gap-8 bg-white shadow rounded pb-8">

                            <header class="bg-neutral-600 text-neutral-200 p-4 rounded-t flex flex-row justify-between">
                                <h3 class="text-bold text-xl">{{ $student->fullName }}</h3>
                            </header>

                            <section class="px-4">
                                <header>
                                    <h4 class="font-semibold">Courses</h4>
                                </header>
                                <ul class="list-disc ml-6">
                                    @if(!$student->courses()->count())
                                        {{ __("No Students") }}
                                    @else
                                        @foreach($student->courses()->get() as $course)
                                            <li class="">
                                                {{ $course->code }}
                                                {{ $course->title }}
                                            </li>
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
