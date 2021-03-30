@extends('barang.Layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                Edit Barang
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
                <form method="post" action="{{ route('barang.update', $barang->id_barang) }}" id="myForm">
                @csrf
                @method('PUT') 
                <div class="form-group">
                    <label for="Id_Barang">ID Barang</label>
                    <input type="text" name="Id_Barang" class="form-control" id="Id_Barang" value="{{ $barang->id_barang }}" ariadescribedby="Id_Barang" >
                </div>
                <div class="form-group">
                    <label for="Kode_Barang">Kode Barang</label>
                    <input type="text" name="Kode_Barang" class="form-control" id="Kode_Barang" value="{{ $barang->kode_barang }}" ariadescribedby="Kode_Barang" >
                </div>
                <div class="form-group">
                    <label for="Nama_Barang">Nama Barang</label>
                    <input type="Nama_Barang" name="Nama_Barang" class="form-control" id="Nama_Barang" value="{{ $barang->nama_barang }}" ariadescribedby="Nama_Barang" >
                </div>
                <div class="form-group">
                    <label for="Kategori_Barang">Kategori Barang</label>
                    <input type="Kategori_Barang" name="Kategori_Barang" class="form-control" id="Kategori_Barang" value="{{ $barang->kategori_barang }}" ariadescribedby="Kategori_Barang" >
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="Harga" name="Harga" class="form-control" id="Harga" value="{{ $barang->harga }}" ariadescribedby="Harga" >
                </div>
                <div class="form-group">
                    <label for="QTY">QTY</label>
                    <input type="QTY" name="QTY" class="form-control" id="QTY" value="{{ $barang->qty }}" ariadescribedby="QTY" >
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    @endsection