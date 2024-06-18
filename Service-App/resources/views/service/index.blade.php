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
                  <a href="{{route('service.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama </th>
                          <th>NO Hp</th>
                          <th>Alamat</th>
                          <th>Barang</th>
                          <th>Keluhan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($service as $item)
                        <tr>
                            <td>{{$item ["nama"]}}</td>
                            <td>{{$item["hp"]}}</td>
                            <td>{{$item ["alamat"]}}</td>
                            <td>{{$item["barang"]}}</td>
                            <td>{{$item ["keluhan"]}}</td>
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

