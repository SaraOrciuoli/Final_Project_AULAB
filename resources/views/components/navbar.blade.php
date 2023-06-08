<nav class="navbar navbar-expand-lg bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('announcements') }}">Tutti gli annunci</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('create_announcement') }}">Aggiungi
                            annuncio</a>
                    </li>
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-warning btn-sm position-relative" aria-current="page"
                                href="{{ route('revisor_index') }}">
                                Zona revisore <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ App\Models\Announcement::toBeRevisionedCount()}}
                                    <span class="visually-hidden">messaggio non letto</span>
                                </span>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Registrati!</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Accedi</a>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="categoriesDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('category_show', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            {{-- Logout --}}
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="btn btn-primary">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
