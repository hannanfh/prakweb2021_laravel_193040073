<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hannan Fakhrul Hakim",
        "email" => "193040073@mail.unpas.ac.id",
        "image" => "nan.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hannan Fakhrul Hakim",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ipsa iure consequuntur sint molestiae doloremque corrupti repellendus at, voluptas commodi suscipit quos alias rem aliquid consequatur quis tempora quaerat dolorum nisi! Ipsam exercitationem mollitia, placeat perspiciatis voluptates quae! Aut voluptates quod accusantium error beatae et similique blanditiis eos esse, placeat sequi adipisci sunt deserunt optio iste vero ipsam vel aspernatur harum architecto ut? Ipsam, ipsa vitae maiores illo dolores hic impedit minus asperiores libero, neque veritatis soluta cumque vel officia?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "HANURA",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam aspernatur facere architecto accusantium suscipit ab molestias quas fugiat vitae ratione tempore, sed saepe. Ut, voluptas? Tempore dolore qui ipsa odit facere libero vero necessitatibus maiores cum placeat rerum veniam exercitationem quo earum recusandae illo dicta in aspernatur fugit, officiis totam, consequuntur optio? Voluptate ex placeat nesciunt in officia at eligendi quod ducimus explicabo eius iure omnis, fuga numquam autem quia consequatur, possimus dolor quaerat natus sed rerum? Fugit illo maxime modi possimus, repellendus et at ad molestiae asperiores doloribus culpa sint laboriosam iste commodi eum sapiente natus numquam quisquam? Voluptas!"
        ]
    ];

    return view('posts', [

        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hannan Fakhrul Hakim",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ipsa iure consequuntur sint molestiae doloremque corrupti repellendus at, voluptas commodi suscipit quos alias rem aliquid consequatur quis tempora quaerat dolorum nisi! Ipsam exercitationem mollitia, placeat perspiciatis voluptates quae! Aut voluptates quod accusantium error beatae et similique blanditiis eos esse, placeat sequi adipisci sunt deserunt optio iste vero ipsam vel aspernatur harum architecto ut? Ipsam, ipsa vitae maiores illo dolores hic impedit minus asperiores libero, neque veritatis soluta cumque vel officia?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "HANURA",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam aspernatur facere architecto accusantium suscipit ab molestias quas fugiat vitae ratione tempore, sed saepe. Ut, voluptas? Tempore dolore qui ipsa odit facere libero vero necessitatibus maiores cum placeat rerum veniam exercitationem quo earum recusandae illo dicta in aspernatur fugit, officiis totam, consequuntur optio? Voluptate ex placeat nesciunt in officia at eligendi quod ducimus explicabo eius iure omnis, fuga numquam autem quia consequatur, possimus dolor quaerat natus sed rerum? Fugit illo maxime modi possimus, repellendus et at ad molestiae asperiores doloribus culpa sint laboriosam iste commodi eum sapiente natus numquam quisquam? Voluptas!"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
