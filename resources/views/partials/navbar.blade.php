<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/duckbus-logo.png') }}" alt="Duckbus logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if ($title == 'Beranda') active @endif"><a href="/" class="nav-link">Beranda</a></li>
                <li class="nav-item @if ($title == 'Bus') active @endif"><a href="/bus" class="nav-link">Bus</a></li>
                <li class="nav-item @if ($title == 'Tentang Kami') active @endif"><a href="/about" class="nav-link">Tentang Kami</a></li>
                <li class="nav-item @if ($title == 'Kontak') active @endif"><a href="/contact" class="nav-link">Kontak</a></li>
            </ul>
        </div>

        @auth
            <form action="{{ route('filament.admin.auth.logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('filament.admin.auth.login') }}" class="btn btn-primary">Login</a>
        @endguest
    </div>
</nav>
<!-- END nav -->
