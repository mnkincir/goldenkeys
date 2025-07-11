<div>
    <div
        class="-mt-10 h-[800px] w-full overflow-hidden relative before:content-[''] before:bg-gkBlack/50 before:w-full before:h-full before:absolute before:left-0 before:top-0 before:z-[10]">
        <video class="relative top-0 left-0 w-full h-full object-cover " src="{{ asset('video/hero.mp4') }}" autoplay loop playsinline muted></video>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-full h-[30%]  flex flex-col p-6 z-10">
            <img src="{{ asset('img/logo-white.svg') }}" alt="Logo" class="absolute top-0 left-0 md:left-1/2 z-10 transform -translate-y-44 md:-translate-x-1/2 md:-translate-y-1/2">
        </div>
    </div>
    <div class="container mx-auto space-y-20 relative z-10">
        <div class="absolute w-full -top-[500px] md:-top-72 text-center px-5 lg:px-0">
            <div
                class="bg-none shadow-lg px-2 py-4 w-full max-w-5xl border-[1px] border-white z-20 text-center m-auto">
                <p class="text-white text-lg text-center">BÖLGENİZİN ALTIN ANAHTARINA SAHİP OLMAK VE
                    OFİS AÇMAK İÇİN <span class="font-bold text-gold"> FRANCHISE </span>BAŞVURU FORMUNU
                    DOLDURABİLİRSİNİZ!</p><button type="button" class="btn btn-primary hover:!text-white transition duration-300 ease-in-out transform uppercase mt-2" onclick="my_modal_1.showModal()">Başvuru Formu</button>
            </div>
        </div>
        <div>
            <section class="relative shadow-sm border border-neutral-100 bg-white overflow-hidden">
                <div class="h-[400px] w-[700px] bg-cover bg-center bg-right bg-no-repeat mr-0 ml-auto"
                    style="background-image: url('{{ asset('img/Franchise.png') }}');"></div>
                <div class="absolute inset-0 bg-black opacity-40 lg:opacity-0"></div>
                <div class="absolute top-20 left-7 ">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold text-white lg:text-black">Birlikte Daha Hızlı
                            Büyüyelim!</h1>
                        <p class="mb-5 text-lg text-white lg:text-black">Birlikte gayrimenkul sektöründe
                            başarınızı hızla artıralım. </p>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <div class="relative h-96">
                <div class="hero h-32">
                    <div class="hero-content text-center text-[#0D0D0D] bg-transparent z-10 relative">
                        <div class="max-w-md">
                            <h1 class="mb-5 text-5xl font-bold">Gayrimenkul ihtiyaçlarınız için çözüm
                                noktanız</h1>
                            <p class="mb-5 text-lg ">En iyi gayrimenkul seçenekleri, sektördeki
                                tecrübemiz ve kaliteli hizmet anlayışımız ile yanınızdayız.</p><a
                                href="#highlights" class="btn btn-primary">Daha Fazla Bilgi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <section
                class="relative shadow-sm border border-neutral-100 bg-white overflow-hidden ">
                <div class="h-[400px] w-[700px] bg-cover bg-center bg-no-repeat "
                    style="background-image: url('{{ asset('img/imageHouse.jpg') }}');"></div>
                <div class="absolute inset-0 bg-black opacity-40 lg:opacity-0"></div>
                <div class="absolute top-20 max-md:left-7 md:right-10 text-gkBlack text-left">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold text-white lg:text-black">Geniş Portföy
                            Ağımız</h1>
                        <p class="mb-5 text-lg text-white lg:text-black">Sizin için en gözde
                            lokasyonlarda, her bütçeye uygun seçeneklerle öne çıkan ilanlarımızı
                            keşfedin. Hızlıca bakın, hayalinizdeki ev şimdi bir tık uzağınızda!"</p>
                            {{-- <a
                            class="btn btn-primary" href="/ilanlar">
                            <p>İlanlara Gözat</p>
                        </a> --}}
                    </div>
                </div>
            </section>
        </div>
        <div>
            <section id="highlights" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure class="p-5"><img src="{{ asset('img/1.svg') }}" alt="Ev" class="w-20 h-20"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Hayalinizdeki Evi Bulun</h2>
                        <p>Şimdi aramaya başlayın, size en uygun seçenekleri keşfedin. Modern, güvenli
                            ve keyifli yaşam alanları.</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure class="p-5"><img src="{{ asset('img/2.svg') }}" alt="Yatırım" class="w-20 h-20"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Yatırım Yapmanın Tam Zamanı</h2>
                        <p>Değerlenen bölgelerde fırsatları kaçırmayın. Yatırımınızın getirisi yüksek
                            olsun!</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure class="p-5"><img src="{{ asset('img/3.svg') }}" alt="Danışmanlık" class="w-20 h-20"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Profesyonel Danışmanlık</h2>
                        <p>Tecrübeli ekibimizle size özel çözümler sunuyoruz. İlk adımı birlikte atalım.
                        </p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure class="p-5"><img src="{{ asset('img/4.svg') }}" alt="Gayrimenkul" class="w-20 h-20"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Öne Çıkan Gayrimenkuller</h2>
                        <p>En gözde konumlarda özenle seçilmiş seçenekler. Hemen göz atın!</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure class="p-5"><img src="{{ asset('img/6.svg') }}" alt="Projeler" class="w-20 h-20"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Yeni Projeler</h2>
                        <p>Modern mimaride konforlu yaşam alanları. İlk sahiplerinden olun!</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                    <figure class="p-5"><img src="{{ asset('img/5.svg') }}" alt="Müşteri Memnuniyeti" class="w-20 h-20">
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Müşteri Memnuniyeti</h2>
                        <p>Siz de mutlu müşterilerimiz arasında yer alın. Güvenilir hizmet için
                            buradayız.</p>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <section class="relative shadow-sm border border-neutral-100 bg-white overflow-hidden">
                <div class="h-[400px] w-[700px] bg-cover bg-center bg-right bg-no-repeat mr-0 ml-auto"
                    style="background-image: url('{{ asset('img/DanismanLogo.png') }}');"></div>
                <div class="absolute inset-0 bg-black opacity-40 lg:opacity-0"></div>
                <div class="absolute top-20 left-7 ">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold text-white lg:text-black">Danışmanlarımız
                        </h1>
                        <p class="mb-5 text-lg text-white lg:text-black">Sizlere en doğru ve güvenilir
                            tavsiyeleri sunmak için burada olan uzman ekibimiz, ihtiyaçlarınıza en uygun
                            çözümleri hızlıca sunacaktır. </p><a class="btn btn-primary"
                            href="/danismanlar">
                            <p>Danışmanlarımız</p>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <section id="offices" class="py-16">
                <h2 class="text-center text-3xl font-bold mb-8">Ofislerimiz</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                        <figure><img src="{{ asset('img/image4.jpg') }}" alt="İzmir/Merkez Ofisi"
                                class="w-full h-48 object-cover"></figure>
                        <div class="card-body">
                            <h2 class="card-title">İzmir/Merkez Ofisi</h2>
                            <p class="text-sm text-gray-500">Çiğli</p>
                            <p>Ege Bölgesi'nin en hızlı gelişen şehri. Yatırım fırsatları için ideal.
                            </p><a href="https://goldenkeysrealestate.sahibinden.com/" target="_blank"
                                rel="noopener noreferrer" class="btn btn-primary mt-4">Detaylar</a>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                        <figure><img src="{{ asset('img/image5.jpg') }}" alt="Bergama Ofisi"
                                class="w-full h-48 object-cover"></figure>
                        <div class="card-body">
                            <h2 class="card-title">Bergama Ofisi</h2>
                            <p class="text-sm text-gray-500">Bergama</p>
                            <p>Bergama, tarihi ve doğal güzellikleriyle öne çıkıyor. Yatırımlarınız için
                                ideal bir bölge.</p><a
                                href="https://goldenkeysrealestatebergama.sahibinden.com/"
                                target="_blank" rel="noopener noreferrer"
                                class="btn btn-primary mt-4">Detaylar</a>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl transition duration-300 ease-in-out">
                        <figure><img src="{{ asset('img/image3.jpg') }}" alt="Aliağa Premium Ofis"
                                class="w-full h-48 object-cover"></figure>
                        <div class="card-body">
                            <h2 class="card-title">Aliağa Premium Ofis</h2>
                            <p class="text-sm text-gray-500">Aliağa</p>
                            <p>Aliağa, sanayi ve lojistik sektörünün merkezlerinden biridir.</p><a
                                href="https://goldenkeysrealestate.sahibinden.com/" target="_blank"
                                rel="noopener noreferrer" class="btn btn-primary mt-4">Detaylar</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<dialog id="my_modal_1" class="modal">
    <div class="modal-box">
        <form method="dialog" class="absolute top-2 right-2 z-20 text-xl text-gray-500 hover:text-black">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn px-2 py-2">
                    <span class="font-bold">✖</span>
                </button>
            </form>
        <div>
            <x-franchise-form/>
        </div>
    </div>
</dialog>