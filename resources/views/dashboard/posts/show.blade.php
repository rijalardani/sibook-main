@extends('dashboard.layouts.main')


@section('container')
<div class="container">
  <div class="row ">
    <section class="col-md-8">
      <h2>{{ $post['title'] }}</h2>
      <a href="/dashboard/posts" class="btn btn-success m-2">
        <span data-feather="arrow-left"></span> Back To Posts
      </a>
      <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning m-2">
        <span data-feather="edit"></span> Edit Post
      </a>
      <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger m-2" onclick="return confirm('Confirm, do you want to delete this post?')">
          <span data-feather="trash-2"></span> Delete Post
        </button>
      </form>
      @if ($post->dokumen)

        {{ Storage::url($post->dokumen) }}
        <iframe class="embed-responsive-item mb-3 mt-3" height="1000px" src="{{ Storage::url ($post->dokumen) }}" loading="lazy" alt="{{ $post->dokumen }}"></iframe>
      @endif

      <p>{!! $post->body !!}</p>
      <a href="/dashboard/posts" class="btn btn-primary w-25 align-self-center" type="button">back to all post</a>
    </section>
  </div>
</div>
@endsection
