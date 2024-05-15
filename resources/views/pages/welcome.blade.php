<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <article class="h-full flex flex-col gap-8 bg-white shadow rounded pb-8">
        <header class="rounded-t p-4 bg-neutral-700 text-neutral-50 ">
            <h3 class="w-full font-bold uppercase tracking-widest">Laravel Relationships Demo</h3>
        </header>
        <section class="px-4 flex flex-col gap-y-4">
            <h4 class="text-xl text-semibold">
                Hello there!
            </h4>
            <p>
                This demo application shows a number of core concepts for developing laravel applications. In this case
                they revolve around the development of relationships between models in your database design.
            </p>

            <h4 class="text-xl text-semibold border border-t-0 border-x-0 border-b-1">
                Repository
            </h4>
            <p>
                You will find this demo project at:
            </p>
            <pre><code class="language-http"><a
                        href="https://github.com/AdyGCode/laravel-11-many-to-many-demo">https://github.com/AdyGCode/laravel-11-many-to-many-demo</a></code></pre>

            <h4 class="text-xl text-semibold border border-t-0 border-x-0 border-b-1">
                Viewing the Demo
            </h4>
            <p>
                Currently, this demo is also available by visiting the URI (Universal Resource Identifier):
                <code class="language-http">{{ $host }}</code>.
            </p>

            <h4 class="text-xl text-semibold border border-t-0 border-x-0 border-b-1">
                Live Deployment?
            </h4>
            <p>
                When configuring your remote server, PaaS, or similar, you must ensure that the root of the website is
                pointed to the <code class="language-bash">public</code> folder. For more information
                see: <code class="language-http"><a
                        href="https://laravel.com/docs/11.x/deployment">https://laravel.com/docs/11.x/deployment</a></code>.
            </p>

            <h4 class="text-xl text-semibold border border-t-0 border-x-0 border-b-1">
                Development Mode
            </h4>
            <p>
                At the bottom of this example application is the Laravel Debug Toolbar. It is used only in "dev"/"local"
                mode an is not executed when in production. To add it use:
            </p>
            <pre><code class="language-http"><a
                        href="https://github.com/AdyGCode/laravel-11-many-to-many-demo">composer require barryvdh/laravel-debugbar --dev </a></code></pre>
            <p>To turn it off you <strong>must</strong> edit the
                <code class="language-bash">.env</code> file and change
                <code class="language-php">true</code> to
                <code class="language-php">false</code>.
            </p>
            <p>
                The repository for the Debug toolbar is at
                <code class="language-http"><a href="https://github.com/barryvdh/laravel-debugbar">https://github.com/barryvdh/laravel-debugbar</a></code>.
            </p>

            <h4 class="text-xl text-semibold border border-t-0 border-x-0 border-b-1">
                Code Highlighting
            </h4>
            <p>
The code for this site is syntax highlighted using the highlight.js package.
            </p>
            <p>
                The repository is at
                <code class="language-http"><a href="https://highlightjs.org/">https://highlightjs.org/</a></code>.
            </p>



        </section>
    </article>
</x-guest-layout>
