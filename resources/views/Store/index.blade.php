@extends('layouts.app')
@section('sect1')
    <div class="row">
        @foreach ($storeData['stores'] as $store)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/img/' . $store->getImage()) }}" class="card-img-top">
                    <div class="card-body text-center">
                        <a href="{{ route('store.show', ['id' => $store->getId()]) }}" class="btn bg-primary text-white">
                            {{ $store->getName() }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
