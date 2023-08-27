@extends('layouts.app')
@section('sect1')
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/public/' . $storeData['storeItem']->getImage()) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $storeData['storeItem']->getName() }}
                    (${{ $storeData['storeItem']->getPrice() }})
                    <p class="card-text">{{ $storeData['storeItem']->getDescription() }}</p>
                    <p class="card-text"><small class="text-muted">Add to Cart</small></p>
            </div>
        </div>
</div @endsection
