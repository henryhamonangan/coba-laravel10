<?php

namespace App\Models;

class Post1
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Henry Hamonangan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nesciunt, harum nam saepe exercitationem libero excepturi magni accusantium ab, reprehenderit, repudiandae expedita veniam! Repudiandae accusamus laboriosam debitis iure, illo eaque iusto commodi aliquam dolor, doloremque quia quasi voluptas similique quo unde impedit. Tempore in dolor quia distinctio sunt tenetur expedita vero, dolorem pariatur facilis consectetur cumque maiores, voluptates repellat dignissimos! Accusantium a, itaque nostrum deserunt cum architecto sed vitae? Quos dolores aut minima sit, hic dignissimos error voluptatibus maiores facilis!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sony Christian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint rem unde nisi eligendi nobis distinctio consectetur corporis vel mollitia itaque ad excepturi sunt, necessitatibus dolorum labore sed deserunt illum molestias nemo atque maxime. Aliquid, nostrum. Quod iste quisquam debitis error saepe adipisci enim optio iure eveniet, dolores ipsa consequatur nostrum alias unde ad, officia ratione porro voluptatum eius hic! Laboriosam veritatis adipisci repudiandae facilis placeat alias, dicta fuga nulla eveniet debitis omnis illum et commodi dignissimos sunt laborum sapiente pariatur tempora. Provident non distinctio autem aliquid consectetur nisi itaque deleniti inventore temporibus facere alias mollitia, magnam officia corporis aut iure."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }
}
