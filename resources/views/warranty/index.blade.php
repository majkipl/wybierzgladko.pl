@extends('layouts.front')

@section('content')
    <section class="top d-flex flex-row align-items-center justify-content-center" id="top" style="background-image: url({{ asset('images/form-baner.png') }});">
        <h2 class="accent">Gwarancja</h2>
    </section>

    @include('warranty.section.warranty')
    @include('warranty.section.service')
@endsection
