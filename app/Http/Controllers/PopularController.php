<?php

namespace App\Http\Controllers;

use App\Models\Popular;
use Illuminate\Http\Request;



class PopularController extends Controller
{
    // like the post
    public function like($id, $user_id){
        $post = Popular::where('post_id', $id)->where('user_id', $user_id);
        if($post != null){
            // decrease
            dd("found");
            Popular::where('post_id', $id)->where('user_id', $user_id)->delete();
            return redirect()->back();
        }
        if($post == null){
            dd("not found");
            $data = [
                'user_id' => $user_id,
                'post_id' => $id,
                'like' => 1,
                'dislike' => 0,
            ];
            Popular::create($data);
            return redirect()->back();
        }
    }
}
