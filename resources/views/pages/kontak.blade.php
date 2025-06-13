@extends('layouts.master')

@section('title', 'Kontak')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5">
            <h1 class="display-4">Hubungi Kami</h1>
            <p class="lead">Punya pertanyaan atau ingin mendiskusikan petualangan berikutnya? Jangan ragu untuk menghubungi kami!</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Formulir Kontak</h3>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-adventure">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title">Informasi Kontak</h3>
                    <p class="card-text">Kami selalu siap membantu Anda merencanakan petualangan terbaik di Indonesia.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Alamat:</strong> Jl. Petualang No. 123, Jakarta, Indonesia</li>
                        <li class="mb-2"><strong>Email:</strong> info@petualangid.com</li>
                        <li class="mb-2"><strong>Telepon:</strong> +62 21 1234 5678</li>
                        <li class="mb-2"><strong>Jam Operasional:</strong> Senin - Jumat, 09:00 - 17:00 WIB</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Ikuti Kami</h3>
                    <p class="card-text">Dapatkan inspirasi petualangan terbaru dengan mengikuti media sosial kami:</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-decoration-none">
                            Instagram
                        </a>
                        <a href="#" class="text-decoration-none">
                            Facebook
                        </a>
                        <a href="#" class="text-decoration-none">
                            Twitter
                        </a>
                        <a href="#" class="text-decoration-none">
                            YouTube
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 