<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// Blog
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'MonoZikk',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque consequuntur exercitationem, omnis accusamus
            ratione quos fugit, quia illo ipsum esse ipsa temporibus dicta repellendus eos voluptatem dolore doloremque
            modi voluptates?'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'MonoZikk',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, amet facilis rerum porro numquam
            quibusdam recusandae laboriosam dolores impedit at sit modi quidem eveniet explicabo, aspernatur adipisci id
            quasi perferendis.'
        ]
    ]]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'MonoZikk',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque consequuntur exercitationem, omnis accusamus
            ratione quos fugit, quia illo ipsum esse ipsa temporibus dicta repellendus eos voluptatem dolore doloremque
            modi voluptates?'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'MonoZikk',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, amet facilis rerum porro numquam
            quibusdam recusandae laboriosam dolores impedit at sit modi quidem eveniet explicabo, aspernatur adipisci id
            quasi perferendis.'
        ]
    ];

    $post = Arr::first($posts, function($post) use($id){
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

// About
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
