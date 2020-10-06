<nav class="d-flex flex-row justify-content-between align-items-center">
    <a href="{{ route('front.home') }}" title="Russell Hobbs" class="clear logo">
        <img src="{{ asset('images/logo.png') }}" alt="Russel Hobbs" />
    </a>

    <div style="height: 80px; width: 1px;"></div>

    <div id="dl-menu" class="dl-menuwrapper">
        <button class="hamburger hamburger--collapse dl-trigger" type="button" aria-label="MENU" id="hamburgerMenu">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{ route('front.home') }}" title="Wybierz gładko">Wybierz gładko</a>
            </li>
            <li>
                <a href="#">Żelazka</a>
                <ul class="dl-submenu">
                    <li><a href="{{ route('front.product.psu') }}" title="Power Steam Ultra">Power Steam Ultra</a></li>
                    <li><a href="{{ route('front.product.ot') }}" title="One Temperature">One Temperature</a></li>
                    <li><a href="{{ route('front.product.i') }}" title="Impact">Impact</a></li>
                    <li><a href="{{ route('front.product.pgr') }}" title="Pearl Glide Rose">Pearl Glide Rose</a></li>
                    <li><a href="{{ route('front.product.sg') }}" title="Steam Genie">Steam Genie</a></li>
                    <li><a href="{{ route('front.product.cot') }}" title="Cordless One Temperature">Cordless One Temperature</a></li>
                    <li><a href="{{ route('front.product.cx') }}" title="Copper Express">Copper Express</a></li>
                    <li><a href="{{ route('front.product.qss') }}" title="Quiet Super Steam">Quiet Super Steam</a></li>
                    <li><a href="{{ route('front.product.ccs') }}" title="Colour Control Supreme">Colour Control Supreme</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('front.warranty') }}" title="Satysfakcja gwarantowana">Satysfakcja gwarantowana</a>
            </li>
            <li>
                <a href="{{ route('front.home.contact') }}" title="Kontakt">Kontakt</a>
            </li>
            <li>
                <a href="{{ asset('pdf/regulamin.pdf') }}" title="Regulamin" target="_blank">Regulamin</a>
            </li>
        </ul>
    </div>
</nav>
