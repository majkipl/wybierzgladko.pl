<section class="top" id="top">

    <div class="container-fluid py--0 px--15 px-xl--60 container-navbar-menu">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/svg/logo.svg') }}" alt="Russell Hobbs" class="logo" />
            </a>
            <button class="hamburger hamburger--collapse float-right" type="button" aria-label="MENU">
			  <span class="hamburger-box">
				<span class="hamburger-inner"></span>
			  </span>
            </button>
        </nav>
    </div>

    <div class="container-menu">
        <div class="container-fluid py--0 px--15 px-xl--60 pb--30">
            <nav class="menu">
                <div class="navbar-collapse navbar-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link py--5" href="{{ route('front.home.quiz') }}">WYBIERZ GŁADKO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.home.irons') }}">ŻELAZKA</a>
                            <ul class="navbar-nav ml-auto text-capitalize">
                                <li class="nav-item">
                                    <a class="nav-link py--0" href="{{ route('front.product.psu') }}">power steam ultra</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py--0" href="{{ route('front.product.ot') }}">one temperature</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py--0" href="{{ route('front.product.i') }}">impact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py--0" href="{{ route('front.product.pgr') }}">pearl glide rose</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py--0" href="{{ route('front.product.sg') }}">steam genie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py--0" href="{{ route('front.product.cot') }}">Cordless One Temperature</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py--0" href="{{ route('front.product.cx') }}">Copper Express</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py--5" href="{{ route('front.home.satisfaction') }}">SATYSFAKCJA GWARANTOWANA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py--5" href="{{ route('front.home.contact') }}">KONTAKT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py--5" href="{{ asset('regulamin.pdf') }}" target="_blank" rel="noreferrer">REGULAMIN</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>
