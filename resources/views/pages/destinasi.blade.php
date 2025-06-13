@extends('layouts.master')

@section('title', 'Destinasi')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Destinasi Petualangan Terbaik</h1>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Gunung Bromo">
                <div class="card-body">
                    <h5 class="card-title">Gunung Bromo</h5>
                    <p class="card-text">Gunung Bromo terletak di Jawa Timur dan merupakan salah satu gunung berapi aktif yang populer di Indonesia. Pemandangan matahari terbit di Bromo dengan lautan pasir dan kawah yang mengepulkan asap menjadikannya destinasi petualangan yang sangat ikonik.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Jawa Timur, Indonesia</small>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <img src="https://plus.unsplash.com/premium_photo-1661876927592-7ce56910bbda?q=80&w=1863&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Pulau Komodo">
                <div class="card-body">
                    <h5 class="card-title">Taman Nasional Komodo</h5>
                    <p class="card-text">Taman Nasional Komodo adalah rumah bagi komodo (Varanus komodoensis), kadal terbesar di dunia. Selain dapat melihat langsung komodo di habitat aslinya, di sini juga terdapat pantai dengan pasir merah muda yang unik dan keindahan bawah laut yang luar biasa.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Nusa Tenggara Timur, Indonesia</small>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1601058497548-f247dfe349d6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Danau Toba">
                <div class="card-body">
                    <h5 class="card-title">Danau Toba</h5>
                    <p class="card-text">Danau Toba adalah danau vulkanik terbesar di dunia dengan Pulau Samosir di tengahnya. Petualangan di Danau Toba bisa dimulai dengan menjelajahi budaya Batak, hiking di bukit-bukit sekitar, atau aktivitas air di danau yang luas dan indah.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Sumatera Utara, Indonesia</small>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1602144586078-7d95c8d7808c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Taman Nasional Wakatobi">
                <div class="card-body">
                    <h5 class="card-title">Taman Nasional Wakatobi</h5>
                    <p class="card-text">Wakatobi adalah surga bagi penyelam dan snorkeler, dengan terumbu karang yang luas dan beraneka ragam. Memiliki lebih dari 750 spesies karang dan 940 spesies ikan, Wakatobi menawarkan petualangan bawah laut yang tak terlupakan.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Sulawesi Tenggara, Indonesia</small>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1659935405041-1e76d8bd9de6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Gunung Kerinci">
                <div class="card-body">
                    <h5 class="card-title">Gunung Kerinci</h5>
                    <p class="card-text">Gunung Kerinci adalah gunung tertinggi di Sumatera dan gunung berapi tertinggi di Indonesia. Pendakian Kerinci menawarkan pengalaman petualangan yang menantang dengan pemandangan hutan tropis yang masih alami dan keanekaragaman hayati yang luar biasa.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Jambi, Indonesia</small>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1580576234025-6cf2622785b7?q=80&w=1922&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Kepulauan Derawan">
                <div class="card-body">
                    <h5 class="card-title">Kepulauan Derawan</h5>
                    <p class="card-text">Kepulauan Derawan memiliki keanekaragaman hayati laut yang spektakuler. Di sini Anda bisa berenang bersama penyu laut, melihat ubur-ubur tanpa sengat di Danau Kakaban, dan menikmati keindahan pantai berpasir putih yang masih alami.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Kalimantan Timur, Indonesia</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 