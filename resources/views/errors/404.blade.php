@extends('layouts.front')

@section('content')
    <section class="e404 bg--secondary py--100" id="e404">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 my-4">
                    <img src="{{ asset('images/404.png') }}" alt="404" class="d-block mx--auto"/>

                    <a href="{{ route('front.home') }}" class="cta-button-primary py--10 px--30 d-inline-block mb--0 mt"><span>POWRÓT DO STRONY GŁÓWNEJ</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
