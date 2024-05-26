@extends('layouts.main2')

@section('content')

<section class="vh-30 mt-5" style="background-color: #fffffff;">
  <div class="container py-5 h-30">
    <h5 class="display-6 fw-bold text-center mb-3 pb-3" style="letter-spacing: 1px;">Sign in into your account</h5>
    <div class="row d-flex justify-content-center align-items-center h-30">
      <div class="col col-xl-8">
        <div class="card" style="border-radius: 0.5rem;">
          <div class="row g-0">
            
            <div class="col-md-6 col-lg-5 d-none d-md-flex flex-column align-items-center justify-content-center"" style="background-color:#22b69b;">
              <img src="/img/logo sibook white.png" alt="login form" class="my-auto" style="border-radius: 1rem 0 0 1rem; max-width:80%;" />
            </div> 
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="/login" method="POST">
                  @csrf
                 

                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control form-control-lg
                    @error('email')
                      is-invalid
                    @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" autofocus>
                    <label class="form-label" for="email">Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Password">
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="w-100 btn btn-lg btn-primary mt-4" style="background-color:#22b69b" type="submit">Sign up</button>

                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/register" style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
