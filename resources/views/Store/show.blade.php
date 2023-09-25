@extends('layouts.app')
@section('sect1')
<div class="row ms-2 g-0">
    <div class="col-md-5">
        <img src="{{ route('store.showImage', ['filename' => $storeData['image']]) }}" class="img-fluid rounded-start" alt="{{ $storeData['storeItem']->name }}">
    </div>
    <div class="col-md-7">
        <div class="container">
            <div class="card-body pt-3">
                <h1 class="card-title text-capitalize">{{ $storeData['storeItem']->name }}</h1>
                <div class="row fs-3">
                    <div class="col-4 col-lg-2">
                        Giá
                    </div>
                    <div class="col">
                        <div class="ps-2 text-capitalize">
                            <strong>
                                ${{ $storeData['storeItem']->price }}
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="row fs-4">
                    <div class="col-4 col-lg-2">
                        Loại
                    </div>
                    <div class="col">
                        <div class="ps-2 text-capitalize">
                            {{ $storeData['storeItem']->category }}
                        </div>
                    </div>
                </div>
                <div class="row fs-4">
                    <div class="col-4 col-lg-2">
                        Tình trạng
                    </div>
                    <div class="col">
                        <div class="ps-2 text-capitalize">
                            {{ $storeData['storeItem']->condition }}
                        </div>
                    </div>
                </div>
                <div class="row fs-4">
                    <div class="col-4 col-lg-2">
                        Mô tả
                    </div>
                    <div class="col">
                        <p class="card-text">{{ $storeData['storeItem']->description }}</p>
                    </div>
                </div>

                <form action="{{ route('cart.add', ['id' => $storeData['storeItem']->id]) }}" method="post">
                    @csrf
                    <div class="row pt-5">
                        <div class="col-4 col-lg-2">
                            Số lượng
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input type="number" name="quantity" min="1" max="20" id="quantity"
                                    class="form-control quantity-input text-center" value="1">
                            </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-success" type="submit">
                                Thêm vào giỏ hàng <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
