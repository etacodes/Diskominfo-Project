<?php

namespace App\Models;


class post 
{
    private static $blog_posts = [
            [
                "title" => "Judul 1",
                "slug" => "judul-post-pertama",
                "author" => "Ericko",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Vel, minima!.Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Exercitationem, culpa incidunt dolorum officiis iste tempora repudiandae 
                nemo praesentium fuga corporis odio suscipit. Ipsam, ratione sint magnam 
                distinctio labore quis sit quod numquam. Repellendus quos asperiores repellat 
                voluptatum eveniet, nisi laborum esse doloribus incidunt in vitae dolorum molestias, 
                ullam quod distinctio."
            ],
            [
                "title" => "Judul 2",
                "slug" => "judul-post-kedua",
                "author" => "Rudi",
                "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, 
                ab quisquam. Temporibus rerum incidunt, ipsa quod modi odio praesentium tempore 
                laudantium facere veniam est. Minus reiciendis sit natus obcaecati, perferendis molestias, 
                deserunt sint aspernatur corporis soluta fugit architecto, omnis nemo accusantium ut quasi? 
                Et id cumque accusantium tempore facilis provident quaerat incidunt fugiat aperiam a odio 
                placeat inventore ipsam, nemo facere quidem ab perspiciatis at ea non repudiandae. 
                Illum distinctio minima nobis, sequi blanditiis magnam impedit officia, quas, explicabo 
                ipsa consequuntur. Iste, numquam eveniet laborum illum possimus, minima dolore ea quasi, 
                corporis odio quia id enim! Aliquid, fugiat. Necessitatibus, ullam."
            ]
        
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

       return $posts->firstwhere('slug', $slug); 

    }

}
