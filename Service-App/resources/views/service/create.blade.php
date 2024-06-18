@extends('layout.main')

@section('title','Fakultas')

@section('content')
<div class="row">
    {{-- formulirtambah fakultas --}}
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Service</h4>
            <p class="card-description">
              Formulir Service
            </p>
            <form method="POST" action="{{ route('service.store')}}" class ="forms-sample">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="nama" class="form-control" name="nama" value="{{ old('nama')}}" placeholder="Nama">
                @Error('nama')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input type="no_hp" class="form-control" name="no_hp" value="{{ old('no_hp')}}" placeholder="no_hp">
                @Error('no_hp')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" class="form-control" name="alamat" value="{{ old('alamat')}}" placeholder="masukan alamat yang lengkap">
                @Error('alamat')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
            <div class="form-group">
                <label for="barang">Barang</label>
                <input type="barang" class="form-control" name="barang" value="{{ old('barang')}}" placeholder="barang">
                @Error('barang')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <input type="keluhan" class="form-control" name="keluhan" value="{{ old('keluhan')}}" placeholder="keluhan">
                @Error('keluhan')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{ url('service')}}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection