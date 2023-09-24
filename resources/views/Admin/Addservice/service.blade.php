@extends('layouts.admin')
@section('title', $serviceData['title'])
@section('content')
<div class="card">
    <div class="card-header">
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <span>Danh sách sản phẩm</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-borderd table-striped">
            <thead>
                <tr>
                    {{-- <th scope="col">ID</th> --}}
                    <th scope="col">Tên</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Dịch vụ</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Ngày</th>
                    {{-- <th scope="col">Sửa</th> --}}
                    <th scope="col">In phiếu </th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @foreach ($serviceData['data'] as $serviceData)
                    <tr>
                        {{-- <td>{{ $serviceData->id }}</td> --}}
                        <td>{{$serviceData->name }}</td>
                        <td>{{$serviceData->phone }}</td>
                        <td>{{$serviceData->service }}</td>
                        <td>{{$serviceData->description }}</td>
                        <td>{{$serviceData->date }}</td>
                        
                        {{-- <td>
                            <a class="btn btn-primary"
                                href="{{ route('admin.store.edit', ['id' =>$serviceData->id]) }}">
                                <i class="bi-pencil"></i>
                            </a>
                        </td> --}}
                        <td>
                            <a class="btn btn-primary" >
                                <i class="fa-solid fa-print"></i>
                            </a>
                        </td>

                        <td>
                            <form method="POST" action="{{ route('admin.service.delete', $serviceData->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                    <i class="bi-trash"></i>
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                    @php
                        $counter++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection