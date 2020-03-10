<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Posts;
use Validator;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caption = $request->input('caption');

        if( $caption == null ) 
        {
            $val = Validator::make($request->all(), [
                'title' => 'min:3|required',
                'pic' => 'required',
            ]);
        } else {
            $val = Validator::make($request->all(), [
                'title' => 'min:3|required',
                'caption' => 'min:3|required',
                'pic' => 'required',
            ]);
        }

        if( $val->fails() ) 
        {
            return redirect()
                    ->route('posts.create')
                    ->withErrors($val);
        }

        $post = new Posts;
        $post->title = $request->input('title');
        if( $caption =! null ) { $post->caption = $request->input('caption'); }
        else { $post->caption = ''; }
        
        $img_path = $request->file('pic')
                            ->store('posts', 'public');
        $post->img_path = $img_path;

        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect()
                ->route('profile.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
