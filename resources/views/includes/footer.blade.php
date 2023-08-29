@php
    $dcComics = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];
    $shop = ['Shop DC', 'Shop DC Collectibles'];
    $dc = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Wrokshops', 'CPSC Certificates', 'Ratings', 'Show Help', 'Contact Us'];
    $sites = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
@endphp
<footer>
    <section id="info-links">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h3>
                            DC COMICS
                        </h3>
                        <ul>
                            @foreach ($dcComics as $e)
                                <li>
                                    <a href="#">{{ $e }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3>SHOP</h3>
                        <ul>
                            @foreach ($shop as $e)
                                <li>
                                    <a href="#">{{ $e }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h3>
                        DC
                    </h3>
                    <ul>
                        @foreach ($dc as $e)
                            <li>
                                <a href="#">{{ $e }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <h3>
                        SITES
                    </h3>
                    <ul>
                        @foreach ($sites as $e)
                            <li>
                                <a href="#">{{ $e }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="navbar">
            <a class="btn" href="#">SIGNUP NOW!</a>
            <ul>
                <li>
                    <h3>FOLLOW US</h3>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/footer-facebook.png') }}" alt="facebook logo">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/footer-twitter.png') }}" alt="Twitter logo">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/footer-youtube.png') }}" alt="Youtube logo">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/footer-pinterest.png') }}" alt="Pinterest logo">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/footer-periscope.png') }}" alt="Periscope logo">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
