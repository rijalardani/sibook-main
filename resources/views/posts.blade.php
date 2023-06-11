@extends('layouts.main')

@section('container')
  <h1 class="text-center mb-3">{{ $title }}</h1>

  <!-- form control -->
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/blog" method="get">
      <div class="input-group mb-3">
        @if (request('category'))
          <input type="hidden" class="form-control" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <input type="text" class="form-control" name="search" value="{{request('search')}}" placeholder="Search Post" aria-label="Form Search" aria-describedby="Search Form">
        <button type="button" type="submit"  class="btn btn-primary"  style="background-color:#22b69b" value="{{request('search')}}"> Search </button>
      </div>
      </form>
    </div>
  </div>
  <!-- end of form control -->


<!-- Check kondisi -->
@if ($posts->count())


<!--  -->
  <!-- First Post -->
<div class="col-md-12">
  <article class="card mb-3 ">
      {{-- <img src="https://source.unsplash.com/1200x600? {{$posts[0]->category->slug}}" loading="lazy" class="card-img-top" alt="image of {{ $posts[0]->title }}"> --}}
      <div class="card-body d-flex justify-content-center flex-column">
        <h3 class="card-title">{{ $posts[0]->title }}</h3>
        <p class="card-text"><small class="text-muted">Posted by {{$posts[0]->author->name}} in category {{ $posts[0]->category->slug }} | Last updated {{ $posts[0]->created_at->diffForHumans() }} </small></p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary w-25" style="background-color:#22b69b" type="button">Read More</a>
      </div>  
  </article>
</div>

@foreach ( $posts->skip(1) as $post )
  <article class="card mb-3 ">
      <div class="card-body d-flex justify-content-center flex-column">
      <!-- <img src="https://source.unsplash.com/1200x600?{{$post->category->slug}}" class="card-img-top" alt="image of {{$post->title}}" loading="lazy"> -->
        <h3 class="card-title">{{ $post->title }}</h3>
        <p class="card-text"><small class="text-muted">Posted by {{ $post->author->name  }}  in category {{ $post->category->slug}} | Last updated {{ $post->created_at->diffForHumans() }} </small></p>
        <p class="card-text">{{ $post->excerpt }}</p>
        <a href="/blog/{{ $post->slug }}" class="btn btn-primary w-25" type="button" style="background-color:#22b69b">Read More</a>
      </div>
  </article> 
@endforeach

@else
<p class="text-center fs-4">Post Not Found</p>
@endif
<!-- pengecekan berakhir -->


{{ $posts->links() }}
@endsection



