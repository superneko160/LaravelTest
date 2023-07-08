<?php
// 2023/07/08: php artisan make:controller PostsController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($id) {
        $post = Post::find($id);
        $today = date('Y-m-d H:i:s');
        return view('posts', ['post'=>$post, 'today'=>$today]);
    }
    /*
    public function __invoke($id) {
        $today = date('Y-m-d');
        return view('posts', ['id'=>$id, 'today'=>$today]);
    }
    */
}
