<?php
// 2023/07/08: php artisan make:controller PostsController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /*
    public function show($id) {
        $today = date('Y-m-d');
        return view('posts', ['id'=>$id, 'today'=>$today]);
    }
    */
    public function __invoke($id) {
        $today = date('Y-m-d');
        return view('posts', ['id'=>$id, 'today'=>$today]);
    }
}
