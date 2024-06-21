@extends('layout.main')

@section('title', 'Edit Transaksi')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Transaksi</h4>
                    <p class="card-description">
                        Formulir Edit Transaksi
                    </p>
                    <form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="barang">Tipe Barang</label>
                            <input type="text" class="form-control" name="barang" value="{{ old('barang', $transaksi->barang) }}" placeholder="Barang">
                            @error('barang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jumblah">Jumlah</label>
                            <input type="text" class="form-control" name="jumblah" value="{{ old('jumblah', $transaksi->jumblah) }}" placeholder="Jumlah">
                            @error('jumblah')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="produk_id">Nama Barang</label>
                            <select name="produk_id" id="produk_id" class="form-control">
                                @foreach ($produk as $item)
                                    <option value="{{ $item->id }}" data-harga="{{ $item->harga }}" {{ $item->id == $transaksi->produk_id ? 'selected' : '' }}>
                                        {{ $item->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('produk_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Satuan</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga', $transaksi->harga) }}" placeholder="Harga" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ url('transaksi') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
