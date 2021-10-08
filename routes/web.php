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
        "name" => "devis",
        "email" => "devissuparlan@gmail.com",
        "image" => "dev.jpg"

    ]);
});





Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "autor" => "Devis Suparlan",
            "body"  => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt nostrum vero laudantium maiores eum, asperiores optio! Magni blanditiis accusantium eligendi at voluptatum nulla praesentium, ipsum inventore illo ab temporibus expedita unde. 
        Architecto sint, iure consequuntur blanditiis, dolores ea beatae saepe dignissimos nulla nam excepturi quisquam? Assumenda minus sit tempore iure, deserunt voluptatem at ducimus molestiae, delectus, saepe consectetur voluptate.
         Libero vero itaque modi reiciendis inventore enim, perferendis similique, quidem quam esse, at minus ea maxime! Quasi dolores dicta iure mollitia.
       "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"  => "judul-post-pertama",
            "autor" => "Syahna Zahra",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique architecto possimus dolor commodi veniam, quaerat ipsum. 
        Ipsa quod dolore corporis nam vitae quas quaerat repellat veniam facilis suscipit porro accusantium quibusdam ab et doloremque voluptate, 
        vero consectetur, similique eum placeat nostrum adipisci, consequatur iure dignissimos?
         Pariatur iste quod dolor totam odio ea reprehenderit voluptates deleniti nam accusantium. Odio beatae labore alias quaerat et tempora! 
        Quas fugit praesentium hic recusandae ipsum, unde itaque, quaerat nemo consectetur, laboriosam provident perspiciatis dolorem earum placeat
         deleniti. Dolore modi dolorum, minima cumque maxime, illum quo vero fugit vel ratione quisquam, at doloremque maiores optio! Dignissimos."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "autor" => "Devis Suparlan",
            "body"  => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt nostrum vero laudantium maiores eum, asperiores optio! Magni blanditiis accusantium eligendi at voluptatum nulla praesentium, ipsum inventore illo ab temporibus expedita unde. 
        Architecto sint, iure consequuntur blanditiis, dolores ea beatae saepe dignissimos nulla nam excepturi quisquam? Assumenda minus sit tempore iure, deserunt voluptatem at ducimus molestiae, delectus, saepe consectetur voluptate.
         Libero vero itaque modi reiciendis inventore enim, perferendis similique, quidem quam esse, at minus ea maxime! Quasi dolores dicta iure mollitia.
       "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"  => "judul-post-pertama",
            "autor" => "Syahna Zahra",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique architecto possimus dolor commodi veniam, quaerat ipsum. 
        Ipsa quod dolore corporis nam vitae quas quaerat repellat veniam facilis suscipit porro accusantium quibusdam ab et doloremque voluptate, 
        vero consectetur, similique eum placeat nostrum adipisci, consequatur iure dignissimos?
         Pariatur iste quod dolor totam odio ea reprehenderit voluptates deleniti nam accusantium. Odio beatae labore alias quaerat et tempora! 
        Quas fugit praesentium hic recusandae ipsum, unde itaque, quaerat nemo consectetur, laboriosam provident perspiciatis dolorem earum placeat
         deleniti. Dolore modi dolorum, minima cumque maxime, illum quo vero fugit vel ratione quisquam, at doloremque maiores optio! Dignissimos."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post"  => $new_post
    ]);
});
