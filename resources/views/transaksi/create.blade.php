@extends('layout.main')

@section('title', 'Fakultas')

@section('content')
    {{-- Formulir Tambah Fakultas --}}
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaksi</h4>
                <p class="card-description">
                    Formulir Transaksi
                </p>
                <form method="POST" action="{{ route('service.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama')}}" placeholder="Nama">
                        @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ old('alamat')}}" placeholder="Alamat">
                        @error('alamat')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="barang">Barang</label>
                        <input type="text" class="form-control" name="barang" value="{{ old('barang')}}" placeholder="Barang">
                        @error('barang')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumblah">Jumlah</label>
                        <input type="number" class="form-control" name="jumblah" value="{{ old('jumblah')}}" placeholder="Jumlah">
                        @error('jumblah')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="produk_id">Nama Barang</label>
                        <select name="produk_id" id="produk_id" class="form-control">
                            @foreach ($produk as $item)
                                <option value="{{ $item['id'] }}" data-harga="{{ $item['harga'] }}">
                                    {{ $item['nama'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('produk_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Satuan</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" placeholder="Harga" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ url('service')}}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const produkSelect = document.getElementById('produk_id');
    const hargaInput = document.getElementById('harga');

    produkSelect.addEventListener('change', function () {
        const selectedOption = produkSelect.options[produkSelect.selectedIndex];
        const selectedPrice = selectedOption.getAttribute('data-harga');
        hargaInput.value = selectedPrice; // Mengatur nilai input harga
    });

    // Trigger change event to set initial value
    produkSelect.dispatchEvent(new Event('change'));
});
</script>
@endsection