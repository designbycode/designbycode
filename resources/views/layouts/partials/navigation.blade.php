<nav class="fixed top-0 inset-x-0 z-50 bg-primary-200 dark:bg-gray-950/60 backdrop-blur-lg py-2 flex items-center border-b border-primary-500/50 shadow-xl shadow-primary-500/10">
    <headless-navigation class="wrapper">
        <div class="flex justify-between items-center">
            <a id="logo" class="text-2xl md:text-3xl grad font-black nav-button nav-button-active inline-flex " href="{{ route('home') }}">{{ config('app.name') }}</a>
            <div class="flex items-center">
                <div class="lg:flex space-x-2 items-center hidden mr-4">
                    @foreach($links as $link)
                        @if($link->children !== null)
                            <headless-dropdown class="relative" popper placement="bottom-start bottom-end" offset="0 10">
                                <button
                                    type="button"
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    id="menu-button-{{ $loop->index }}"
                                    @class(["pl-4 pr-2 py-2 dark:text-shadow-sm nav-button flex items-center", 'nav-button-active' => request()->is($link->active)]) >
                                    <span class="relative z-10">{{ $link->name }} </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"/>
                                    </svg>
                                </button>
                                <div hidden class="absolute bg-gray-50 dark:bg-gray-900 rounded-lg w-[260px] border-2 border-primary-500 shadow-xl shadow-primary-500/10"
                                     aria-labelledby="menu-button-{{ $loop->index }}"
                                     aria-orientation="vertical"
                                     role="none"
                                >
                                    @foreach($link->children as $child)
                                        <a class="text-gray-700 dark:text-gray-200 px-4 py-2 text-sm hover:bg-primary-100 dark:hover:bg-gray-800 space-x-2 font-semibold rounded-lg focus:bg-gray-100 focus:outline-none flex items-center"
                                           href="{{ route($child->route) }}" id="menu-item-0" role="menuitem" tabindex="-1"
                                        >
                                            <span class="border-2 rounded-lg text-primary-500 items-center justify-center border-primary-500 w-12 h-12 flex">
                                                {!! $child->icon !!}
                                            </span>
                                            <span class="flex flex-col">
                                                <strong class="m-0 text-md">{{ $child->name }}</strong>
                                                <small class="-mt-1">{{ $child->description }}</small>
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            </headless-dropdown>
                        @else
                            <a @class(["px-4 py-2 dark:text-shadow-sm nav-button",
                            'nav-button-active' => request()->is($link->active)
                            ])
                               href="{{ route($link->route) }}">
                                <span class="relative z-10">{{ $link->name }} </span>
                            </a>
                        @endif

                    @endforeach
                </div>
                <x-theme-switcher/>
                <button
                    aria-controls="mobile_close"
                    aria-expanded="false"
                    @class([
                    'lg:hidden inline-flex justify-center items-center h-7 md:h-9 w-7 md:w-9 rounded-md border border-gray-300 dark:border-gray-800 shadow-sm bg-white dark:bg-gray-900 text-sm font-medium text-primary-500 ml-2 hover:bg-gray-100
                    dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-primary-500'])
                    type="button">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-5 w-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path data-state class="inline-flex data-state-open:hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path data-state class="hidden data-state-open:inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        <div hidden id="mobile_close" class="w-full mt-4 lg:hidden space-y-4 font-semibold leading-6 items-center">
            @foreach($links as $link)
                @if(!$link->children)
                    <a @class(['px-4 py-2 rounded font-bold w-full block hover:bg-primary-500',
                    'bg-primary-500' => Route::currentRouteName() === $link->route
                    ]) href="{{ route($link->route) }}">{{ $link->name }} </a>
                @else
                    <headless-dropdown class="block relative">
                        <button
                            aria-expanded="false" aria-haspopup="true" type="button" id="dropdown-with-sub-{{ $loop->index }}"
                            @class(['px-4 py-2 rounded font-bold w-full flex justify-between hover:bg-primary-500',
                        'bg-primary-500' => Route::currentRouteName() === request()->is($link->active)
                    ])>
                            <span>{{ $link->name }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"/>
                            </svg>
                        </button>
                        <div class="ml-2 border-l-2 border-primary-500" aria-labelledby="dropdown-with-sub-{{ $loop->index }}">
                            @foreach($link->children as $child)
                                <a href="{{ route($child->route) }}" @class(['px-4 py-2 rounded font-bold w-full flex justify-between hover:text-primary-500',
                                    'text-primary-500' => Route::currentRouteName() === request()->is($link->active)
                            ])  role="menuitem">{{ $child->name }}</a>
                            @endforeach
                        </div>
                    </headless-dropdown>
                @endif
            @endforeach
        </div>
    </headless-navigation>
</nav>
