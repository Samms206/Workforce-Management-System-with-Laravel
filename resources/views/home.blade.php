@extends('layouts.navbar')

@section('title', 'Home')
    
@section('content')
    
    <h2>Welcome {{ Auth::user()->name }} </h2>

@endsection