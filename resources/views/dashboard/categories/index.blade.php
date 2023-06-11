@extends('dashboard.layouts.main')

@section('container')

<a href="/dashboard/categories/create" class="btn btn-primary my-3" role="button" aria-label="create post" title="create a post">Create New Category</a>
<h2>Categories</h2>
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
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $cat )
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $cat->name }}</td>
        <td>
          <a href="/dashboard/categories/{{$cat->slug}}/edit" class="badge bg-warning">
            <span data-feather="edit"></span>
          </a>
          <form action="/dashboard/categories/{{$cat->slug}}" method="post" class="d-inline">
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
