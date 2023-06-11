@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center">
    <section class="col-md-8 mb-5">
      <h2>{{ $post['title'] }}</h2>
      <p class="card-text"><small class="text-muted">Posted by {{$post->author->name}} in category {{ $post->category->slug }} | Last updated {{ $post->created_at->diffForHumans() }} </small></p>
      <p> {!! $post->body !!}</p>
      @if (auth()->check()) 
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
      @endif
      <div class="embed-responsive embed-responsive-16by9 row judtify-content-center">
        @if ($post->dokumen)
          <iframe class="embed-responsive-item mb-3" height="600px" src="https://arxiv.org/ftp/arxiv/papers/1205/1205.1117.pdf" loading="lazy" alt="{{ $post->dokumen }}"  allowfullscreen></iframe>
        @else
          <p>File tidak ditemukan.</p> 
        @endif
      </div>
      <a href="/blog" class="btn btn-primary w-25 align-self-center mt-2 mb-2" type="button">back to blogs </a>
    </section>
  </div>
</div>

{{-- {{ asset('storage/' . $post->dokumen) }} --}}
@endsection

