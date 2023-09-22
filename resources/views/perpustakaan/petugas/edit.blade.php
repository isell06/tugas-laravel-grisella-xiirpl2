@extends('layouts.master')

@push('css')

@endpush

@section('content')
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Petugas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('petugas.update' , $petugass[0]->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="namaPetugas">Nama Petugas :</label>
                        <input type="text" class="form-control @error('nama_petugas') is-invalid @enderror" name="nama_petugas" id="namaPetugas" placeholder="Masukkan Nama" value="{{ $petugass[0]->nama_petugas }}">
                    </div>
                    @error('nama_petugas')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Jabatan Petugas :</label>
                        <select class="custom-select" name="jabatan_petugas @error('jabatan_petugas') is-invalid @enderror">
                        <option selected> {{ $petugass[0]->jabatan_petugas }} </option>
                        <option value="">Pilih Jabatan</option>
                        <option value="kepala-perpus">Kepala Perpustakaan</option>
                        <option value="asisten-kepala-perpus">Asisten Kepala Perpustakaan</option>
                        <option value="admin">Administrasi</option>
                        <option value="Lainnya">DLL</option>
                        </select>
                    </div>
                    @error('jabatan_petugas')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="noTelp">No. Telepon Petugas :</label>
                        <input type="text" class="form-control @error('no_telp_petugas') is-invalid @enderror" name="no_telp_petugas" id="noTelp" placeholder="Masukkan No. Telepon" value="{{ $petugass[0]->no_telp_petugas }}">
                    </div>
                    @error('no_telp_petugas')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Alamat Petugas :</label>
                        <textarea class="form-control @error('alamat_petugas') is-invalid @enderror" name="alamat_petugas" id="alamatPetugas" rows="3" placeholder="Masukkan Alamat">{{ $petugass[0]->alamat_petugas }}</textarea>
                    </div> 
                    @error('alamat_petugas')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('petugas.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection