@extends('layouts.master')

@section('content')
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Form Anggota</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Silahkan isi Form Anggota ini</h6>

                <p class="card-text">Isi dengan data asli Anda.</p>
                <a href="{{ route('anggotas.create') }}" class="btn btn-primary">Form Anggota</a>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Form Buku</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Silahkan isi Form Buku ini</h6>

                <p class="card-text">Isi dengan data buku asli.</p>
                <a href="/buku/create" class="btn btn-primary">Form Buku</a>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Form Petugas</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Silahkan isi Form Petugas ini</h6>

                <p class="card-text">Isi dengan data asli  Anda.</p>
                <a href="/petugas/create" class="btn btn-primary">Form Petugas</a>
              </div>
            </div>

@endsection