<header x-data="{ open: false }">
    <div class="navbar z-10 px-8 py-4 flex items-center justify-between bg-white text-gkBlack shadow-md">
        <button type="button" class="md:hidden text-3xl" x-on:click="open = !open">☰</button>
        <div class="flex-1 flex justify-center md:justify-start">
            <a class="normal-case" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Golden Keys Real Estate Logo" class="h-16">
            </a>
        </div>
        <div class="hidden md:flex">
            <ul class="flex space-x-6 text-gray-700 font-semibold">
                {{-- <li><a class="hover:text-gold" href="/ilanlar">İlanlar</a></li> --}}
                <li><a class="hover:text-gold" href="/danismanlar">Danışmanlarımız</a></li>
                <li><a class="hover:text-gold" href="/subeler">Şubelerimiz</a></li>
                <li><a class="hover:text-gold" href="/hakkimizda">Hakkımızda</a></li>
                <li><a class="hover:text-gold" href="/ilanEkle"></a></li>
            </ul>
        </div>
    </div>
    <div 
        x-show="open" 
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="-translate-x-full opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="-translate-x-full opacity-0"
        class="fixed top-0 pt-2 pl-4 left-0 w-64 h-full bg-white shadow-xl z-50"
        style="display: none;"
    >
        <a href="/"><img src="{{ asset('img/logo.png') }}" alt="Golden Keys Real Estate Logo" class="h-14"></a>
        <button
            class="absolute top-4 right-4 text-2xl"
            x-on:click="open = false"
        >✕</button>
        <ul class="pl-2 pt-10 space-y-4 text-lg font-semibold">
            <a class="hover:text-gold" href="/">Ana Sayfa</a>
            {{-- <li><a class="hover:text-gold" href="/ilanlar">İlanlar</a></li> --}}
            <li><a class="hover:text-gold" href="/danismanlar">Danışmanlarımız</a></li>
            <li><a class="hover:text-gold" href="/subeler">Şubelerimiz</a></li>
            <li><a class="hover:text-gold" href="/hakkimizda">Hakkımızda</a></li>
        </ul>
    </div>

    <div 
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 bg-black bg-opacity-50 z-40"
        style="display: none;"
        x-on:click="open = false"
    ></div>
</header>