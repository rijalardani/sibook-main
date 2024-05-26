@extends('layouts.main2')

@section('content')

<div class="container mt-24">
  <div class="row justify-content-center mt-5">
    <section class="col-md-8 mb-5">
      <h2 class="text-lg font-medium text-teal-700">{{ $post['title'] }}</h2>
      <p class="card-text mb-2"><small class="text-muted">Posted by {{$post->author->name}} in category {{ $post->category->slug }} | Last updated {{ $post->created_at->diffForHumans() }} </small></p>
      <p class="mb-3"> {!! $post->body !!}</p>
      {{-- @if (auth()->check()) 
        @if ($isBookmarked) 
          <form action="/bookmarks/{bookmark}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary w-25 align-self-center mt-2 mb-2" type="submit">Unbookmark</button>
          </form>
        @else
          <form action="/dashboard/bookmarks" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <button class="btn btn-primary w-25 align-self-center mt-2 mb-2" type="submit">Bookmark</button>
          </form>
        @endif
      @endif --}}
      <div class="embed-responsive embed-responsive-16by9 row judtify-content-center">
        @if ($post->dokumen)
          <iframe class="embed-responsive-item mt-3 mb-3" height="100px" src="{{  Storage::url ($post->dokumen) }}" loading="lazy" alt="{{ $post->dokumen }}"  allowfullscreen></iframe>
        @else
          <p>File tidak ditemukan.</p> 
        @endif
      </div>
      {{-- <a href="/blog" class="btn btn-primary w-25 align-self-center mt-2 mb-2" type="button">back to blogs </a> --}}
    </section>
  </div>
</div>
@endsection

<style>
  
  .text-lg .font-medium .text-teal-700 {
       z-index: 1000;
  }
              
</style>