@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Produk') }}</div>

                    <div class="card-body">
                        <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama produk:</label>
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Gambar produk:</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi produk:</label>
                                <input type="text" name="description" placeholder="Description" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Harga produk:</label>
                                <input type="number" name="price" placeholder="Price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Stok:</label>
                                <input type="number" name="stock" placeholder="Stock" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection