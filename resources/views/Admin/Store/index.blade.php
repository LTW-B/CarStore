@extends('layouts.admin')
@section('title', $viewAdminData['title'])
@section('content')
    <div class="card">
        <div class="card-header">
            Manage Products of our Store
        </div>
        <div class="card-body">
            <table class="table table-borderd table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewAdminData['stores'] as $store )
                        <tr>
                            <td>{{ $store->getId() }}</td>
                            <td>{{ $store->getname() }}</td>
                            <td>
                                <a class="btn btn-primary"
                                href="#">
                                <i class="bi-pencil"></i>
                                </a> 
                            </td>
                            <td>
                                <form action="#" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
