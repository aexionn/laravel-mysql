<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    public function show() : View {
        $carbon = Carbon::now();
        
        return view ('blog', [
            'title'=>'Blog', 
            'posts' => 
            [
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
            ]
        ]);
    }

    public function show2($id) {
        $array = [
            'title' => 'Blog',
            'posts' =>
            [
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
            ]
        ];

        $post = Arr::first($array, function ($post) use($id) {
            return $post['id'] == $id;
        });

        dd($post);
    }
}
