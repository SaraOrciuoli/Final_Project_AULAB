<div class=" containerNav mx-auto bg-main fixed-top shadow transition">
    <nav class="navbar navbar-expand-lg p-0 ">
        <div class="container-fluid my-3 my-xxl-1 ">

            <a class="navbar-brand p-0" href="{{ route('homepage') }}"><img class="logo" src="/media/logo-b.png"
                    alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center ">
                    <li class="nav-item ">
                        <a class="nav-link text-acc" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-acc" aria-current="page" href="{{ route('announcements') }}">Tutti gli
                            annunci</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-acc" aria-current="page"
                                href="{{ route('create_announcement') }}">Aggiungi
                                annuncio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link  dropdown-toggle text-acc" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-acc" href="#">Profilo</a></li>
                                @if (Auth::user()->is_revisor)
                                    <li class="nav-item">
                                        <a class="nav-link position-relative text-acc" aria-current="page"
                                            href="{{ route('revisor_index') }}">
                                            Zona revisore <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ App\Models\Announcement::toBeRevisionedCount() }}
                                                <span class="visually-hidden">messaggio non letto</span>
                                            </span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-acc">Registrati!</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-acc">Accedi</a>
                        </li>
                    @endauth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-acc" id="categoriesDropdown" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="categoriesDropdown">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item text-acc drop-focus"
                                        href="{{ route('category_show', compact('category')) }}">{{ $category->name }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

                <div class="d-block d-md-flex">
                    {{-- Search button --}}

                    <input type="search" name="searched" class="form-control me-2" placeholder="Ricerca"
                        aria-label="Search">
                    <button class="btn d-none d-md-block text-acc btn-search my-btn" type="submit">Ricerca</button>
                    </form>
                    {{-- Logout --}}
                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="me-2">
                            @csrf

                            <button class="btn text-acc btn-logout my-btn">Logout</button>
                        </form>
                    @endauth
                </div>
                {{-- <div class="d-flex justify-item-evenly"> --}}
                <span class="nav-item">
                    <x-_locale lang='it' />
                </span>
                <span class="nav-item">
                    <x-_locale lang='en' />
                </span>
                <span class="nav-item">
                    <x-_locale lang='es' />
                </span>

                {{-- </div> --}}







            </div>
        </div>
    </nav>

</div>
