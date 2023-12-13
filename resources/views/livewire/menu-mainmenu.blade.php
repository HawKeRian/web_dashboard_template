<div class="container">
  <div class="content p-0 m-0">
    @include('nav_bar')
    
    {{-- Content --}}
    <div class="flex-auto py-4 h-screen">
      <div class="flex justify-between items-center">
          <h3 class="text-3xl font-extrabold dark:text-white/75 uppercase">Significant Card</h3>

          @include('theme_menu')
          {{-- <div class="inline-flex items-center space-x-2"> 
              <a class="bg-gray-900 text-white/50 p-2 rounded-md hover:text-white smooth-hover" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
              </a>
              <a class="bg-gray-900 text-white/50 p-2 rounded-md hover:text-white smooth-hover" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
              </a>
          </div> --}}
      </div>

      <div class="significant-menu">
        @foreach ($signifi_data as $item)
          <a href="#" class="signifi-item relative group dark:border-gray-900 dark:border-gray-700 border-2 border-gray-300
                              hover:smooth-hover hover:text-white/50 hover:bg-gray-700 hover:border-gray-900/80">
            <img class="w-20 h-20 object-cover object-center rounded-full" src="{{$item['thumbnail']}}" alt="{{$item["title"]}}" />
            <h5 class="dark:text-white text-xl font-bold capitalize">{{$item["title"]}}</h5>
            <p class="dark:text-white/50">Brand: {{$item["brand"]}}</p>
            <p class="dark:text-white/50">Price: ${{$item["price"]}}</p>
            <p class="dark:text-white/50 text-sm text-light text-center">{{$item["description"]}}</p>

            <p class="absolute top-2 dark:text-white/20 inline-flex items-center text-xs">
              Discount: {{$item["discountPercentage"]}}%
              @if ($item["discountPercentage"] > 10)
                <span class="ml-2 w-2 h-2 block bg-green-500 rounded group-hover:animate-pulse"></span>
              @else
                <span class="ml-2 w-2 h-2 block bg-red-500 rounded group-hover:animate-pulse"></span>
              @endif
            </p>
          </a>
        @endforeach








          {{-- <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
            <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1171&q=80" alt="art" />
            <h4 class="text-white text-2xl font-bold capitalize text-center">Art</h4>
            <p class="text-white/50">132 members</p>
            <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">4 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
          </div>
          <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
            <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1560419015-7c427e8ae5ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="gaming" />
            <h4 class="text-white text-2xl font-bold capitalize text-center">Gaming</h4>
            <p class="text-white/50">207 members</p>
            <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">0 Online <span class="ml-2 w-2 h-2 block bg-red-400 rounded-full group-hover:animate-pulse"></span></p>
          </div>
          <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
            <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1159&q=80" alt="cinema" />
            <h4 class="text-white text-2xl font-bold capitalize text-center">cinema</h4>
            <p class="text-white/50">105 members</p>
            <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">12 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
          </div>
          <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
            <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1484704849700-f032a568e944?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="song" />
            <h4 class="text-white text-2xl font-bold capitalize text-center">Song</h4>
            <p class="text-white/50">67 members</p>
            <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">3 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
          </div>
          <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
            <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="code" />
            <h4 class="text-white text-2xl font-bold capitalize text-center">Code</h4>
            <p class="text-white/50">83 members</p>
            <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">43 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
          </div>
          <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
            <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1533147670608-2a2f9775d3a4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="dancing" />
            <h4 class="text-white text-2xl font-bold capitalize text-center">Dancing</h4>
            <p class="text-white/50">108 members</p>
            <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">86 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
          </div> --}}
        </div>
      </div>
    </div>
</div>