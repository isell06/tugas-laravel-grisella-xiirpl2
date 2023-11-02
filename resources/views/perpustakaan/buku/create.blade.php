        @extends('layouts.master')
        
        @push('css')

        @endpush

        @section('content')
            <!--ISI-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('buku.store') }}" method="POST">
                @csrf 
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeBuku">Kode Buku :</label>
                        <input type="text" class="form-control" name="kode_buku" id="kodeBuku" placeholder="Masukkan Kode Buku" value="{{ old('kode_buku') }}">
                    </div>
                    <div class="form-group">
                        <label for="judulBuku">Judul Buku :</label>
                        <input type="text" class="form-control" name="judul_buku" id="judulBuku" placeholder="Masukkan Judul Buku" value="{{ old('judul_buku') }}">
                    </div>
                    <div class="form-group">
                        <label for="penulisBuku">Penulis Buku :</label>
                        <input type="text" class="form-control" name="penulis_buku" id="penulisBuku" placeholder="Masukkan Penulis Buku" value="{{ old('penulis_buku') }}">
                    </div>
                    <div class="form-group">
                        <label for="penerbitBuku">Penerbit Buku :</label>
                        <input type="text" class="form-control" name="penerbit_buku" id="penerbitBuku" placeholder="Masukkan Penerbit Buku" value="{{ old('penerbit_buku') }}">
                    </div>
                    <div class="form-group">
                        <label for="tahunTerbit">Tahun Terbit Buku :</label>
                        <input type="number" class="form-control" name="tahun_terbit" id="tahunTerbit" placeholder="Masukkan Tahun Terbit Buku" value="{{ old('tahun_terbit') }}">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok Buku :</label>
                        <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukkan Stok Buku" value="{{ old('stok') }}">
                    </div>
                    <div class="form-group">
                        <label>Rak Buku :</label>
                        <select class="custom-select" name="rak_id" id="rak">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($raks as $key => $value )
                                <option value="{{ $value->id }}">{{ $value->nama_rak }}</option>
                            @empty
                                <option disabled>--Data Masih Kosong--</option>
                            @endforelse 
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('buku.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
        @endsection