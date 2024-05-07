<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('One to One') }}
        </h2>
    </x-slot>

    <section class="py-6 flex flex-row gap-4 max-w-7xl">

        <section class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-4">
            <h3 class="text-lg font-bold text-neutral-500 border-b-2">One to Many</h3>

            <p>
                A One to Many relationship allows us to represent relationships such as customers and orders, authors
                and blog posts, departments and staff, and more ...
            </p>

            <p>
                In this example we have customers who have made zero or more orders.
            </p>

            <figure class="w-full p-1 shadow flex flex-col gap-1">
                <img src="{{ route('image.show', ['imageName' => 'ER-One-to-Many.png']) }}"
                     alt="Your Image"
                     class="mx-auto">
                <figcaption class="text-xs bg-neutral-200 p-1 text-center w-full">
                    Image showing Many to Many transformed to One to Many : Many to One
                </figcaption>
            </figure>

        </section>

        <div class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">

            <div class="p-6 text-gray-900 flex flex-col gap-8">
                <div>
                    {{ $employees->links() }}
                </div>

                @foreach($employees as $employee)

                    <article class="flex flex-col bg-white shadow rounded gap-2">

                        <header class="bg-neutral-600 text-neutral-200 p-4 rounded-t ">
                            <h3 class="text-bold text-xl">
                                {{ $employee->family_name }},
                                {{ $employee->given_name }}
                            </h3>
                        </header>

                        <p class="px-6 ">Department: {{ $employee->department->name ?? '' }}</p>
                        <p class="px-6 pb-2">Manager: {{ $employee->manager()->family_name }}</p>

                    </article>

                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
