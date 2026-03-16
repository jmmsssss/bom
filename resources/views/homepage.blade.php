@extends('layout')

@section('head')
<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>
@endsection


@section('content')
    @include('hero')
    @include('content')
    @include('footer')

@endsection
