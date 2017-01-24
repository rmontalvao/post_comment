<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Comment;

class CommentController extends Controller {

    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index() {
        return response()->json(Comment::get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        Comment::create(array(
            'user_id' => Input::get('user_id'),
            'post_id' => Input::get('post_id'),
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
        return response()->json(Comment::find($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Comment::destroy($id);

        return response()->json(array('success' => true), 200);
    }

}
