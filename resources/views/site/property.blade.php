@extends('site.layouts.app')

@section('content')
<div>
    <div style="opacity: 1; transform: none;">
        <div>
            <div class="container mx-auto px-4 py-6">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/2"><img src="/image1-1.jpeg" alt="Konut 1"
                            class="w-full h-80 object-cover shadow-md">
                        <div class="mt-4 flex space-x-2 overflow-x-auto"><img src="/image1-1.jpeg" alt="image-0"
                                class="w-24 h-24 object-cover cursor-pointer ring-2 ring-gold-500"><img
                                src="/image1-2.jpg" alt="image-1" class="w-24 h-24 object-cover cursor-pointer "></div>
                        <div class="mt-6 p-4  bg-white shadow-sm border">
                            <div class="flex items-end gap-6"><img src="/umut.png" alt="Ahmet Yılmaz"
                                    class="w-16 h-16 object-cover ">
                                <div>
                                    <h3 class="text-lg font-semibold">Ahmet Yılmaz</h3>
                                    <p class="text-gray-600 text-sm">ahmet.yilmaz@emlakofisi.com</p>
                                    <p class="text-gray-600 text-sm">555-123-4567</p>
                                </div><a href="tel:+95551234567" class="btn btn-primary btn-sm  ">Ara</a>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-6 bg-white shadow-sm border">
                        <h1 class="text-3xl font-bold mb-2">Konut 1</h1>
                        <p class="text-lg text-gray-600">İzmir / Bergama / Ertuğrul Mh.</p>
                        <p class="text-2xl font-semibold text-gold-600 mt-3">2.950.000 TL</p>
                        <p class="text-gray-700 mt-4">Bu mülk harika bir yaşam alanı sunuyor. Modern tasarımı ve geniş
                            alanlarıyla çok konforlu. Çok merkezi bir konumda yer alıyor.</p>
                        <div class=" mt-6">
                            <h2 class="text-xl font-semibold mb-4">Emlak Detayları</h2>
                            <div class="flex w-full">
                                <ul class="grid grid-cols-1 gap-4">
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">İlan No:</span><span
                                            class="text-gray-800">1171125931</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Emlak Tipi:</span><span
                                            class="text-gray-800">Satılık Daire</span></li>
                                    <li class="flex justify-between text-sm"><span class="font-medium text-gray-600">Net
                                            m²:</span><span class="text-gray-800">135</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Bina Yaşı:</span><span
                                            class="text-gray-800">16-20 arası</span></li>
                                    <li class="flex justify-between text-sm"><span class="font-medium text-gray-600">Kat
                                            Sayısı:</span><span class="text-gray-800">5</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Banyo Sayısı:</span><span
                                            class="text-gray-800">1</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Balkon:</span><span
                                            class="text-gray-800">Var</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Otopark:</span><span
                                            class="text-gray-800">Yok</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Kullanım Durumu:</span><span
                                            class="text-gray-800">Kiracılı</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Site Adı:</span><span
                                            class="text-gray-800">Belirtilmemiş</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Krediye Uygun:</span><span
                                            class="text-gray-800">Evet</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Kimden:</span><span
                                            class="text-gray-800">Emlak Ofisinden</span></li>
                                </ul>
                                <div class="divider divider-horizontal"></div>
                                <ul class="grid grid-cols-1 gap-4">
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">İlan Tarihi:</span><span
                                            class="text-gray-800">15 Aralık 2024</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Brüt m²:</span><span
                                            class="text-gray-800">150</span></li>
                                    <li class="flex justify-between text-sm"><span class="font-medium text-gray-600">Oda
                                            Sayısı:</span><span class="text-gray-800">3+1</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Bulunduğu Kat:</span><span
                                            class="text-gray-800">4</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Isıtma:</span><span
                                            class="text-gray-800">Kombi (Doğalgaz)</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Mutfak:</span><span
                                            class="text-gray-800">Kapalı</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Asansör:</span><span
                                            class="text-gray-800">Var</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Eşyalı:</span><span
                                            class="text-gray-800">Hayır</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Site İçinde:</span><span
                                            class="text-gray-800">Hayır</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Aidat:</span><span
                                            class="text-gray-800">Belirtilmemiş</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Tapu Durumu:</span><span
                                            class="text-gray-800">Kat Mülkiyetli</span></li>
                                    <li class="flex justify-between text-sm"><span
                                            class="font-medium text-gray-600">Takas:</span><span
                                            class="text-gray-800">Hayır</span></li>
                                </ul>
                            </div>
                        </div><button class="btn btn-primary mt-6 w-full">İletişime Geç</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection