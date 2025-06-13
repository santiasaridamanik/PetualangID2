<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PETUALANGID</title>
     <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        .btn-adventure {
            background: linear-gradient(45deg, #2E8B57, #32CD32);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-adventure:hover {
            background: linear-gradient(45deg, #228B22, #2E8B57);
            color: white;
            transform: translateY(-2px);
        }
        
        .btn-adventure-secondary {
            background: transparent;
            border: 2px solid #2E8B57;
            color: #2E8B57;
            transition: all 0.3s ease;
        }
        
        .btn-adventure-secondary:hover {
            background: #2E8B57;
            color: white;
        }
        
        .section-title {
            color: #2E8B57;
            font-weight: bold;
        }
        
        /* Navbar Custom */
        .navbar-custom {
            background: linear-gradient(90deg, #2E8B57, #228B22);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-custom .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .navbar-custom .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .navbar-custom .nav-link:hover {
            color: white !important;
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        /* User Avatar */
        .user-avatar {
            width: 32px;
            height: 32px;
            background: linear-gradient(45deg, #32CD32, #2E8B57);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand text-white" href="/">
                <i class="fas fa-mountain me-2"></i>PETUALANGID
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-home me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/destinasi">
                            <i class="fas fa-map-marked-alt me-1"></i>Destinasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">
                            <i class="fas fa-info-circle me-1"></i>Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/kontak">
                        <i class="fas fa-phone me-1"></i>Kontak
                    </a>
                </li>
                </ul>
                
                <ul class="navbar-nav">
                    @auth
                        <!-- Menu untuk user yang sudah login -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                                <div class="user-avatar me-2">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </div>
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('destinations.index') }}">
                                        <i class="fas fa-cogs me-2"></i>Kelola Destinasi
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        <i class="fas fa-user-edit me-2"></i>Edit Profile
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <!-- Menu untuk user yang belum login -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt me-1"></i>Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-user-plus me-1"></i>Register
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-mountain me-2"></i>PETUALANGID</h5>
                    <p>Temukan keajaiban petualangan di seluruh Indonesia bersama kami.</p>
                </div>
                <div class="col-md-6">
                    <h6>Kontak</h6>
                    <p>
                        <i class="fas fa-envelope me-2"></i>info@petualangid.com<br>
                        <i class="fas fa-phone me-2"></i>+62 123 456 789
                    </p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; {{ date('Y') }} PETUALANGID. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>