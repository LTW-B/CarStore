@extends('layouts.app')
@section('title', $linhkienData['title'])
@section('sect4')
    @foreach ($linhkienData['products'] as $product)
    
            <div class="col-md-4 col-lg-3 col-sm-12 mb-2 row d-flex  ">
                <div class="card">
                    {{-- --}}
                    <img src=" {{ route('upload.show', ['filename' => $product['hinhanh']]) }}" alt="image" class="card-img-top img-card">

                    <div class="card-body text-center">

                        {{--{{route('itemusedata.detail', ['iditem'=> $product-> getId() ] )}}  --}}
                        <a href=" " class="btn btn-primary text-white">
                            {{ $product-> getName() }}
                        </a>
                    </div>
                </div>
            </div>
        
    @endforeach
    </div>
@endsection
