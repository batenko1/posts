<?php

namespace Batenko1\Posts\Controllers;

use Batenko1\Posts\Models\Post;

class PostController extends Controller
{
    public function index() {

        $posts = Post::query()->get();

        return view('posts::index', compact('posts'));
    }
}
