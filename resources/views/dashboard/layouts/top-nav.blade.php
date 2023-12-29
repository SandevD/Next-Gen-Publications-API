<div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
    <button type="button"
        class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden"
        @click="open = true">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" x-description="Heroicon name: outline/menu-alt-2" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
        </svg>
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex">
            <form class="w-full flex md:ml-0" action="#" method="GET">
                <label for="search-field" class="sr-only">Search</label>
                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <svg class="h-5 w-5" x-description="Heroicon name: solid/search"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input id="search-field"
                        class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm"
                        placeholder="Search" type="search" name="search">
                </div>
            </form>
        </div>
        <div class="ml-4 flex items-center md:ml-6">


            <!-- Profile dropdown -->
            <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()"
                @click.away="onClickAway($event)" class="ml-3 relative">
                <div>
                    <button type="button"
                        class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        id="user-menu-button" x-ref="button" @click="onButtonClick()"
                        @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()"
                        aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()"
                        @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                        <span class="sr-only">Open user menu</span>
                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                    </button>
                </div>

                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                    x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state."
                    x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical"
                    aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()"
                    @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false"
                    @keydown.enter.prevent="open = false; focusButton()"
                    @keyup.space.prevent="open = false; focusButton()">

                    <a href="#" class="block px-4 py-2 text-sm bg-blue-500 rounded-md text-white"
                        x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }"
                        role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0"
                        @mouseleave="activeIndex = -1" @click="open = false; focusButton()">{{ Auth::user()->email }}
                    </a>

                    {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                        :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1"
                        id="user-menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1"
                        @click="open = false; focusButton()">Settings</a> --}}

                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                        class="block px-4 py-2 text-sm text-gray-700" :class="{ 'bg-gray-100': activeIndex === 2 }"
                        role="menuitem" tabindex="-1" id="user-menu-item-2" @mouseenter="activeIndex = 2"
                        @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Sign
                        out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
