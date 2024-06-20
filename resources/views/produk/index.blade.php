@extends('layout.main')

@section('title','Fakultas')

@section('content')
    {{-- <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <ul>
    @foreach ($fakultas as $item)
        <li>{{$item ["nama"]}}{{$item["singkatan"]}}</li>
    @endforeach --}}
    </ul>
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Service</h4>
                  <p class="card-description">
                    Add class <code> data Service</code>
                  </p>
                  <a href="{{route('produk.create')}}" class="btn btn-rounded btn-primary">Buat Formulir</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Jenis Barang </th>
                          <th>Harga Satuan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($produk as $item)
                        <tr>
                            <td>{{$item ["nama"]}}</td>
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

