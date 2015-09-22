<?php

namespace App\Http\Controllers;

use Request;
use App\Work;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorksController extends Controller
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
        return view('works.create');
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
            'slug' => 'required',
            'title' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'img' => 'required'
        ]);
        $thumbnail = $request->file('thumb');
        $img = $request->file('img');
        $now = \Carbon\Carbon::now();
        $name = $now->minute . $now->day . $now->month . $now->year . "-" . $img->getClientOriginalName();
        $path = public_path('img/uploads');
        $img->move($path, $name);
        $thumbnail->move($path, 'thumb-' . $name);
        $data['thumbnail_path'] = '/img/uploads/thumb-' . $name;
        $data['img_path'] = '/img/uploads/' . $name;

        Work::create($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $work = Work::where('slug', $slug)->firstOrFail();
        return view('works.show')->with('work', $work);
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
