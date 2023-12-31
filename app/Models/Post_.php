<?php

namespace App\Models;

class Post_ 
{
    private static  $blog =[
        ["title" => "About Pertama",
         "slug" => "about-pertama",
         "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, blanditiis. Debitis, aperiam explicabo! Necessitatibus dolorem dolorum enim libero impedit ratione similique, inventore atque explicabo reprehenderit dolor. Perferendis libero quod tempora?
         "  ],
        ["title" => "About Kedua",
        "slug" => "about-kedua",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, blanditiis. Debitis, aperiam explicabo! Necessitatibus dolorem dolorum enim libero impedit ratione similique, inventore atque explicabo reprehenderit dolor. Perferendis libero quod tempora?
        "]
    ];

    public static function all(){
        return collect(self:: $blog);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
