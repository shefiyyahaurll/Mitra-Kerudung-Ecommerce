@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pesanan') }}</div>

                    <div class="card-body m-auto">
                        @foreach ($orders as $order)
                            <div class="card mb-2" style="width: 30rem;">
                                <div class="card-body">
                                    <a href="{{ route('show_order', $order) }}">
                                        <h5 class="card-title">Order ID: {{ $order->id }}</h5>
                                    </a>
                                    <h6 class="card-subtitle mb-2 text-muted">By {{ $order->user->name }}</h6>

                                    @if ($order->is_paid == true)
                                        <p class="card-text">Sudah dibayar</p>
                                    @else
                                        <p class="card-text">Belum dibayar</p>
                                        @if ($order->payment_receipt)
                                            <div class="d-flex flew-row justify-content-around">
                                                <a href="{{ url('storage/' . $order->payment_receipt) }} "
                                                    class="btn btn-primary">Tampilkan bukti pembayaran</a>
                                                @if(Auth::user()->is_admin)
                                                    <form action="{{ route('confirm_payment', $order) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-success" type="submit">Konfirmasi pembayaran</button>
                                                    </form>
                                                @endif
                                                
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection