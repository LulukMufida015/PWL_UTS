@extends('barang.Layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('barang.create') }}"> Input barang</a>
            </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        {{-- <form method="post" action="{{url('cari')}}" id="myForm">
            @csrf
                <div class="form-group">
                <label for="Nim">Cari</label>
                <input type="text"name="nim"class="form-control"id="Nim"aria-describedby="Nim"  placeholder="Cari bedasarkan nim">
                </div>
                <button type="submit" class="btn btn-success mt-3">
            cari
            </button>
        </form> --}}
        <table class="table table-bordered">
            <tr>
            <th>ID Barang</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Harga</th>
            <th>QTY</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($barang as $brg)
                <tr>
                    <td>{{ $brg->id_barang }}</td>
                    <td>{{ $brg->kode_barang }}</td>
                    <td>{{ $brg->nama_barang }}</td>
                    <td>{{ $brg->kategori_barang }}</td>
                    <td>{{ $brg->harga }}</td>
                    <td>{{ $brg->qty }}</td>
                    <td>
                    <form action="{{ route('barang.destroy',['barang'=>$brg->id_barang]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('barang.show',['barang'=>$brg->id_barang]) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('barang.edit',['barang'=>$brg->id_barang]) }}">Edit</a>
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $barang->links() }}
@endsection