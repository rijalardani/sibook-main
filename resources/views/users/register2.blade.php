<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="sm:bg-gradient-to-r from-teal-600 to-cyan-300">
    <div class="container max-w-lg border border-slate-200 rounded-xl m-auto mt-5 sm:shadow-md font-sans p-5 bg-white">
      <img src="../image/Sibook.png" alt="Logo Sibook" class="mx-auto w-10" />
      <div class="text-center mb-5">
        <h3 class="font-bold text-2xl text-slate-700">Register</h3>
        <p class="text-slate-500">Silakan isi data berikut untuk masuk Sibook</p>
      </div>

      <form action="/register2" method="POST">
        @csrf
        <label for="email">
          <span class="block font-semibold mb-1 text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">email</span>
          <input
            type="email"
            id="email"
            placeholder="name@example.com"
            value="{{ old('email') }}"
            class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer 
            @error('email')
            is-invalid
          @enderror"
          />
        </label>
        @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror

        <label for="name">
          <span class="block font-semibold mb-1 text-slate-700">name</span>
          <input type="text" name="name" id="name" placeholder="Masukkan name" value="{{ old('name') }}" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 @error('name')
          is-invalid
        @enderror" />
        </label>
        @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror

        <label for="username">
          <span class="block font-semibold mb-1 text-slate-700">username</span>
          <input type="text" name="username" id="username" placeholder="Masukkan username" value="{{ old('username') }}" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 @error('username')
          is-invalid
        @enderror" />
        </label>
        @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror

        <label for="password">
          <span class="block font-semibold mb-1 text-slate-700">password</span>
          <input type="password" name="password" id="password" placeholder="Password" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 @error('password')
          is-invalid
        @enderror" />
        </label>
        @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror

        <label for="confirm password">
          <span class="block font-semibold mb-1 text-slate-700">confirm password</span>
          <input
            type="password"
            name="confirm_password"
            id="confirm_password"
            placeholder="Confirm Password"
            class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 @error('password')
            is-invalid
          @enderror"
          />
        </label>
        <button class="w-full shadow-sm bg-teal-500 text-white py-2 my-7 rounded block hover:bg-white hover:text-teal-500 hover:border hover:border-teal-500 hover:font-semibold" type="submit">Sign up</button>
      </form>
      <p class="text-sm text-slate-500 text-center">Sudah punya akun? <a href="/login" class="text-slate-700 hover:text-teal-500">Masuk</a></p>
    </div>
  </body>
</html>
