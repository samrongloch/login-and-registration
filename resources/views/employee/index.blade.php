@extends('layouts.app-master')

@section('content')
    @auth
        <div class="row">
            <div class="col-md-12" style="box-shadow: 0px 0px 10px grey">
                <table class="table table-striped p-4 table-hover table-bordered mt-3 table-success">
                    <tr class="text-center table table-dark">
                        <td><strong>ID</strong></td>
                        <td><strong>Username</strong></td>
                        <td><strong>Email</strong></td>
                        <td colspan="3"><strong>Option</strong></td>
                    </tr>
                    @foreach ($user as $item)
                        <tr class="text-center">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="#" class="btn btn-success">view</a></td>
                            <td><a href="#" class="btn btn-primary">edit</a></td>
                            <td><a href="#" class="btn btn-danger">delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endauth
@endsection
