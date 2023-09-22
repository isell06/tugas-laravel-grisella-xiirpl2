@extends('layouts.master')

@push('css')

@endpush

@section('content')
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Anggota</h1>
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
                <h3 class="card-title">Ubah Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.update' , $anggotas[0]->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="kodeAnggota">Kode Anggota :</label>
                    <input type="text" name="kode_anggota" id="kodeAnggota" class="form-control @error('kode') is-invalid @enderror"  placeholder="Masukkan Kode Anggota" value="{{ $anggotas[0]->kode_anggota }}">
                  </div>
                  @error('kode_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="namaAnggota">Nama Anggota :</label>
                    <input type="text" name="nama_anggota" id="namaAnggota" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Anggota" value="{{ $anggotas[0]->nama_anggota }}">
                  </div>
                  @error('nama_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="jkAnggota">Jenis Kelamin Anggota :</label>
                      <div class="form-check">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk_anggota" value="{{ $anggotas[0]->jk_anggota }}">
                        <label class="form-check-label" checked>{{ $anggotas[0]->jk_anggota }}</label>                       
                      </div>
                      <div class="form-check">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk_anggota" value="{{ $anggotas[0]->jk_anggota }}">
                        <label class="form-check-label" checked>{{ $anggotas[0]->jk_anggota }}</label>
                      </div>
                  </div>
                  @error('jk_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label>Jurusan Anggota :</label>
                      <select class="custom-select @error('jurusan') is-invalid @enderror" name="jurusan_anggota" id="jurusanAnggota">
                      <option selected> {{ $anggotas[0]->jurusan_anggota }} </option>
                      <option value="">Pilih Jurusan</option>
                      <option value="RPL">Rekayasa Perangkat Lunak</option>
                      <option value="TP">Teknik Pemesinan</option>
                      <option value="TFLM">Teknik Pengelasan</option>
                      <option value="DPIB">Desain Bangunan</option>
                      <option value="TO">Teknik Otomotif</option>
                      <option value="Lainnya">Lainnya</option>
                      </select>
                  </div>
                  @error('jurusan_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="noTelp">No. Telepon Anggota :</label>
                      <input type="text" class="form-control @error('noTelp') is-invalid @enderror" name="no_telp_anggota" id="noTelp" placeholder="Masukkan No. Telepon" value="{{ $anggotas[0]->no_telp_anggota }}">
                  </div>
                  @error('no_telp_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label>Alamat Anggota :</label>
                      <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat_anggota" id="alamatAnggota" rows="3" placeholder="Masukkan Alamat">{{ $anggotas[0]->alamat_anggota }}</textarea>
                  </div>  
                  @error('alamat_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('anggota.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection