@extends('layouts.app-master')

@section('content')
    <div class="container">
        <div class="d-flex p-2 bd-highlight mb-3">
            <a href="{{ route('client.create') }}" class="btn btn-dark">Add</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="30%">Avatar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $key=>$item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td><img src="{{$item->getFirstMediaUrl('avatar', 'thumb')}}" / width="120px"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="#">facebook</a>
    </div>
@endsection
