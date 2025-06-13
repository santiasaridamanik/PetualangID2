@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
<!-- Carousel -->
<div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1567320032761-8d7fb7a5aa4e?q=80&w=2067&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Gunung Bromo">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="fw-bold">PETUALANGID</h1>
                <p>Temukan Keajaiban Petualangan di Seluruh Indonesia</p>
                <a href="/destinasi" class="btn btn-adventure">Jelajahi Sekarang</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1695632647065-43d0eb230f5c?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Raja Ampat">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="fw-bold">Keindahan Alam Yang Memukau</h1>
                <p>Petualangan Terbaik untuk Menyegarkan Jiwa dan Ragamu</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://plus.unsplash.com/premium_photo-1730035378785-0f7b38bff072?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Air Terjun">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="fw-bold">Temukan Surga Tersembunyi</h1>
                <p>Dari Gunung Hingga Lautan, Indonesia Punya Segalanya</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Featured Categories -->
<div class="container marketing mb-5">
    <h2 class="text-center mb-5 section-title">Kategori Petualangan</h2>
    <div class="row">
        <div class="col-lg-4 text-center">
            <img src="https://images.unsplash.com/photo-1524429656589-6633a470097c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="rounded-circle" width="140" height="140" alt="Gunung">
            <h2>Petualangan Gunung</h2>
            <p>Jelajahi puncak-puncak tertinggi di Indonesia. Nikmati keindahan lansekap dan sensasi mencapai puncak yang membanggakan.</p>
            <p><a class="btn btn-adventure-secondary" href="/destinasi">Lihat Detail »</a></p>
        </div>
        <div class="col-lg-4 text-center">
            <img src="https://images.unsplash.com/photo-1537956965359-7573183d1f57?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="rounded-circle" width="140" height="140" alt="Pantai">
            <h2>Petualangan Pantai</h2>
            <p>Eksplorasi keindahan pantai tersembunyi dengan pasir putih dan air jernih. Rasakan sensasi menyelam di lautan biru.</p>
            <p><a class="btn btn-adventure-secondary" href="/destinasi">Lihat Detail »</a></p>
        </div>
        <div class="col-lg-4 text-center">
            <img src="https://images.unsplash.com/photo-1511497584788-876760111969?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="rounded-circle" width="140" height="140" alt="Hutan">
            <h2>Petualangan Hutan</h2>
            <p>Temukan keindahan hutan tropis Indonesia. Perhatikan keanekaragaman hayati dan keunikan flora fauna endemik.</p>
            <p><a class="btn btn-adventure-secondary" href="/destinasi">Lihat Detail »</a></p>
        </div>
    </div>
</div>

<!-- Featured Destination -->
<div class="container">
    <h2 class="text-center mb-5 section-title">Destinasi Unggulan</h2>
    <hr class="featurette-divider">
    
    <div class="row featurette my-5">
        <div class="col-md-7">
            <h2 class="featurette-heading">Gunung Rinjani <span class="text-muted">Keindahan Alam Lombok</span></h2>
            <p class="lead">Gunung Rinjani merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 mdpl. Pendakian Rinjani terkenal dengan pemandangan kaldera Segara Anak dan keindahan puncak. Petualangan mendaki Rinjani menawarkan pengalaman berbeda dengan beragam ekosistem, mulai dari hutan tropis hingga padang savana.</p>
            <a href="/destinasi" class="btn btn-adventure mt-3">Jelajahi Sekarang</a>
        </div>
        <div class="col-md-5">
            <img src="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" alt="Gunung Rinjani">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette my-5">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Raja Ampat <span class="text-muted">Surga Bawah Laut Indonesia</span></h2>
            <p class="lead">Raja Ampat memiliki keanekaragaman hayati laut tertinggi di dunia. Dengan lebih dari 1.500 spesies ikan, 537 jenis karang, dan 700 jenis moluska, Raja Ampat adalah surga bagi para penyelam dan pecinta alam. Kepulauan ini juga menawarkan pemandangan pulau karst yang mempesona dan pantai-pantai tersembunyi yang masih alami.</p>
            <a href="/destinasi" class="btn btn-adventure mt-3">Jelajahi Sekarang</a>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" alt="Raja Ampat">
        </div>
    </div>
</div>
@endsection 