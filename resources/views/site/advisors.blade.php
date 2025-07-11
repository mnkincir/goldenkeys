@extends('site.layouts.app')
@section('title', 'Danışmanlarımız - Golden Keys Real Estate')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-bold text-center mb-8">
        Danışmanlarımız
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8" style="opacity: 1;">
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/ALI.png') }}" alt="Ali Yetgin"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Ali Yetgin</h2>
                <p><span class="font-bold"></span>Yönetim Kurulu Başkanı</p>
                <p><span class="font-bold">Telefon: </span>0532 120 69 09</p>
                <div class="card-actions "><a href="tel:+905321206909" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/TOLGA.png') }}" alt="Tolga Şirip"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Tolga Şirip</h2>
                <p><span class="font-bold"></span>Ofis Direktörü</p>
                <p><span class="font-bold">Telefon: </span>0532 689 29 15</p>
                <div class="card-actions "><a href="tel:+905326892915" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/NAGIHAN.png') }}" alt="Nagihan Yetgin"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Nagihan Yetgin</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0532 454 33 36</p>
                <div class="card-actions "><a href="tel:+905324543336" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/BULENT.png') }}" alt="Bülent Tozo"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Bülent Tozo</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0532 065 90 74</p>
                <div class="card-actions "><a href="tel:+905320659074" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/SADULLAH.png') }}" alt="Sadullah Karakaya"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Sadullah Karakaya</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0535 729 79 10</p>
                <div class="card-actions "><a href="tel:+905357297910" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/MEHMET.png') }}" alt="Mehmet Uluk"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Mehmet Uluk</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0539 965 60 59</p>
                <div class="card-actions "><a href="tel:+905399656059" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/SALIHA.png') }}" alt="Saliha Aymelek"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Saliha Aymelek</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0507 093 15 58</p>
                <div class="card-actions "><a href="tel:+905070931558" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/OMER.png') }}" alt="Ömer Zeytin"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Ömer Zeytin</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0530 289 23 92</p>
                <div class="card-actions "><a href="tel:+905302892392" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/BETUL.png') }}" alt="Betül Baştürk"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Betül Baştürk</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0507 292 73 14</p>
                <div class="card-actions "><a href="tel:+905072927314" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/MUTLU.png') }}" alt="Mutlu Metin"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Mutlu Metin</h2>
                <p><span class="font-bold"></span>Arsa &amp; Arazi Uzmanı</p>
                <p><span class="font-bold">Telefon: </span>0507 309 50 00</p>
                <div class="card-actions "><a href="tel:+905073095000" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/ARDA.png') }}" alt="Arda Yıldız"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Arda Yıldız</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0505 075 20 21</p>
                <div class="card-actions "><a href="tel:+905050752021" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/SERTAC.png') }}" alt="Sertaç Çakar"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Sertaç Çakar</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0533 385 73 93</p>
                <div class="card-actions "><a href="tel:+905333857393" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <figure><img src="{{ asset('img/HAKAN.png') }}" alt="Hakan Hızlı"
                    class="w-full h-full object-contain"></figure>
            <div class="card-body" style="opacity: 1;">
                <h2 class="card-title">Hakan Hızlı</h2>
                <p><span class="font-bold"></span>Gayrimenkul Danışmanı</p>
                <p><span class="font-bold">Telefon: </span>0541 837 89 55</p>
                <div class="card-actions "><a href="tel:+905418378955" class="btn btn-primary btn-sm ">Ara</a></div>
            </div>
        </div>
    </div>
</div>
@endsection