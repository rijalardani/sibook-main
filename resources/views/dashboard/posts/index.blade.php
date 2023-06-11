@extends('dashboard.layouts.main')

@section('container')

<a href="/dashboard/posts/create" class="btn btn-primary my-3" role="button" aria-label="create post" title="create a post">Create Post</a>
<h2>All My Post</h2>
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
  <strong>{{ session('success') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="table-responsive col-lg-8">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No. </th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post )
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-info">
            <span data-feather="eye"></span>
          </a>
          <a href="/dashboard/posts/{{$post->slug}}/edit" class="badge bg-warning">
            <span data-feather="edit"></span>
          </a>
          <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="badge bg-danger border-0"
            onclick="return confirm('Confirm, do you want to delete this post?')">
              <span data-feather="trash-2"></span>
            </button>
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
