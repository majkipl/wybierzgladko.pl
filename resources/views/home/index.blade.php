@extends('layouts.front')

@section('content')
    @include('home.section.baner', ['isHome' => true])
    @include('home.section.banerRwd', ['isHome' => true])
    @include('home.section.test')
    @include('home.section.comparison')
    @include('home.section.doYouKnow')
    @include('home.section.hesitate')
    @include('home.section.contact')
@endsection
