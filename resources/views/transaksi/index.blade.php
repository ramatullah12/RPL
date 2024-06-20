@extends('layout.main')

@section('title','Transaksi')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Transaksi</h4>
                  <p class="card-description">
                    Add class <code> data Transaksi</code>
                  </p>
                  <a href="{{route('transaksi.create')}}" class="btn btn-rounded btn-primary">Buat Formulir</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tipe Barang</th>
                          <th>Jumblah</th>
                          <th>Nama Barang</th>
                          <th>Harga Satuan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($transaksi as $item)
                        <tr>
                            <td>{{$item ["barang"]}}</td>
                            <td>{{$item["jumblah"]}}</td>
                            <td>{{$item["produk"]["nama"]}}</td>
                            <td>{{$item["harga"]}}</td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@if (session('success'))     
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    Swal.fire({
      title: "Good job!",
      text: "{{ session('success') }}",
      icon: "success"
    });
  </script>
@endif
@endsection

