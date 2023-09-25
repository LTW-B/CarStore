@extends('layouts.app')
@section('title', $myOrder['title'])
@section('subtitle', $myOrder['subtitle'])
@section('sect5')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Danh sách hóa đơn</h2>
            </div>
        </div>
        @php
            // Đảo ngược danh sách đơn hàng
            $reversedOrders = $myOrder['orders']->reverse();
        @endphp
        @forelse ($reversedOrders as $order)
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Hoá đơn số #{{ $order->getId() }}
                        </div>
                        <div class="card-body">
                            <div class="fs-5">
                                <b>Date:</b> {{ $order->getCreatedAt() }}<br />
                                <b>Total:</b> ${{ $order->getTotal() }}<br />
                            </div>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">ID sản phẩm</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $orderTotal = 0;
                                    @endphp
                                    @foreach ($order->getItems() as $item)
                                        @php
                                            $subtotal = $item->price * $item->quantity;
                                            $orderTotal += $subtotal;
                                        @endphp
                                        <tr>
                                            <td>{{ $item->getId() }}</td>
                                            <td>
                                                <a class="link-success"
                                                    href="{{ route('store.show', ['id' => $item->getProduct()->id]) }}">
                                                    {{ $item->getProduct()->name }}
                                                </a>
                                            </td>
                                            <td>${{ $item->price }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>${{ $subtotal }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4" class="text-end"><strong>Tổng cộng:</strong></td>
                                        <td>${{ $orderTotal }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger" role="alert">
                Có vẻ bạn chưa mua sản phẩm nào trong cửa hàng của chúng tôi =(
            </div>
        @endforelse
    </div>
@endsection
