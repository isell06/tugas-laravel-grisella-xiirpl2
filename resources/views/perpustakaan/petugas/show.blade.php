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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Show Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="namaPetugas">Nama Petugas :</label>
                        <input type="text" class="form-control" name="nama_petugas" id="namaPetugas" placeholder="Masukkan Nama" value="{{ $petugass[0]->nama_petugas }}"disabled>
                    </div>
                    <div class="form-group">
                        <label>Jabatan Petugas :</label>
                        <select class="custom-select" name="jabatan_petugas" disabled>
                        <option selected> {{ $petugass[0]->jabatan_petugas }} </option>
                        <option value="">Pilih Jabatan</option>
                        <option value="kepala-perpus">Kepala Perpustakaan</option>
                        <option value="asisten-kepala-perpus">Asisten Kepala Perpustakaan</option>
                        <option value="admin">Administrasi</option>
                        <option value="Lainnya">DLL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="noTelp">No. Telepon Petugas :</label>
                        <input type="text" class="form-control" name="no_telp_petugas" id="noTelp" placeholder="Masukkan No. Telepon" value="{{ $petugass[0]->no_telp_petugas }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Alamat Petugas :</label>
                        <textarea class="form-control" name="alamat_petugas" id="alamatPetugas" rows="3" placeholder="Masukkan Alamat" disabled>{{ $petugass[0]->alamat_petugas }}</textarea>
                    </div>  
                </div>
                <!-- /.card-body -->
            </div>

                <div class="card-footer">
                  <a href="{{ route('petugas.index') }}" class="btn btn-danger"><i class="fas fa-close"></i>Back</a>
                </div>

@endsection