<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('One to One') }}
        </h2>
        <a href="{{ route('pages.one-to-many') }}">Back</a>
    </x-slot>

    <section class="py-6 flex flex-col gap-4 max-w-7xl">

        <section class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-4">
            <h3 class="text-lg font-bold text-neutral-500 border-b-2">
                One-to-One
            </h3>

            <p>
                Demonstrate One-to-One by showing the Department and its manager.
            </p>

        </section>

        <div class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">

            <h3 class="text-lg font-bold text-neutral-500 border-b-2 mb-6">
                Departments
            </h3>

            <div>
                {{ $departments->links() }}
            </div>

            <div class="p-6 text-gray-900 grid grid-cols-3 gap-8">

                @foreach($departments as $department)

                    <article class="flex flex-col bg-white shadow rounded gap-2">

                        <header class="bg-neutral-600 text-neutral-200 p-4 rounded-t ">
                            <h3 class="text-bold text-xl">
                                {{ $department->name }}
                            </h3>
                        </header>

                        <p class="px-6 pb-2">
                            <span class="text-neutral-500">Manager:</span>
                            {{ $department->managedBy['given_name'] }} {{ $department->managedBy['family_name'] }}
                        </p>

                    </article>

                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
