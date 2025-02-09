<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

        <article class="mb-3 border-b border-gray-300">

            <h1 class="text-2xl font-semibold">{{ $post['title'] }}</h1>
            <h3 class="font-light">{{ $post['author'] }} | 10 january 2020</h3>
            <p class="mt-3">
                {{ $post['body'] }}
            </p>
            <div class="mt-3 mb-5">
                <a href="/posts" class="text-indigo-500 hover:underline">&laquo; Back to posts </a>
            </div>
        </article>

</x-layout>
