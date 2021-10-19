<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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
            "slug"  => "judul-post-kedua",
            "autor" => "Syahna Zahra",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique architecto possimus dolor commodi veniam, quaerat ipsum. 
    Ipsa quod dolore corporis nam vitae quas quaerat repellat veniam facilis suscipit porro accusantium quibusdam ab et doloremque voluptate, 
    vero consectetur, similique eum placeat nostrum adipisci, consequatur iure dignissimos?
     Pariatur iste quod dolor totam odio ea reprehenderit voluptates deleniti nam accusantium. Odio beatae labore alias quaerat et tempora! 
    Quas fugit praesentium hic recusandae ipsum, unde itaque, quaerat nemo consectetur, laboriosam provident perspiciatis dolorem earum placeat
     deleniti. Dolore modi dolorum, minima cumque maxime, illum quo vero fugit vel ratione quisquam, at doloremque maiores optio! Dignissimos."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
