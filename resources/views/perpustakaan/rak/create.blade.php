        @extends('layouts.master')
        
        @push('css')

        @endpush

        @section('content')
            <!--ISI-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('rak.store') }}" method="POST">
                @csrf 
                <div class="card-body">
                    <div class="form-group">
                        <label for="namaRak">Nama Rak :</label>
                        <input type="text" class="form-control @error('nama_rak') is-invalid @enderror" name="nama_rak" id="namaRak" placeholder="Masukkan Nama Rak" value="{{ old('nama_rak') }}">
                    </div>
                  @error('nama_rak')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                    <div class="form-group">
                        <label for="lokasiRak">Lokasi Rak :</label>
                        <input type="text" class="form-control @error('lokasi_rak') is-invalid @enderror" name="lokasi_rak" id="lokasiRak" placeholder="Masukkan Lokasi Rak" value="{{ old('lokasi_rak') }}">
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
            <!-- /.card -->
        @endsection