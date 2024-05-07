<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('One to Many - Customers') }}
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
                    {{ $customers->links() }}
                </div>

                @foreach($customers as $customer)
                    <article class="h-full flex flex-col bg-white shadow rounded">

                        <header class="bg-neutral-600 text-neutral-200 p-4 rounded-t ">
                            <h3 class="text-bold text-xl">{{ $customer->fullName }}</h3>
                            <h6 class="text-bold text-sm">{{ $customer->email }}</h6>
                        </header>

                        <table class="table">
                            <thead>
                            <tr class="bg-neutral-300 border-b border-b-neutral-200 text-sm">
                                <th class="p-1 pl-2 text-left">ID</th>
                                <th class="p-1 text-left">Created</th>
                                <th class="p-1 text-left">Packed</th>
                                <th class="p-1 pr-2 text-left">Shipped</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($customer->orders as $order)
                                <tr class="border-b border-t-neutral-200 text-sm">
                                    <td class="border-r px-1 pl-2 ">{{ $order->id }}</td>
                                    <td class="border-r px-1">{{ $order->created_at }}</td>
                                    <td class="border-r px-1">{{ $order->packed_at }}</td>
                                    <td class=" px-1 pr-2 ">{{ $order->shipped_at }}</td>
                                </tr>
                            @endforeach

                            @if(!$customer->orders()->count())
                                <tr class="rounded-b">
                                    <td></td>
                                    <td class="font-semibold w-full px-0 text-neutral-500" colspan="3">
                                        {{ __("No Orders") }}
                                    </td>
                                </tr>
                            @endif
                            </tbody>

                        </table>

                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
