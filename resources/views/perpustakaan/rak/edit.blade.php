@extends('layouts.master')

@push('css')

@endpush

@section('content')
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('rak.update' , $rak->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaRak">Nama Rak :</label>
                    <input type="text" name="nama_rak" id="namaRak" class="form-control @error('nama_rak') is-invalid @enderror"  placeholder="Masukkan Nama Rak" value="{{ $rak->nama_rak }}">
                  </div>
                  @error('nama_rak')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="lokasiRak">Lokasi Rak :</label>
                    <input type="text" name="lokasi_rak" id="lokasiRak" class="form-control @error('lokasi_rak') is-invalid @enderror" placeholder="Masukkan Lokasi Rak" value="{{ $rak->lokasi_rak }}">
                  </div>
                  @error('lokasi_rak')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('rak.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection