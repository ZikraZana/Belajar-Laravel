<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="mb-3 border-b border-gray-300">

            <h1 class="text-2xl font-semibold">{{ $post['title'] }}</h1>
            <h3 class="font-light">{{ $post['author'] }} | 10 january 2020</h3>
            <p class="mt-3">
                {{ Str::limit($post['body'], 100) }}
            </p>
            <div class="mt-3 mb-5">
                <a href="/posts/{{ $post['id'] }}" class="text-indigo-500 hover:underline">Read More &raquo;</a>
            </div>
        </article>
    @endforeach

</x-layout>
