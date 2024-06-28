<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Arr;
use App\Models\Post;

class BlogController extends Controller
{
    // public function all() {
    //     $carbon = Carbon::now();
    //     return [
    //         [
    //             'id' => 1,
    //             'name' => 'Linggar',
    //             'date' => $carbon->format('d-m-Y'),
    //             'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident animi id unde iusto eligendi, 
    //             exercitationem laboriosam illum laborum sunt, nisi, pariatur minus tenetur a dolore earum accusantium voluptatum reprehenderit sequi?"
    //         ],
    //         [
    //             'id' => 2,
    //             'name' => 'Ikhsan',
    //             'date' => $carbon->format('d-m-Y'),
    //             'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident animi id unde iusto eligendi, 
    //             exercitationem laboriosam illum laborum sunt, nisi, pariatur minus tenetur a dolore earum accusantium voluptatum reprehenderit sequi?"
    //         ]
    //     ];
    // }

    public function show() : View {
        $model = new Post();
        return view ('blogs', [
            'title'=>'Blogs', 
            'posts' =>$model->all(),
        ]);
    }

    public function show2($id) : View {
        $model = new Post();
        $array = [
            'title' => 'Blog',
            'posts' => $model->find($id),
        ];
        return view('blog', ['title' => 'Single Post', 'post' => $array['posts']] );
    }
}
