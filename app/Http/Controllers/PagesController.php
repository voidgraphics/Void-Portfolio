<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $works = Work::orderBy('created_at', 'DESC')->take(3)->get();
        $posts = Post::orderBy('created_at', 'DESC')->take(3)->get();
        return view('index', compact(['works', 'posts']));
    }

}
