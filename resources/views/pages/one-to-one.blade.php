<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('One to One Relationship') }}
        </h2>
    </x-slot>

    <section class="py-6  grid grid-cols-2 gap-4 max-w-7xl">

        <section class="w-full p-2 sm:p-6 lg:p-8 bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-4">
            <h3 class="text-lg font-bold text-neutral-500 border-b-2">One to One</h3>

            <figure class="w-full p-1 shadow flex flex-col gap-1">
                <img src="{{ route('image.show', ['imageName' => 'ER-One-to-One.png']) }}"
                     alt="Your Image"
                     class="mx-auto">
                <figcaption class="text-xs bg-neutral-200 p-1 text-center w-full">
                    Image showing a One-to-One Relationship
                </figcaption>
            </figure>

            <p>
                One-to-One (1:1) relationships are a less likely to appear when developing an application. In fact when
                looking into the examples for this section, we found it difficult to derive real world examples that
                did not need some 'exercise' to make meaningful.
            </p>

            <p>
                Most of the time the examples we would use require the 'context' or 'precise situation' to be
                determined and then used when looking at the details provided.
            </p>

            <p>
                Here are some examples, and we are sure you could argue for 1 to many to replace these 1 to 1
                situations.
            </p>

            <dl class="flex flex-col gap-2 ml-4">
                <dt class="font-semibold font-neutral-900">
                    User - Profile:
                </dt>
                <dd class="mx-4 font-neutral-700">
                    a user HAS ONE profile, and a profile BELONGS TO ONE user.
                </dd>
                <dt class="font-semibold font-neutral-900">
                    Employee - Position:
                </dt>
                <dd class="mx-4 font-neutral-700">
                    an employee HAS ONE position, a position BELONGS TO ONE employee.
                </dd>
                <dt class="font-semibold font-neutral-900">
                    Employee - Details:
                </dt>
                <dd class="mx-4 font-neutral-700">
                    an employee HAS ONE set of details, a set of details BELONGS TO ONE employee.
                </dd>
            </dl>

            <p>
                As we indicated the above a a little 'contrived' and in reality we would seldom create such 'obtuse'
                relationships, especially when one-to-many may serve the same purpose and allow for more flexibility.
            </p>

        </section>


        <section class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <section class="p-6 text-gray-900 flex flex-col">
                <header class="mb-8 flex flex-col gap-4">
                    <h3 class="text-lg font-bold text-neutral-500 border-b-2">Examples</h3>
                    <p>
                        We use the Manager (Employee) - Department example for this demonstration. The two sides of
                        the relationship may be demonstrated by clicking on the buttons below:
                    </p>
                </header>

                <section class="flex flex-row gap-4 mx-auto">
                    <a href="{{ route('employees.index') }}"
                       class="w-1/2 border-2 bg-neutral-800 text-neutral-100 hover:bg-neutral-100 hover:text-neutral-800
                    transition duration-500 ease-in-out text-center p-6 rounded-xl shadow hover:shadow-inner">
                        Manager / Department
                    </a>

                    <a href="{{ route('departments.index') }}"
                       class="w-1/2 border-2 bg-neutral-800 text-neutral-100 hover:bg-neutral-100 hover:text-neutral-800
                    transition duration-500 ease-in-out text-center p-6 rounded-xl shadow hover:shadow-inner">
                        Department / Manager
                    </a>
                </section>

            </section>
        </section>

    </section>

</x-guest-layout>
