<section class="compare pt--100" id="compare" data-url="/porownaj/">
    <div class="container">
        <h2 class="accent accent-right-none text-tertiary text-left mt--30"><span>Nie możesz się zdecydować?</span></h2>
        <h4 class="accent accent-right-none accent-color-transparent text-tertiary text-left mb--60"><span>Wskaż, na czym Ci najbardziej zależy</span></h4>
        @include('home.section.compare.filters')
    </div>

    <div class="irons bg--primary pb--100">
        <div class="container">
            <div class="grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>

                @include('home.section.compare.item.colour-control-supreme')
                @include('home.section.compare.item.quiet-super-steam')
                @include('home.section.compare.item.power-steam-ultra')
                @include('home.section.compare.item.one-temperature')
                @include('home.section.compare.item.impact')
                @include('home.section.compare.item.pearl-glide-rose')
                @include('home.section.compare.item.steam-genie')
                @include('home.section.compare.item.cordless-one-temperature')
                @include('home.section.compare.item.copper-express')
            </div>
        </div>
    </div>
</section>
