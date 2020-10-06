@extends('layouts.front', ['isHome' => true])

@section('content')
    @include('home.section.hero')
    @include('home.section.compare')
    @include('home.section.know')
    @include('home.section.hesitate')
    @include('home.section.contact')
    @include('home.section.partners')

    @include('popup.shops')
    @include('popup.buy')
@endsection
