@extends('layouts.app')
@section('title', $linhkienData['title'])
@section('sect4')
<div class="row">
    @foreach ($linhkienData['products'] as $product)
        <div class="col-md-4 col-lg-3 col-sm-12 mb-2 row d-flex">
            <div class="card">
                {{-- Set a fixed height for the image container --}}
                <div class="image-container" style="height: 200px; overflow: hidden;">
                    <img src="{{ route('upload.show', ['filename' => $product['image']]) }}" alt="image" class="card-img-top img-card">
                </div>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-primary text-white">
                        {{ $product->getName() }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
