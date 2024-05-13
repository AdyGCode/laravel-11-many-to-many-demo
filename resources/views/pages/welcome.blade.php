<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <article class="h-full flex flex-col gap-8 bg-white shadow rounded pb-8">
        <header class="rounded-t p-4 bg-neutral-700 text-neutral-50 ">
            <h3 class="w-full font-bold uppercase tracking-widest">Content to be added</h3>
        </header>
        <section class="px-4 flex flex-col gap-y-4">
            <p>Hello there</p>
        </section>
    </article>
</x-guest-layout>
