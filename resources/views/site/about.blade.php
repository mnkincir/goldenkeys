@extends('site.layouts.app')
@section('title', 'Hakkımızda - Golden Keys Real Estate')

@section('content')
    <section class="card bg-base-100 shadow-xl p-8 space-y-6">
        <div>
            <h1 class="text-3xl font-bold text-left mb-8 mt-4">Golden Keys Vizyonu</h1>
            <p class="text-gray-700">Faaliyet gösterdiği gayrimenkul sektöründe doğruluk, dürüstlük ve güvenilirlik
                ilkelerinden ödün vermeden, teknoloji ile entegre bir şekilde çalişmalarına devam ederek, hizmet
                verdiği tüm bölgelerde değerlerini koruyarak örnek ve lider olma vizyonunu taşımaktadır.</p>
        </div>
        <div>
            <h1 class="text-3xl font-bold text-left mb-8 mt-4">Golden Keys Misyonu</h1>
            <p class="text-gray-700">Gayrimenkul sektöründe, beklenti ve ihtiyaçlara uygun çözümler üretip
                pazarlama, satış kiralama ve sonrasında koşulsuz müşteri memnuniyeti bilinciyle, hızlı ve güvenilir
                hizmetler sunmak amacındadır.</p>
        </div>
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6 ">
            <figure class="w-auto lg:w-96"><img src="{{ asset('img/ali-yetgin.jpeg') }}" alt="Kurucu Üye" class="object-cover w-full h-full mt-4"></figure>
            <div class="lg:w-2/3 space-y-2 mt-4">
                <h2 class="text-2xl font-bold text-left">Ali Yetgin</h2>
                <p class="text-lg text-gray-600">Yönetim Kurulu Başkanı</p>
                <div class="mt-4 space-y-2">
                    <p class="flex items-center text-gray-700"><span
                            class="material-icons text-left mr-2">Telefon:</span>0(532) 120 69 09</p><a
                        href="tel:+905321206909" class="btn btn-primary  btn-sm">Ara</a>
                    <div>
                        <h1 class="text-3xl font-bold text-left mb-4 mt-8">Hakkında</h1>
                        <p class="text-gray-700">1988 yılında İzmir’in Bergama ilçesinde doğdum. Eğitim hayatımı
                            tamamladıktan sonra ticaret sektörüne adım attım. 20 yılı aşkın ticari deneyimimin
                            ardından, gayrimenkul sektörüne yenilikçi ve modern bir bakış açısı kazandırmak amacıyla
                            Golden Keys Real Estate şirketini kurdum. Türkiye’nin gayrimenkul sektöründeki güvenilir
                            ve öncü markalarından biri olma hedefiyle, profesyonel ve müşteri odaklı hizmet
                            anlayışıyla faaliyet göstermeye devam ediyorum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection