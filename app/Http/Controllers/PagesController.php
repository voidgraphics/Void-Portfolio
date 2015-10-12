<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Work;
use App\Post;
use Mail;
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

    public function contact(ContactRequest $request)
    {
        $input = $request->all();
        // dd( $input );
        // return view('mail')->with( 'input', $input );
        Mail::send('mail', ['input' => $input], function($message) use ($input){
            $message->from($input['email']);
            $message->sender($input['email']);
            $message->replyTo($input['email']);
            $message->subject($input['subject']);
            $message->to('contact@void.graphics');
        });
        return redirect( '/' );
    }

}
