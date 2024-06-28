<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;

class Post
{
    use HasFactory;

    public function all() : array{
        $carbon = Carbon::now();
        return [
            [
                'id' => 1,
                'name' => 'Linggar',
                'date' => $carbon->format('d-m-Y'),
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident animi id unde iusto eligendi, 
                exercitationem laboriosam illum laborum sunt, nisi, pariatur minus tenetur a dolore earum accusantium voluptatum reprehenderit sequi?"
            ],
            [
                'id' => 2,
                'name' => 'Ikhsan',
                'date' => $carbon->format('d-m-Y'),
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident animi id unde iusto eligendi, 
                exercitationem laboriosam illum laborum sunt, nisi, pariatur minus tenetur a dolore earum accusantium voluptatum reprehenderit sequi?"
            ]
        ];
    }

    public function find($id) : array {
        $post = Arr::first($this->all(), function ($post) use ($id) {
            return $post['id'] == $id;
        });
        return $post;
    }
}
