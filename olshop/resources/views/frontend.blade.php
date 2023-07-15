@extends('layouts.app')
@section('content')

    <h2 style="text-align: center">Hallo {{ Auth::user()->name }}</h2>
    <h3 style="text-align: center">Selamat datang di halaman frontend</h3>

@endsection