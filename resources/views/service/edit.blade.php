@extends('layout.main')

@section('title','Edit Service')

@section('content')

    {{-- formulir edit fakultas --}}
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Service</h4>
            <p class="card-description">
              Formulir Edit Service
            </p>
            <form method="POST" action="{{ route('service.update', $service->id) }}" class ="forms-sample">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama', $service->nama) }}" placeholder="Nama">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="hp">No Hp</label>
                <input type="number" class="form-control" name="hp" value="{{ old('hp', $service->hp) }}" placeholder="hp">
                @error('hp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $service->alamat) }}" placeholder="masukan alamat yang lengkap">
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            <div class="form-group">
                <label for="barang">Barang</label>
                <input type="text" class="form-control" name="barang" value="{{ old('barang', $service->barang) }}" placeholder="barang">
                @error('barang')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <input type="text" class="form-control" name="keluhan" value="{{ old('keluhan', $service->keluhan) }}" placeholder="keluhan">
                @error('keluhan')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Update</button>
              <a href="{{ url('service') }}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>

@endsection
