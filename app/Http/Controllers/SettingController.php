<?php

namespace App\Http\Controllers;


class SettingController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function deleteAccount()
    {

    }

    public function store(Request $request)
    {
        $post = Post::find($request->id);
        $login_user_id = Auth::user()->id;
        $liked = $post->likes()->where('user_id', $login_user_id)->value('liked');
        $like = $post->likes()->updateOrCreate(
            ['user_id' => $login_user_id, 'post_id' => $post->id],
            ['liked' => $liked ? false : true]
        );
        return response()->json([
            'like' => $like->liked
        ]);
    }
}
