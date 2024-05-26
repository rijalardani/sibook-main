@extends('layouts.main2')

@section('content')

<main class=" w-100 m-auto ">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-4 col-lg-6">
      <h1 class="h3 mb-3 d-fex justify-content-center fw-bold
      ">Register An Account</h1>
      <form action="/register" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" class="form-control @error('username')
            is-invalid
          @enderror" id="username" name="username"
          placeholder="name@example.com" value="{{ old('username') }}" autofocus>
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating mt-2">
          <input type="text" class="form-control @error('name')
            is-invalid
          @enderror " id="name" name="name" placeholder="name@example.com" value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating mt-2">
          <input type="email" class="form-control @error('email')
            is-invalid
          @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating mt-2">
          <input type="password" class="form-control @error('password')
            is-invalid
          @enderror" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-4" style="background-color:#22b69b" type="submit">Sign up</button>

      </form>
      <p>Sudah punya akun? <a href="/login">Masuk</a> </p>
    </div>
  </div>
 
</main>

@endsection
{{-- <div style="  position: absolute;bottom: 0;width: 80%;">
                @include('partials.footer')
            </div> --}}
<style>
  
.h3.mb-3.d-fex.justify-content-center.fw-bold {
              z-index: 999;
}
            
</style>