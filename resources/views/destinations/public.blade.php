@extends('layouts.master')

@section('title', 'Destinasi')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center section-title mb-5">
                <i class="fas fa-map-marked-alt me-2"></i>Destinasi Petualangan
            </h1>
        </div>
    </div>
    
    @if($destinations->count() > 0)
        <div class="row">
            @foreach($destinations as $destination)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $destination->image_url }}" class="card-img-top" alt="{{ $destination->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $destination->name }}</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-map-marker-alt me-1"></i>{{ $destination->location }}
                        </p>
                        <span class="badge bg-success mb-2">{{ ucfirst($destination->category) }}</span>
                        <p class="card-text flex-grow-1">{{ Str::limit($destination->description, 100) }}</p>
                        <button type="button" class="btn btn-adventure mt-auto" data-bs-toggle="modal" data-bs-target="#destinationModal{{ $destination->id }}">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal untuk setiap destinasi -->
            <div class="modal fade" id="destinationModal{{ $destination->id }}" tabindex="-1" aria-labelledby="destinationModalLabel{{ $destination->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="destinationModalLabel{{ $destination->id }}">
                                <i class="fas fa-map-marked-alt me-2"></i>{{ $destination->name }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ $destination->image_url }}" class="img-fluid rounded mb-3" alt="{{ $destination->name }}" style="width: 100%; height: 250px; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <h6><i class="fas fa-map-marker-alt text-danger me-2"></i><strong>Lokasi:</strong></h6>
                                        <p class="text-muted">{{ $destination->location }}</p>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <h6><i class="fas fa-tag text-success me-2"></i><strong>Kategori:</strong></h6>
                                        <span class="badge bg-success">{{ ucfirst($destination->category) }}</span>
                                    </div>
                                    
                                    @if(isset($destination->difficulty))
                                    <div class="mb-3">
                                        <h6><i class="fas fa-chart-line text-warning me-2"></i><strong>Tingkat Kesulitan:</strong></h6>
                                        <span class="badge bg-warning text-dark">{{ ucfirst($destination->difficulty) }}</span>
                                    </div>
                                    @endif
                                    
                                    @if(isset($destination->best_time))
                                    <div class="mb-3">
                                        <h6><i class="fas fa-calendar text-info me-2"></i><strong>Waktu Terbaik:</strong></h6>
                                        <p class="text-muted">{{ $destination->best_time }}</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h6><i class="fas fa-info-circle text-primary me-2"></i><strong>Deskripsi:</strong></h6>
                                    <p class="text-justify">{{ $destination->description }}</p>
                                </div>
                            </div>
                            
                            @if(isset($destination->facilities) && !empty($destination->facilities))
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h6><i class="fas fa-wrench text-secondary me-2"></i><strong>Fasilitas:</strong></h6>
                                    <p class="text-muted">{{ $destination->facilities }}</p>
                                </div>
                            </div>
                            @endif
                            
                            @if(isset($destination->price))
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h6><i class="fas fa-money-bill-wave text-success me-2"></i><strong>Harga:</strong></h6>
                                    <h5 class="text-success">Rp {{ number_format($destination->price, 0, ',', '.') }}</h5>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-2"></i>Tutup
                            </button>
                            @if(isset($destination->booking_url))
                            <a href="{{ $destination->booking_url }}" class="btn btn-adventure" target="_blank">
                                <i class="fas fa-calendar-check me-2"></i>Pesan Sekarang
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $destinations->links() }}
        </div>
    @else
        <div class="text-center">
            <div class="py-5">
                <i class="fas fa-mountain fa-4x text-muted mb-4"></i>
                <h3 class="text-muted">Belum Ada Destinasi</h3>
                <p class="text-muted">Destinasi petualangan akan segera hadir!</p>
                @auth
                    <a href="{{ route('destinations.create') }}" class="btn btn-adventure">
                        <i class="fas fa-plus me-2"></i>Tambah Destinasi Pertama
                    </a>
                @endauth
            </div>
        </div>
    @endif
</div>

<!-- CSS tambahan untuk styling modal -->
<style>
.modal-header {
    background: linear-gradient(135deg, #90EE90 0%, #228B22 100%);
    color: white;
}

.modal-header .btn-close {
    filter: invert(1);
}

.modal-body h6 {
    color: #2E7D32;
    margin-bottom: 0.5rem;
}

.text-justify {
    text-align: justify;
}

.btn-adventure {
    background: linear-gradient(135deg, #90EE90 0%, #228B22 100%);
    border: none;
    color: white;
    transition: transform 0.2s;
}

.btn-adventure:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(34, 139, 34, 0.3);
    color: white;
}

.badge.bg-success {
    background: linear-gradient(135deg, #90EE90 0%, #228B22 100%) !important;
}

.text-success {
    color: #228B22 !important;
}
</style>
@endsection