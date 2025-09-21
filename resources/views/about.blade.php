@extends('layout')

@section('content')
<div class="container mt-5">
  <div class="card shadow-sm border-light">
    <div class="card-body p-5">
      <div class="row align-items-center">

        {{-- Kolom Foto --}}
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="{{ asset('uploads/foto/profilku.jpeg') }}" class="img-fluid rounded-circle shadow" alt="Foto Profil" style="max-width: 200px; border: 5px solid #fff;">
        </div>

        {{-- Kolom Informasi dengan Ikon --}}
        <div class="col-md-8">
          <h2 class="card-title mb-4 border-bottom pb-2">Developer Profile</h2>
          
          <div class="d-flex align-items-center mb-3">
            <i class="fas fa-user fa-fw me-3 text-muted"></i>
            <div>
              <small class="text-muted d-block">Nama</small>
              <span class="fw-bold">Kevin DWi Wijaya</span>
            </div>
          </div>

          <div class="d-flex align-items-center mb-3">
            <i class="fas fa-university fa-fw me-3 text-muted"></i>
            <div>
              <small class="text-muted d-block">Prodi</small>
              <span class="fw-bold">D3-MI PSDKU KEDIRI</span>
            </div>
          </div>

          <div class="d-flex align-items-center mb-3">
            <i class="fas fa-id-card fa-fw me-3 text-muted"></i>
            <div>
              <small class="text-muted d-block">NIM</small>
              <span class="fw-bold">2331730082</span>
            </div>
          </div>

          <div class="d-flex align-items-center">
            <i class="fas fa-calendar-alt fa-fw me-3 text-muted"></i>
            <div>
              <small class="text-muted d-block">Tanggal Pembuatan</small>
              <span class="fw-bold">21 September 2025</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection