<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;

class PostsController extends Controller {

    /**
     * Send back all posts as JSON
     *
     * @return Response
     */
    public function index() {
        $posts = Post::with('user','comments.user')->get();
        return response()->json($posts, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        Post::create(array(
            'user_id' => Input::get('user_id'),
            'text' => Input::get('text')
        ));
        return response()->json(array('success' => true), 200);
    }

    /**
     * Return the specified resource using JSON
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return response()->json(Post::with('user')->where('user_id', $id)->first());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Post::destroy($id);
        return response()->json(array('success' => true), 200);
    }

}
