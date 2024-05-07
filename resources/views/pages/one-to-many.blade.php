<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('One to Many') }}
        </h2>
    </x-slot>

    <section class="py-6 flex flex-row gap-4 max-w-7xl">

        <section class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <section class="p-6 text-gray-900 flex flex-col gap-6">
                <header class="flex flex-col gap-4">

                    <h3 class="text-lg font-bold text-neutral-500 border-b-2 mb-4">One to Many</h3>

                    <figure class="w-full p-1 shadow">
                        <img src="{{ route('image.show', ['imageName' => 'ER-One-to-Many.png']) }}"
                             alt="Your Image"
                             class="mx-auto pb-1">
                        <figcaption class="text-xs bg-neutral-200 p-1 text-center w-full">
                            Image showing a One to Many Relationship
                        </figcaption>
                    </figure>
                </header>

                <p>
                    A One to Many (1:m) relationship allows us to represent relationships that have some 'entity'
                    owning zero of more items.
                </p>

                <p>
                    The one-to-many (1:m) relationship is possibly the most commonly seen. You will see in the many to
                    many (m:m) relationship how we deconstruct the m:m to use 1:m relationships and to provide a more
                    robust
                    data structure.
                </p>

                <p>
                    Here are some possible situations using one to many relationships:
                </p>

                <dl class="flex flex-col gap-2 ml-4">
                    <dt class="font-semibold font-neutral-900">
                        Department - Positions:
                    </dt>
                    <dd class="mx-4 font-neutral-700">
                        a department HAS MANY positions, whilst each position BELONGS TO ONE department only.
                    </dd>
                    <dt class="font-semibold font-neutral-900">
                        Customer - Orders:
                    </dt>
                    <dd class="mx-4 font-neutral-700">
                        a customer HAS MANY orders, but each order BELONGS TO ONE customer.
                    </dd>
                    <dt class="font-semibold font-neutral-900">
                        More examples:
                    </dt>
                    <dd class="mx-4 font-neutral-700">
                        to be added ...
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
                    <a href="{{ route('customers.index') }}"
                       class="w-1/2 border-2 bg-neutral-800 text-neutral-100 hover:bg-neutral-100 hover:text-neutral-800
                    transition duration-500 ease-in-out text-center p-6 rounded-xl shadow hover:shadow-inner">
                        Customers / Orders
                    </a>

                    <a href="{{ route('home') }}"
                       class="w-1/2 border-2 bg-neutral-800 text-neutral-100 hover:bg-neutral-100 hover:text-neutral-800
                    transition duration-500 ease-in-out text-center p-6 rounded-xl shadow hover:shadow-inner">
                        Orders / Customers
                    </a>
                </section>

            </section>
        </section>

    </section>
</x-guest-layout>
