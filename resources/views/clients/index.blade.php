<<<<<<< HEAD
@extends('layouts.app-master')
@section('content')
    <h1 class="mb-3" style="color: purple">Laravel9: Please Add Client</h1>
    <div class="container">
        <div class="d-flex p-2 bd-highlight mb-3">
            <a href="{{ route('client.create') }}" class="btn btn-dark">Add Client</a><br>
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Integrate Spatie Medialibrary in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <div class="d-flex p-2 bd-highlight mb-3 gx-5 row mt-3">
            <h3 class="text-success col">Clients</h3>
            <div class="col d-flex justify-content-end gap-3">
                <a href="{{ route('clients.create') }}" class="btn btn-dark px-3">Add</a>
                <a href="{{ route('home.index') }}" class="btn btn-info px-3">Back</a>
            </div>
>>>>>>> 3a87cf1ab192c0e5950167c2811b33d62e899b68
        </div>
        <table class="table">
            <thead>
                <tr>
<<<<<<< HEAD
                    <th>No</th>
=======
                    <th>#</th>
>>>>>>> 3a87cf1ab192c0e5950167c2811b33d62e899b68
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
    </div>
<<<<<<< HEAD
@endsection
=======
</body>
</html>
>>>>>>> 3a87cf1ab192c0e5950167c2811b33d62e899b68
