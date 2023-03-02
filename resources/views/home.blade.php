{{-- extends file view/layouts/app.blade.php --}}
@extends('layouts.app')
@section('content')
    <h1 class="display-4">Home Page</h1>
    <p class="lead">This is homepage</p>

    {{-- variable nama dan pelajaran dikirim dari ManagementUserController --}}
    <p>Nama : {{$nama}}</p>
    <p>Pelajaran</p>
    <ul>
        @foreach ($pelajaran as $item)
        <li>{{$item}}</li>
    @endforeach
    </ul>
    
@endsection