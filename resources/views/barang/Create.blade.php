@extends('barang.Layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                Tambah Barang
                </div>
                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('barang.store') }}" id="myFo
                rm">
                @csrf
                <div class="form-group">
                <label for="Id_Barang">ID Barang</label>
                    <input type="text" name="Id_Barang" class="form-control" id="Id_Barang" aria-describedby="Id_Barang" >
                </div>
                <div class="form-group">
                    <label for="Kode_Barang">Kode Barang</label>
                    <input type="Kode_Barang" name="Kode_Barang" class="form-control" id="Kode_Barang" aria-describedby="Kode_Barang" >
                </div>
                <div class="form-group">
                    <label for="Nama_Barang">Nama_Barang</label> 
                    <input type="Nama_Barang" name="Nama_Barang" class="form-control" id="Nama_Barang" aria-describedby="password" >
                </div>
                <div class="form-group">
                    <label for="Kategori_Barang">Kategori Barang</label>
                    <input type="Kategori_Barang" name="Kategori_Barang" class="form-control" id="Kategori_Barang" aria-describedby="Kategori_Barang" >
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="Harga" name="Harga" class="form-control" id="Harga" aria-describedby="Harga" >
                </div>
                <div class="form-group">
                    <label for="QTY">QTY</label>
                    <input type="QTY" name="QTY" class="form-control" id="QTY" aria-describedby="QTY" >
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection