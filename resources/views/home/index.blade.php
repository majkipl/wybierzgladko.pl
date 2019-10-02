@extends('layouts.front')

@section('content')
    {{--    {include file="section-baner.tpl" is_home=true}--}}
    @include('home.section.baner', ['isHome' => true])

    {{--    {include file="section-baner-rwd.tpl" is_home=true}--}}
    @include('home.section.banerRwd', ['isHome' => true])

    {{--    {include file="section-test.tpl"}--}}
    @include('home.section.test')

    {{--    {include file="section-comparison.tpl"}--}}
    @include('home.section.comparison')

    {{--    {include file="section-do-you-know.tpl"}--}}
    @include('home.section.doYouKnow')

    {{--    {include file="section-hesitate.tpl"}--}}
    @include('home.section.hesitate')

    {{--    {include file="section-contact.tpl"}--}}
    @include('home.section.contact')
@endsection
