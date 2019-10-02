<section class="slider d-block d-xl-none" id="baner-rwd">
    <ul id="homeHeroRwd">
        @if(!isset($showSlide))
            <li class="s1"></li>
        @endif

        @if (!isset($showSlide) || $showSlide === "psu")
            <li class="s2">
                @if($isHome)
                <a href="/power-steam-ultra/" class="d-block w-100 h-100">DOWIEDZ SIĘ WIĘCEJ</a>
                @else
                <a href="#whereBuy" class="d-block w-100 h-100 buy scroll-to">KUP TERAZ</a>
                @endif
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "ot")
            <li class="s3">
                @if($isHome)
                <a href="/one-temperature/" class="d-block w-100 h-100">DOWIEDZ SIĘ WIĘCEJ</a>
                @else
                <a href="#whereBuy" class="d-block w-100 h-100 buy scroll-to">KUP TERAZ</a>
                @endif
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "i")
            <li class="s4">
                @if($isHome)
                <a href="/impact/" class="d-block w-100 h-100">DOWIEDZ SIĘ WIĘCEJ</a>
                @else
                <a href="#whereBuy" class="d-block w-100 h-100 buy scroll-to">KUP TERAZ</a>
                @endif
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "pgr")
            <li class="s5">
                @if($isHome)
                <a href="/pearl-glide-rose/" class="d-block w-100 h-100">DOWIEDZ SIĘ WIĘCEJ</a>
                @else
                <a href="#whereBuy" class="d-block w-100 h-100 buy scroll-to">KUP TERAZ</a>
                @endif
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "sg")
            <li class="s6">
                @if($isHome)
                <a href="/steam-genie/" class="d-block w-100 h-100">DOWIEDZ SIĘ WIĘCEJ</a>
                @else
                <a href="#whereBuy" class="d-block w-100 h-100 buy scroll-to">KUP TERAZ</a>
                @endif
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "cot")
            <li class="s7">
                @if($isHome)
                <a href="/cordless-one-temperature/" class="d-block w-100 h-100">DOWIEDZ SIĘ WIĘCEJ</a>
                @else
                <a href="#whereBuy" class="d-block w-100 h-100 buy scroll-to">KUP TERAZ</a>
                @endif
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "cx")
            <li class="s8">
                @if($isHome)
                <a href="/copper-express/" class="d-block w-100 h-100">DOWIEDZ SIĘ WIĘCEJ</a>
                @else
                <a href="#whereBuy" class="d-block w-100 h-100 buy scroll-to">KUP TERAZ</a>
                @endif
            </li>
        @endif

    </ul>
</section>
