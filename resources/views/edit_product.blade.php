@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ubah data Produk') }}</div>

                    <div class="card-body">
                        <form action="{{ route('update_product', $product) }}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama produk:</label>
                                <input type="text" name="name" placeholder="Name" class="form-control"
                                    value="{{ $product->name }}">
                            </div>

                            <div class="form-group">
                                <label>Gambar:</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi produk:</label>
                                <input type="text" name="description" placeholder="Description" class="form-control"
                                    value="{{ $product->description }}">
                            </div>

                            <div class="form-group">
                                <label>Harga produk:</label>
                                <input type="number" name="price" placeholder="Price" class="form-control"
                                    value={{ $product->price }}>
                            </div>

                            <div class="form-group">
                                <label>stok:</label>
                                <input type="number" name="stock" placeholder="Stock" class="form-control"
                                    value={{ $product->stock }}>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">ubah data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection