<nav class="bg-white border-b border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex">
                    <a href="{{Auth::user() ? route('subscriptions.index', Auth::user()->unique_id) : url('/')}}"
                       class="flex items-center">
                        <div class="mr-1.5">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="calendar text-gray-600 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <p class="text-xl text-gray-800">MySubsc</p>
                    </a>

                </div>
                @auth
                    <div class="hidden sm:-my-px sm:ml-6 sm:flex">
                        <a href="{{Auth::user() ? route('subscriptions.index', Auth::user()->unique_id) : url('/')}}"
                           class="inline-flex items-center px-1 pt-1 border-b-2 border-gray-500 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-gray-700 transition duration-150 ease-in-out">
                            Dashboard
                        </a>
                    </div>
                @endauth
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                @auth
                    <v-dropdown width="w-36" class="mr-4">
                        <template v-slot:activator>
                            <button id="user-menu" aria-label="User menu" aria-haspopup="true"
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img src="{{Auth::user()->avatar}}" alt="" class="h-8 w-8 rounded-full">
                            </button>
                        </template>
                        <template v-slot:content>
                            <a href="{{route('settings')}}"
                               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">設定</a>
                            <a href=""
                               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                               onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">ログアウト</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  class="hidden">
                                {{ csrf_field() }}
                            </form>
                        </template>
                    </v-dropdown>
                    <a href="{{route('me.add.subscription')}}"
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="-ml-1 mr-1 h-5 w-5">
                            <path fill-rule="evenodd"
                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        追加する
                    </a>
                @endauth
                @guest
                    <a href="{{route('login')}}"
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        はじめる
                    </a>
                @endguest
            </div>

            <div class="-mr-2 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!--
      Mobile menu, toggle classes based on menu state.

      Open: "block", closed: "hidden"
    -->
    <div class="hidden sm:hidden">
        <div class="pt-2 pb-3">
            <a href="#"
               class="block pl-3 pr-4 py-2 border-l-4 border-gray-500 text-base font-medium text-gray-700 bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-100 focus:border-gray-700 transition duration-150 ease-in-out">Dashboard</a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-6 text-gray-800">Tom Cook</div>
                    <div class="text-sm font-medium leading-5 text-gray-500">tom@example.com</div>
                </div>
            </div>
            <div class="mt-3" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <a href="#"
                   class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out"
                   role="menuitem">Your Profile</a>
                <a href="#"
                   class="mt-1 block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out"
                   role="menuitem">Settings</a>
                <a href="#"
                   class="mt-1 block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out"
                   role="menuitem">Sign out</a>
            </div>
        </div>
    </div>
</nav>
