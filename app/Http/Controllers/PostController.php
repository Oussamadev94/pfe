<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
    Country,
    Category,
    Image,
    Post
}; 

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function create()
    {
        $categories=Category::pluck('category_name','id');
        $countries=Country::pluck('name','id');
        return view('front.addPost',compact('categories'),compact('countries'));

    }

    public function store(Request $req)
    {
        $post=Post::create($req->all() + ['user_id' => $req->user()->id]);
        foreach($req->images as $img)
        {
            $filename=$img->store('public/img');
            $image=new Image();
            $image->image = basename($filename);
            $post->images()->save($image);
        }
        return back()->with('success','Annonce Ajouter');
    }

}
