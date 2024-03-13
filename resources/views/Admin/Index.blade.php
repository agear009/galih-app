@extends('Layouts.MainAdmin')
@section('Container')

<div class="container mt-5">
@auth
<h1 center>Welcome Back {{ auth()->user()->name}}</h1>
@else
    <p>Anda harus login dulu</p>
@endauth
  @endsection
