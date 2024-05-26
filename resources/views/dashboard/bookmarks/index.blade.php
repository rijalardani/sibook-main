@extends('layouts.main2')

@section('content')


<!-- Check kondisi -->

  {{-- All Posts --}}
  <div class="bg-white shadow-md">
    <div class="mx-auto max-w-2xl py-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      {{-- <h2 class="text-2xl font-bold tracking-tight text-teal-600">Ilmu Komputer</h2> --}}

      <ul  class="mt-6 mx-5 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        {{-- <template x-for="book in books"> --}}
        @foreach ($posts as $post)
        @if (isBookmarked)
          <li class="group relative border rounded-lg shadow-md">
            <a href="/blog/{{ $post->slug }}">
              <div class="h-40 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
                  <iframe class="embed-responsive-item w-full h-full" src="{{ Storage::url($post->dokumen) }}" loading="lazy"></iframe>
              </div>
              <div class="p-4">
                <h3 class="text-lg font-medium text-teal-700">{{ $post->title }}</h3>
                <p class="text-xs text-slate-400 mt-2">Posted by {{ $post->author->name }} in category {{ $post->category->slug }} | Last updated {{ $post->created_at->diffForHumans() }}</p>
                <p class="text-sm text-slate-500 text-justify mt-2">{{ $post->excerpt }}</p>
              </div>
            </a>
        </li>
        @endif
        @endforeach
        {{-- </template> --}}
        <!-- More products... -->
      </ul>
    </div>
  </div>
    
@else
<p class="text-center fs-4">Post Not Found</p>
@endif

    <hr class="w-full text-teal-600 my-8">
  </div>

  {{-- Pengecekan berakhir --}}
  {{ $posts->links() }}
@endsection