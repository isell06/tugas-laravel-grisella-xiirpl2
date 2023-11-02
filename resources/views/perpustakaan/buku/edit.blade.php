@extends('layouts.master')

@push('css')

@endpush

@section('content')
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('buku.update' , $buku->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeBuku">Kode Buku :</label>
                        <input type="text" class="form-control @error('kode_buku') is-invalid @enderror" name="kode_buku" id="kodeBuku" placeholder="Masukkan Kode Buku" value="{{ $buku->kode_buku }}">
                    </div>
                    @error('kode_buku')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="judulBuku">Judul Buku :</label>
                        <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" name="judul_buku" id="judulBuku" placeholder="Masukkan Judul Buku" value="{{ $buku->judul_buku }}">
                    </div>
                    @error('judul_buku')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="penulisBuku">Penulis Buku :</label>
                        <input type="text" class="form-control @error('penulis_buku') is-invalid @enderror" name="penulis_buku" id="penulisBuku" placeholder="Masukkan Penulis Buku" value="{{ $buku->penulis_buku }}">
                    </div>
                    @error('penulis_buku')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="penerbitBuku">Penerbit Buku :</label>
                        <input type="text" class="form-control @error('penerbit_buku') is-invalid @enderror" name="penerbit_buku" id="penerbitBuku" placeholder="Masukkan Penerbit Buku" value="{{ $buku->penerbit_buku }}">
                    </div>
                    @error('penerbit_buku')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="tahunTerbit">Tahun Terbit Buku :</label>
                        <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror" name="tahun_terbit" id="tahunTerbit" placeholder="Masukkan Tahun Terbit Buku" value="{{ $buku->tahun_terbit }}">
                    </div>
                    @error('tahun_terbit')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="stok">Stok Buku :</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" id="stok" placeholder="Masukkan Stok Buku" value="{{ $buku->stok }}">
                    </div>
                    @error('stok')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Rak Buku :</label>
                        <select class="custom-select" name="rak_buku @error('rak_buku') is-invalid @enderror">
                        <option value="">Pilih Rak Buku</option>
                        @forelse ($raks as $key => $value )
                        <option value="{{ $value->id }}" selected>{{ $value->nama_rak }}</option>
                        @empty
                        <option disabled>--Data Masih Kosong--</option>
                        @endforelse 
                        </select>
                    </div>
                    @error('rak_buku')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('buku.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection