<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col gap-8">
                    @foreach($courses as $course)
                        <article class="">
                            <header class="bg-neutral-600 text-neutral-200">
                                <h3 class="text-bold">{{ $course->code }} {{ $course->title }}</h3>
                            </header>
                            <section>
                                <p>
                                    {{ $course->desciption }}
                                </p>
                            </section>
                            <section>
                                <header>
                                    <h4 class="font-semibold">Students</h4>
                                </header>
                                @foreach($course->students()->get() as $student)
                                    <p>{{ $student->family_name }}, {{ $student->given_name }}</p>
                                @endforeach
                            </section>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
