<nav class="bg-white border-b border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex">
                    <a href="{{Auth::user() ? route('subscriptions.index', Auth::user()->slug) : url('/')}}"
                       class="flex items-center">
                        <div class="mr-1.5">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="calendar text-gray-600 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <p class="text-xl text-gray-800">MySubsc<span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-indigo-100 text-indigo-800">Beta</span></p>
                    </a>
                </div>
            </div>
            <div class="sm:ml-6 sm:flex sm:items-center">
                @auth
                    <v-dropdown width="w-36" class="sm:mr-4">
                        <template v-slot:activator>
                            <button id="user-menu" aria-label="User menu" aria-haspopup="true"
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img src="{{Auth::user()->avatar}}" alt="" class="h-8 w-8 rounded-full">
                            </button>
                        </template>
                        <template v-slot:content>
                            <a href="{{route('me.add.subscription')}}"
                               class="block sm:hidden px-4 py-3 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">追加する</a>
                            <a href="{{route('subscriptions.index', Auth::user()->slug)}}"
                               class="block px-4 py-3 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">{{Auth::user()->name}}</a>

                            <a href="{{route('settings')}}"
                               class="block px-4 py-3 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">設定</a>
                            <div class="border-t border-gray-100">
                                <a href=""
                                   class="block px-4 py-3 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                   onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">ログアウト</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </template>
                    </v-dropdown>
                    <a href="{{route('me.add.subscription')}}"
                       class="hidden sm:inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
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
        </div>
    </div>
</nav>
