@extends('site.layouts.app')
@section('title', 'Teşekkürler - Golden Keys Real Estate')

@section('content')
    <section class="card bg-base-100 shadow-xl p-8 space-y-6">
        <div class="space-y-5 text-center">
            <h1 class="text-3xl font-bold">
                Teşekkürler!
            </h1>
            <p class="text-gray-700">
                Bizimle iletişime geçtiğiniz için teşekkür ederiz. Başvurunuz başarıyla alınmıştır.
            </p>
            <a href="{{ url('/') }}" class="btn btn-primary">
                Anasayfaya dön.
            </a>
        </div>
    </section>
@endsection