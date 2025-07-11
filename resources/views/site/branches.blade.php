@extends('site.layouts.app')
@section('title', 'Ofislerimiz - Golden Keys Real Estate')

@section('content')
    <section class="container mx-auto space-y-10">
        <div>
            <h2 class="text-center text-3xl font-bold mb-8">Ofislerimiz</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure><img src="{{ asset('img/image4.jpg') }}" alt="İzmir/Merkez Ofisi" class="w-full h-48 object-cover"></figure>
                    <div class="card-body">
                        <h2 class="card-title">İzmir/Merkez Ofisi</h2>
                        <p class="text-sm text-gray-500">Çiğli</p>
                        <p>Ege Bölgesi'nin en hızlı gelişen şehri. Yatırım fırsatları için ideal.</p><a href="https://goldenkeysrealestate.sahibinden.com/" target="_blank" rel="noopener noreferrer" class="btn btn-primary mt-4">Detaylar</a>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure><img src="{{ asset('img/image5.jpg') }}" alt="Bergama Ofisi" class="w-full h-48 object-cover"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Bergama Ofisi</h2>
                        <p class="text-sm text-gray-500">Bergama</p>
                        <p>Bergama, tarihi ve doğal güzellikleriyle öne çıkıyor. Yatırımlarınız için ideal bir bölge.</p><a
                            href="https://goldenkeysrealestatebergama.sahibinden.com/" target="_blank"
                            rel="noopener noreferrer" class="btn btn-primary mt-4">Detaylar</a>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure><img src="{{ asset('img/image3.jpg') }}" alt="Aliağa Premium Ofis" class="w-full h-48 object-cover"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Aliağa Premium Ofis</h2>
                        <p class="text-sm text-gray-500">Aliağa</p>
                        <p>Aliağa, sanayi ve lojistik sektörünün merkezlerinden biridir.</p><a href="https://goldenkeysrealestate.sahibinden.com/" target="_blank" rel="noopener noreferrer" class="btn btn-primary mt-4">Detaylar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection