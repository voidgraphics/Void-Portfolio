<?php

namespace App\Http\Controllers;

use Request;
use Redirect;
use App\Work;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(\Illuminate\Http\Request $request)
    {
        $data = Request::all();
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);
        $header_img = $request->file('header-img');
        $now = \Carbon\Carbon::now();
        $name = $now->minute . $now->day . $now->month . $now->year . "-" . $header_img->getClientOriginalName();
        $data['header_path'] = '/img/uploads/posts/header-' . $name;
        $path = public_path('img/uploads/posts');
        $header_img->move($path, 'header-' . $name);
        Post::create($data);

        return Redirect::to('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $moreWorks = Work::orderByRaw('RAND()')->take(3)->get();
        $morePosts = Post::where('slug', '!=', $post->slug)->orderByRaw('RAND()')->take(3)->get();
        return view('posts.show', compact("post", "moreWorks", "morePosts"));
    }

    public function getMore($excludes)
    {
        $excludes = explode("SEPARATOR", $excludes);
        $whereString = "";
        foreach( $excludes as $exclude ){
            $whereString = $whereString . "slug != ? AND ";
        }
        $whereString = substr($whereString, 0, -5);
        $posts = Post::whereRaw($whereString, $excludes)->take(3)->orderBy("created_at", "desc")->get();
        return view("posts.ajax")->with("posts", $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
