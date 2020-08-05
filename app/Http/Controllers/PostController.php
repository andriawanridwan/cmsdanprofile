<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Kategori;
use Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('post.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->author = Auth::user()->name;
        $post->title = $request->judul;
        $post->slug = str_slug($request->judul);
        $post->content = $request->konten;
        $post->kategori_id = $request->kategori;
        if($request->hasfile('foto')){
            $file = $request->foto;
            $filename = time(). ".". $file->getClientOriginalExtension();
            $destiny = public_path('/image');
            $file->move($destiny,$filename);
            $post->foto = $filename;
        }
        $post->save();
        return redirect(route('post.index'));

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
        $post = Post::findOrFail($id);
        $kategori = Kategori::all();
        return view('post.edit',compact('post','kategori'));
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
        $post = Post::findOrFail($id);
        $post->author = Auth::user()->name;
        $post->title = $request->judul;
        $post->slug = str_slug($request->judul);
        $post->content = $request->konten;
        $post->kategori_id = $request->kategori;
        $latestfoto = $post->foto;

        if($request->hasfile('foto')){
            $file = $request->foto;
            $filename = time(). ".". $file->getClientOriginalExtension();
            $destiny = public_path('/image');
            $file->move($destiny,$filename);
            $fotolama = public_path('image/'.$latestfoto);
            @unlink($fotolama);
            $post->foto = $filename;
        }
        $post->save();
        return redirect(route('post.index'));
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
