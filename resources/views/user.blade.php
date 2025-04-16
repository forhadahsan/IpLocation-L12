<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get User Location - Forhad</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Forhad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Section -->
<div class="container py-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light">
            <h4 class="mb-0">🌍 User Location Info - Forhad.online</h4>
            <a href="https://forhad.online" target="_blank" class="btn btn-success btn-sm mt-2">
                <i class="fas fa-globe me-1"></i> Visit My Website
            </a>
        </div>
        <div class="card-body">
            @if($currentUserInfo)
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>IP:</strong> {{ $currentUserInfo->ip }}</li>
                    <li class="list-group-item"><strong>Country:</strong> {{ $currentUserInfo->countryName }} ({{ $currentUserInfo->countryCode }})</li>
                    <li class="list-group-item"><strong>Region:</strong> {{ $currentUserInfo->regionName }} ({{ $currentUserInfo->regionCode }})</li>
                    <li class="list-group-item"><strong>City:</strong> {{ $currentUserInfo->cityName }}</li>
                    <li class="list-group-item"><strong>Zip Code:</strong> {{ $currentUserInfo->zipCode }}</li>
                    <li class="list-group-item"><strong>Latitude:</strong> {{ $currentUserInfo->latitude }}</li>
                    <li class="list-group-item"><strong>Longitude:</strong> {{ $currentUserInfo->longitude }}</li>
                </ul>
            @else
                <p class="text-muted">Location data not available.</p>
            @endif
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <h5>Forhad</h5>
            <p class="mb-0">&copy; 2024 Forhad. All rights reserved.</p>
        </div>
        <div>
            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
