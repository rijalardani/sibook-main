<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
  public function index()
  {
    $title = '';
    if (request('category')) {
      $category = Category::firstWhere('slug', request('category'));
      $title = ' in ' . $category->name;
    }

    if (request('author')) {
      $user = User::firstWhere('username', request('author'));
      $title = ' in ' . $user->name;
    }

    return view('posts2', [
      'title' => 'All posts' . $title,
      'posts' => Post::with(['author', 'category'])->latest()->filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString(),
      'categories' => Category::all(),
      'active' => 'post'
    ]);
  }

  public function show(Post $post)
  {
   
    return view('post', [
      'title' => 'single post',
      'active' => 'post',
      'post' => $post,
    ]);
  }

  public function categories(Category $category)
  {
    return view('categories', [
      'title' => "List Posts Category in $category->name",
      'categories' => Category::all(),
      'active' => 'categories'
    ]);
  }

  public function category(Category $category)
  {
    return view('posts', [
      'title' => 'List Post by category ' . $category->name,
      'posts' => $category->post->load('author', 'category'),
      'active' => 'post'
    ]);
  }

  public function author(User $author)
  {
    return view('posts', [
      'title' => 'post by author ' . $author->name,
      'posts' => $author->post->load('author', 'category'),
      'active' => 'post'
    ]);
  }
}
