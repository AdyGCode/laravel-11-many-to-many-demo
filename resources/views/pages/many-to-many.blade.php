<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Many to Many') }}
        </h2>
    </x-slot>

    <section class="py-6 flex flex-row gap-4 max-w-7xl">

        <section class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <section class="p-6 text-gray-900 flex flex-col gap-6">
                <header class="flex flex-col gap-4">

                    <h3 class="text-lg font-bold text-neutral-500 border-b-2 mb-4">Many to Many</h3>

                    <figure class="w-full p-1 shadow">
                        <img src="{{ route('image.show', ['imageName' => 'ER-Many-to-Many.png']) }}"
                             alt="Your Image"
                             class="mx-auto pb-1">
                        <figcaption class="text-xs bg-neutral-200 p-1 text-center w-full">
                            Image showing Many to Many transformed to One to Many : Many to One
                        </figcaption>
                    </figure>
                </header>

                <p>
                    Many to many relationships use an reference, or pivot table as part of the 'normalisation'
                    process to remove redundancy and issues with data integrity.
                </p>

                <p>
                    Here are some possible situations using one to many relationships:
                </p>
                <p class="text-xs text-neutral-100 bg-neutral-700 p-2 rounded leading-relaxed">
                    <strong>Note:</strong>
                    In many relationships there may be situations where one side may have zero or more items related
                    to it. This is quite common. Likewise you may require there to be at least one related item
                    between the two entities (tables/models).
                </p>

                <dl class="flex flex-col gap-2 ml-4">
                    <dt class="font-semibold font-neutral-900">
                        Students - Courses:
                    </dt>
                    <dd class="mx-4 font-neutral-700">
                            A student HAS MANY courses they study, a course HAS MANY students enrolled in it.
                    </dd>
                    <dt class="font-semibold font-neutral-900">
                        Vehicles - Owners:
                    </dt>
                    <dd class="mx-4 font-neutral-700">
                        a vehicle HAS MANY owners over its lifetime, and each owner may have
                        owned MANY vehicles.
                    </dd>
                    <dt class="font-semibold font-neutral-900">
                        Sets / Categories:
                    </dt>
                    <dd class="mx-4 font-neutral-700">
                        A set may HAVE MANY categories, and each category MAY HAVE many sets. This is a classic
                        example. Think Lego® Sets and the Themes they have.
                    </dd>
                    <dt class="font-semibold font-neutral-900">
                        Authors / Books:
                    </dt>
                    <dd class="mx-4 font-neutral-700">
                        An author may have written many books, and a book may have many authors. This is another very
                        good example where many to many exists.
                    </dd>

                </dl>

            </section>
        </section>

        <section class="bg-white overflow-hidden shadow-sm sm:rounded-lg min-w-1/3 grow">
            <section class="p-6 text-gray-900 flex flex-col">
                <header class="mb-8 flex flex-col gap-4">
                    <h3 class="text-lg font-bold text-neutral-500 border-b-2">Examples</h3>
                    <p>
                        We use the Customer - Orders example for this demonstration. The two sides of
                        the relationship may be demonstrated by clicking on the buttons below:
                    </p>
                </header>

                <section class="flex flex-row gap-4 mx-auto">
                    <a href="{{ route('courses.index') }}"
                       class="w-1/2 border-2 bg-neutral-800 text-neutral-100 hover:bg-neutral-100 hover:text-neutral-800
                    transition duration-500 ease-in-out text-center p-6 rounded-xl shadow hover:shadow-inner">
                        Courses / Students
                    </a>

                    <a href="{{ route('students.index') }}"
                       class="w-1/2 border-2 bg-neutral-800 text-neutral-100 hover:bg-neutral-100 hover:text-neutral-800
                    transition duration-500 ease-in-out text-center p-6 rounded-xl shadow hover:shadow-inner">
                        Students / Courses
                    </a>
                </section>

            </section>
        </section>

    </section>
</x-guest-layout>
