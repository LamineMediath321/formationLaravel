<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('articles', compact(('posts')));
    }

    public function show($id)
    {
        $post = Post::findOrfail($id) ?? 'pas de titre';

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('create_post');
    }

    public function store(Request $request)
    {
        /*Si on utilise pas les fillable
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        */

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        // return view('create_post');
    }

    public function delete($id)
    {
        Post::where('id', $id)
            ->delete();

        return Redirect::route('app_home');
    }
}
