@extends('layouts.main2')

@section('content')


   <!-- JUMBOTRON -->
   <section class="shadow-md mt-16 h-96 dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')]">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
      <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">SiBook</h1>
      <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">
        Temukan berbagai sumber materi kuliahmu mulai dari jurnal, buku, slide, dokumen, essay, dan file lainnya dalam satu tempat yang lengkap.
      </p>
    </div>
    <div class="bg-gradient-to-b from-sky-500 to-transparent w-full h-1/2 md:h-2/3 absolute top-0 left-0 z-0"></div>
  </section>

  <!-- Content -->

  <!-- Features -->
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-base font-semibold leading-7 text-teal-600">Find Your Edufile</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need to learn</p>
        <p class="mt-6 text-lg leading-8 text-gray-600">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
      </div>
      <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-l from-teal-500 to-cyan-700">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                </svg>
              </div>
              Article & Journal
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-l from-teal-500 to-cyan-700">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                  />
                </svg>
              </div>
              Slide Presentation
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-l from-teal-500 to-cyan-700">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"
                  />
                </svg>
              </div>
              Assignment file
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-l from-teal-500 to-cyan-700">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"
                  />
                </svg>
              </div>
              Many Reference
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <!-- Get started -->
  <div class="bg-white shadow-md mt-20 md:mt-40">
    <div class="mx-auto max-w-2xl py-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-teal-600 text-center">GET STARTED</h2>

      <!-- Disini bagian data yang ditampilin biar bisa diloop -->
      <div x-data="{ books: [
      {id:1, name: 'Belajar Pemrograman Data dengan Python', type: 'Ilmu Komputer',year:2021},
      {id:2, name: 'Pemrograman Berorientasi Objek Java', type: 'Ilmu Komputer',year:2021},
      {id:3, name: 'Algoritma Pemrograman C++', type: 'Ilmu Komputer',year:2021},
      {id:4, name: 'Dasar Pemrograman Javascript', type: 'Ilmu Komputer',year:2021},
      ]}">

      <!-- Disini bagian card yang bakal diloopfor datanya dimasukin dibagian x-text atau disesuaikan -->
      <ul  class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <template x-for="book in books">
          
          <li class="group relative">
            <div class="h-40 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-60">
              <img src="https://source.unsplash.com/500x300?computer" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full hover:scale-125 transition duration-1000" />
            </div>
            <div class="mt-4">
              <h3 class="text-sm font-medium text-teal-700">
                <a href="#" x-text="book.name">
                  <!-- <span aria-hidden="true" class="absolute inset-0"></span> -->
                  
                </a>
              </h3>
              <div class="flex justify-between">
                <p class="text-sm text-slate-400" x-text="book.type"></p>
                <p class="text-sm font-medium text-slate-400" x-text="book.year"></p>
              </div>
            </div>
          </li>
        </template>
      </div>

        <!-- More products... -->
      </ul>
    </div>
    
    <hr class="w-full text-teal-600 my-8">
  </div>

  <!-- ABOUT -->
  <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img
      src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
      alt=""
      class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"
    />
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
      <div
        class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-teal-400 to-cyan-600 opacity-20"
        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
      ></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
      <div
        class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-teal-400 to-cyan-600 opacity-20"
        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
      ></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Share your knowledge</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
      </div>
      <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
          <a href="#">Our Library<span aria-hidden="true">&rarr;</span></a>
          <a href="#">Collection<span aria-hidden="true">&rarr;</span></a>
          <a href="#">Contributor<span aria-hidden="true">&rarr;</span></a>
          <a href="#">Meet our Team <span aria-hidden="true">&rarr;</span></a>
        </div>
        <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
          <div class="flex flex-col-reverse">
            <dt class="text-base leading-7 text-gray-300">Offices worldwide</dt>
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">12</dd>
          </div>
          <div class="flex flex-col-reverse">
            <dt class="text-base leading-7 text-gray-300">Full-time colleagues</dt>
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">300+</dd>
          </div>
          <div class="flex flex-col-reverse">
            <dt class="text-base leading-7 text-gray-300">Hours per week</dt>
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">40</dd>
          </div>
          <div class="flex flex-col-reverse">
            <dt class="text-base leading-7 text-gray-300">Paid time off</dt>
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Unlimited</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <!-- OUR TEAM -->
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
      <div class="max-w-2xl">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our Team</h2>
        <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
      </div>
      <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-24 w-24 rounded-full object-cover" src="/image/nisa.jpg" alt="" />
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Sholihatun Khoirun'Nisa</h3>
              <p class="text-sm font-semibold leading-6 text-teal-600">UI Designer</p>
            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-24 w-24 rounded-full object-cover" src="/image/luthfi.jpg" alt="" />
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Luthfiyanto</h3>
              <p class="text-sm font-semibold leading-6 text-teal-600">Frontend Developer</p>
            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-24 w-24 rounded-full object-cover" src="/image/rijal.jpg" alt="" />
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Rijal Dwi Azhar Ardani</h3>
              <p class="text-sm font-semibold leading-6 text-teal-600">Backend Developer</p>
            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-24 w-24 rounded-full object-cover" src="image/khansa.png" alt="" />
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Khansa Tsabita</h3>
              <p class="text-sm font-semibold leading-6 text-teal-600">Database Engineer</p>
            </div>
          </div>
        </li>

        <!-- More people... -->
      </ul>
    </div>
  </div>



@endsection
