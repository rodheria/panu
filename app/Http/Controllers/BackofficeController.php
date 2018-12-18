<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class BackofficeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        return view('backoffice.index')->with('users', $users)->with('posts', $posts);
    }

    public function create_category()
    {
        return view('backoffice.create_category');
    }

    public function store_category(Request $request)
    {
        $category = new Category($request->all());
        $category->save();

        return redirect()->back();
    }

    public function user_delete($id){
        $user = User::findOrFail($id);
        $user->destroy();

        return Redirect::route()->back();
    }

    public function post_delete($id){
        $post = Post::findOrFail($id);
        $post->destroy();

        return Redirect::route()->back();
    }
}
