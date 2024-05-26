@extends('layouts.main2')

@section('content')

{{-- Jumbotron --}}
<section class="shadow-md mt-16 dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')]">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
      <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">SiBook</h1>
      <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">
        Temukan berbagai sumber materi kuliahmu mulai dari jurnal, buku, slide, dokumen, essay, dan file lainnya dalam satu tempat yang lengkap.
      </p>
      <form class="w-full max-w-md mx-auto">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email sign-up</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            
          </div>
          <input
            type="text"
            id="default-search"
            name="search"
            class="block w-full p-3 pl-24 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500"
            placeholder="Search material, e-book, journal..."
            value="{{request('search')}}"
          />
          <button type="submit" value="{{request('search')}}" class="text-white absolute right-2.5 bottom-2 bg-teal-600 hover:bg-white hover:text-teal-500 hover:border hover:border-teal-500 font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
      </form>
    </div>
    <div class="bg-gradient-to-b from-sky-500 to-transparent w-full h-1/2 md:h-2/3 absolute top-0 left-0 z-0"></div>
  </section>

<!-- Check kondisi -->


  {{-- Category Post --}}
  <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
    <a href="/blog" class="text-white bg-cyan-950 hover:border hover:border-teal-500 hover:bg-white hover:text-teal-700 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3"
    > All Categories
  </a>
    @foreach ($categories as $cat)
    <a href="/blog?category={{ $cat->slug}}"
      class="text-white bg-cyan-950 hover:border hover:border-teal-500 hover:bg-white hover:text-teal-700 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3"
    >
    {{$cat->slug}}
    </a>
  @endforeach
</div>
@if ($posts->count())
  {{-- All Posts --}}
  <div class="bg-white shadow-md">
    <div class="mx-auto max-w-2xl py-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      {{-- <h2 class="text-2xl font-bold tracking-tight text-teal-600">Ilmu Komputer</h2> --}}

      <ul  class="mt-6 mx-5 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        {{-- <template x-for="book in books"> --}}
        @foreach ($posts as $post)
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