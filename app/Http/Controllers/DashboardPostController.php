<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard.posts.index', [
        'posts' => Post::where('user_id', auth()->user()->id)->get()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // return 'hello';
      return view('dashboard.posts.create', [
        'categories' => Category::all()
      ]);
        //
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'title' => 'required|max:255',
        'slug' => 'required|unique:posts',
        'category_id' => 'required',
        'dokumen' => 'required|mimes:pdf,ppt,pptx,doc,docx,xls,xlsx|max:20480',
        'body' => 'required'
      ]);

      if($request->file('dokumen')){
        $path = $validatedData['dokumen'] = $request->file('dokumen')->store('public');
        $validatedData['dokumen'] = $path;
      }
      $validatedData['user_id'] = auth()->user()->id;
      $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

      Post::create($validatedData);
      return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    public function show(Post $post)
    {
  
      return view('dashboard.posts.show', [
        'post' => $post
      ]);
    }

    public function edit(Post $post)
    {
      return view('dashboard.posts.edit', [
        'post' => $post,
        'categories' => Category::all()
      ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      // buat dahulu variablenya
      $rules =[
        'title' => 'required|max:255',
        'category_id' => 'required',
        'dokumen' => 'required|mimes:pdf,ppt,pptx,doc,docx,xls,xlsx|max:20480',
        'body' => 'required',
      ];

      // jika apa yang kita input 'slug' tidak sama dengan 'slug' milik post
      if ($request->slug != $post->slug){
        $rules['slug'] ='required|unique:posts';
      }

      // masukan rules-nya ke validate
      $validatedData = $request->validate($rules);

      if ($request->file('dokumen')) {
        if ($post->dokumen) {
          Storage::delete($post->dokumen);
        }

        $path = $validatedData['dokumen'] = $request->file('dokumen')->store('public');
        $validatedData['dokumen'] = $path;
      }

      // tambahkan 'user_id' dan excerpt
      $validatedData['user_id'] = auth()->user()->id;
      $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

      Post::where('id', $post->id)
        ->update($validatedData);

      return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      if($post->dokumen) {
        Storage::delete($post->dokumen);
      }

      Post::destroy($post->id);
      return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
      $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
      return response()->json(['slug' => $slug]);
    }
}
