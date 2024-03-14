<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" =>"Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gistya Devi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi esse ipsa, inventore suscipit cupiditate vero tempora ipsum.
             Voluptatum labore minus soluta incidunt inventore rerum laborum vero vel debitis alias magni dicta,
             impedit hic autem atque assumenda minima ipsa facilis eius amet. Vel quasi a nostrum autem rerum distinctio facere, quae explicabo 
             nobis unde nihil soluta necessitatibus? Harum, sequi! Nostrum aspernatur ratione aliquid, corporis numquam magni debitis ab ducimus, pariatur nobis adipisci nisi sapiente exercitationem. 
             Modi, voluptate repellat. Blanditiis, quaerat quisquam!"
        ],
        [
            "title" =>"Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gistya Devi Sulistyawati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae iusto non quaerat neque? Quaerat quo, accusantium hic fugiat eum doloremque quibusdam voluptas beatae tempora impedit molestiae non corporis rerum perspiciatis iusto enim ipsam? Assumenda corporis facere ratione, at nobis aut amet sint perferendis quisquam rerum vel quos repellat a enim, accusamus provident quibusdam. Voluptas pariatur omnis tempore libero vitae! Est veritatis voluptate consequatur itaque quisquam, placeat harum tenetur nemo excepturi facere maiores dolores, fuga sed, rerum consequuntur praesentium blanditiis voluptates perferendis. Maiores at iste sequi. Dolore ad eius, similique, libero, illum quisquam perspiciatis et vel iure dolorem aliquam corporis aperiam?."

        ]
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
