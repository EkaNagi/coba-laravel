<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Tresna Eka Widiana",
        "email" => "193040071@mail.unpas.ac.id",
        "image" => "image-about.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tresna Eka Widiana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolor inventore veniam doloremque, earum qui unde quidem ullam dolorum error et accusantium nisi tempora animi? Corrupti voluptas repellat voluptates aperiam, in facilis enim qui debitis autem dignissimos dolorum impedit libero ipsam at deleniti odit odio voluptatem? Accusamus similique sit praesentium ducimus corporis voluptate officia assumenda cupiditate sunt, repellat harum quae a beatae veniam labore, aliquid atque nemo iure quidem deleniti dolore minus totam. Hic, eligendi beatae quidem vel fugiat similique."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dian Nuryana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolor inventore veniam doloremque, earum qui unde quidem ullam dolorum error et accusantium nisi tempora animi? Corrupti voluptas repellat voluptates aperiam, in facilis enim qui debitis autem dignissimos dolorum impedit libero ipsam at deleniti odit odio voluptatem? Accusamus similique sit praesentium ducimus corporis voluptate officia assumenda cupiditate sunt, repellat harum quae a beatae veniam labore, aliquid atque nemo iure quidem deleniti dolore minus totam. Hic, eligendi beatae quidem vel fugiat similique."
        ]
    ];

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tresna Eka Widiana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolor inventore veniam doloremque, earum qui unde quidem ullam dolorum error et accusantium nisi tempora animi? Corrupti voluptas repellat voluptates aperiam, in facilis enim qui debitis autem dignissimos dolorum impedit libero ipsam at deleniti odit odio voluptatem? Accusamus similique sit praesentium ducimus corporis voluptate officia assumenda cupiditate sunt, repellat harum quae a beatae veniam labore, aliquid atque nemo iure quidem deleniti dolore minus totam. Hic, eligendi beatae quidem vel fugiat similique."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dian Nuryana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolor inventore veniam doloremque, earum qui unde quidem ullam dolorum error et accusantium nisi tempora animi? Corrupti voluptas repellat voluptates aperiam, in facilis enim qui debitis autem dignissimos dolorum impedit libero ipsam at deleniti odit odio voluptatem? Accusamus similique sit praesentium ducimus corporis voluptate officia assumenda cupiditate sunt, repellat harum quae a beatae veniam labore, aliquid atque nemo iure quidem deleniti dolore minus totam. Hic, eligendi beatae quidem vel fugiat similique."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
