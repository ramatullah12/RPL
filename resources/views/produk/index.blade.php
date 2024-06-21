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
                  <h4 class="card-title">Produk</h4>
                  <p class="card-description">
                    Add class <code> data Produk</code>
                  </p>
                  
                  <a href="{{route('produk.create')}}" class="btn btn-rounded btn-primary">Buat Formulir</a>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Jenis Barang </th>
                          <th>Harga Satuan</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($produk as $item)
                        <tr>
                            <td>{{$item ["nama"]}}</td>
                            <td>{{$item["harga"]}}</td>
                            <td>
                              <a href="{{ route('produk.edit', $item["id"]) }}" class="btn btn-sm btn-rounded btn-warning">Ubah</a>
                              <form action="{{ route('produk.destroy', $item["id"]) }}" method="post" style="display:inline-block;">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" data-name="{{ $item["nama"] }}">Hapus</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
<script>
  Swal.fire({
      title: "Good job!",
      text: "{{ session('success') }}",
      icon: "success"
  });
</script>
@endif

{{-- confirm dialog --}}
<script type="text/javascript">
  $('.show_confirm').click(function(event) {
      let form = $(this).closest("form");
      let name = $(this).data("name");
      event.preventDefault();
      Swal.fire({
          title: "Apakah yakin mau menghapus data " + name + "?",
          text: "Setelah dihapus, data tidak bisa dikembalikan!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "YA, Hapus!"
      }).then((result) => {
          if (result.isConfirmed) {
              form.submit();
          }
      });
  });
</script>
@endsection