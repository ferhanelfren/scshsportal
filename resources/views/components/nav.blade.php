<nav x-data="{ open: false }" class="bg-gray-darkest fixed w-full z-20 top-0 left-0 border-gray px2 sm:px-4 py-2 5">
    <div class="container flex flex-wrap justify-between items-center mx-auto text-white">
        <a href="/">
            <span class="self-center text-xl fornt-semibold whitespace-nowrap ">
                Student System Management
            </span>
        </a>
            <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                    <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/>
                </svg>
            </button>
                <div x-show="open" class="w-full md:block md:w-auto" id="navbar-main">
                    <!--ma locate ni sa components lalo na balik balik ra ang codes-->
                    <x-menu />
                </div>
                <div class="hidden w-full md:block md:w-auto" id="navbar-main">
                    <!--ma locate ni sa components lalo na balik balik ra ang codes-->
                    <x-menu />
                </div>
    </div>
</nav>
