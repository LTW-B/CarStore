@extends('layouts.app')
@section ('title' , $linhkienData['title'] )
@section('sect1')
@foreach ($linhkienData['content'] as $product)
<div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
        <img src="{{ route('upload.show', ['filename' => $product['image']]) }}" alt="image" class="card-img-top img-card">

        <div class="card-body text-center">
            <a href=" {{route('itemusedata.detail', ['iditem'=> $product-> getId() ] )}}" class="btn btn-primary text-white">
               {{ $product-> getName() }}
            </a>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection