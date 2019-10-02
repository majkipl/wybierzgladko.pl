<section class="comparison py--70 pt--0" id="comparison">
    <div class="container">
        <div class="row text-center mb--60">
            <div class="col-12 text-center wow fadeInUp" data-wow-duration="2s">
                <h2 class="text-uppercase">Nie możesz się zdecydować?<br />PORÓWNAJ <span class="text-lowercase">żelazka</span>:</h2>
            </div>
        </div>

        @include('home.section.comparisonXs')
        @include('home.section.comparisonLg')

    </div>
</section>

{{--{*include file="../popup/psu.tpl"}--}}
{{--{include file="../popup/ot.tpl"}--}}
{{--{include file="../popup/i.tpl"}--}}
{{--{include file="../popup/pgr.tpl"}--}}
{{--{include file="../popup/sg.tpl"*}--}}

{{--{include file="../popup/shops.tpl"}--}}
{{--{include file="../popup/buy.tpl"}--}}

@include('popup.shops')
@include('popup.buy')
