<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        foreach($posts as $post){
            dump($post->title);
        }
        dd('end');
    }

    public function create(){
        $postsArr = [
            [
                'title' => 'First Post Title',
                'content' => 'This is the content of the first post.',
                'image' => 'first_image.jpg',
                'likes' => 10,
                'is_published' => 1,
            ],
            [
                'title' => 'Second Post Title',
                'content' => 'This is the content of the second post.',
                'image' => 'second_image.jpg',
                'likes' => 20,
                'is_published' => 0,
            ],
            [
                'title' => 'Third Post Title',
                'content' => 'This is the content of the third post.',
                'image' => 'third_image.jpg',
                'likes' => 30,
                'is_published' => 1,
            ],
            [
                'title' => 'Fourth Post Title',
                'content' => 'This is the content of the fourth post.',
                'image' => 'fourth_image.jpg',
                'likes' => 40,
                'is_published' => 0,
            ],
            [
                'title' => 'Fifth Post Title',
                'content' => 'This is the content of the fifth post.',
                'image' => 'fifth_image.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
            [
                'title' => 'Sixth Post Title',
                'content' => 'This is the content of the sixth post.',
                'image' => 'sixth_image.jpg',
                'likes' => 60,
                'is_published' => 0,
            ],
            [
                'title' => 'Seventh Post Title',
                'content' => 'This is the content of the seventh post.',
                'image' => 'seventh_image.jpg',
                'likes' => 70,
                'is_published' => 1,
            ],
            [
                'title' => 'Eighth Post Title',
                'content' => 'This is the content of the eighth post.',
                'image' => 'eighth_image.jpg',
                'likes' => 80,
                'is_published' => 0,
            ],
            [
                'title' => 'Ninth Post Title',
                'content' => 'This is the content of the ninth post.',
                'image' => 'ninth_image.jpg',
                'likes' => 90,
                'is_published' => 1,
            ],
            [
                'title' => 'Tenth Post Title',
                'content' => 'This is the content of the tenth post.',
                'image' => 'tenth_image.jpg',
                'likes' => 100,
                'is_published' => 0,
            ],
        ];

        Post::insert($postsArr);

        dd('created');
    }

    public function update(){
        $post = Post::find(7);

        $post->update([
            'title' => 'update',
            'content' => 'update',
            'image' => 'update',
            'likes' => 33,
            'is_published' => 1,
        ]);

        dd('updated');
    }

    public function delete(){
        $post  = Post::find(2);

        $post->delete();

        dd('delete');
    }
}
