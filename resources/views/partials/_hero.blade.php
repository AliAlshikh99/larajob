  <section class="relative h-72 bg-blue-700 flex flex-col justify-center align-center text-center space-y-4 mb-4">

      <div class="absolute top-0 left-0 w-1/3 h-1/3 opacity-10 bg-no-repeat bg-center">
          <img src={{ asset('images/laravel-logo.png') }} alt="">
      </div>

      <div class="z-10">
          <h1 class="text-6xl text-white font-bold uppercase text-blue">
              Lara<span class="text-black">Job</span>
          </h1>
          <p class="text-2xl text-black-200 font-bold my-4">
              Find jobs in Web Development
          </p>

      </div>
      @include('partials._search-bar')
  </section>
