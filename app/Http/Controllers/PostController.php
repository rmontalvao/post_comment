<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;
use App\Like;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {

    /**
     * Send back all posts as JSON
     *
     * @return Response
     */
    public function index() {

        $results = Post::with(array('user', 'comments.user', 'likes'=>function($q){
            $q->countLikes();
        },'dislikes'=>function($q){
            $q->countDislikes();
        }));
        $posts = $results->get();
       
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

    public function like($postId) {

        $existing_like = Like::wherePostId($postId)->whereUserId(Auth::id())->first();

        if (is_null($existing_like)) {
            Like::create([
                'post_id' => $postId,
                'user_id' => Auth::id(),
                'liked' => 1,
                'disliked' => 0
            ]);
        }
        return response()->json(array('success' => true), 200);
    }

    public function dislike($postId) {

        $existing_like = Like::wherePostId($postId)->whereUserId(Auth::id())->first();

        if (is_null($existing_like)) {
            Like::create([
                'post_id' => $postId,
                'user_id' => Auth::id(),
                'liked' => 0,
                'disliked' => 1
            ]);
        }
        return response()->json(array('success' => true), 200);
    }

}
