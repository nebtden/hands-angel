@extends('layouts.app')

@section('content')
    @include('home.slider')
    @include('home.categories')
    @include('home.most')
    @include('home.download')
    @include('home.news')


@endsection

@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="/revolution/css/layers.css">
@endsection
