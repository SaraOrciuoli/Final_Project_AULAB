<div class="containerNav mx-auto bg-main fixed-top shadow transition">
    <nav class="navbar navbar-expand-lg p-0 ">
        <div class="container-fluid my-3 my-xxl-1">

            <a class="navbar-brand p-0" href="{{ route('homepage') }}"><img class="logo" src="/media/logo-b.png"
                    alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span id="hamburger" class="text-acc"><i class="fa-solid fa-bars fa-lg"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (Auth::user())
                    <ul class="navbar-nav mx-auto justify-content-start d-flex mb-2 mb-lg-0 align-items-md-start align-items-lg-center border-top-sma">
                    @else
                        <ul class="navbar-nav ms-auto justify-content-start d-flex mb-2 mb-lg-0 align-items-md-start align-items-lg-center border-top-sma">
                @endif
                <li class="nav-item">
                    <a class="nav-link text-acc" aria-current="page"
                        href="{{ route('homepage') }}">{{ __('ui.home') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-acc" aria-current="page"
                        href="{{ route('announcements') }}">{{ __('ui.annunci') }}</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-acc" aria-current="page"
                            href="{{ route('create_announcement') }}">{{ __('ui.aggiungi annuncio') }}</a>
                    </li>
                @endauth
                @if (Auth::user())
                    <li class="nav-item">
                        <a class="nav-link text-acc" aria-current="page" href="{{ route('contact_us') }}">{{__('ui.contattaci')}}</a>
                    </li>
                @else
                    <li class="nav-item me-3">
                        <a class="nav-link text-acc" aria-current="page" href="{{ route('contact_us') }}">{{__('ui.contattaci')}}</a>
                    </li>
                @endif
                <li class="nav-item dropdown d-block d-md-block d-lg-none">
                    <a class="btn-acc dropdown-toggle text-acc nav-link" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categoria
                    </a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <hr class="dropdown-divider">
                        @foreach ($categories as $category)
                            <li>
                                <a class="text-acc fs-5 p-2"
                                    href="{{ route('category_show', compact('category')) }}">{{ $category->name }}</a>
                                    <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>


                {{-- Button traduzione --}}
                <div class="d-block d-md-block d-lg-flex">
                    <div class="dropdown">
                        <a class=" text-acc dropdown-toggle p-0 m-lg-3 border-0 scroll-color" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-earth-europe fa-lg icon-translate"></i>
                        </a>
                        <ul class="dropdown-menu bg-dark w-50 dropdown-menu-sma">
                            <li>
                                <x-_locale lang='it' />
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <x-_locale lang='en' />
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <x-_locale lang='es' />
                            </li>
                        </ul>
                    </div>

                    {{-- dropdown utente --}}

                    <ul class="p-0 mb-2 mb-lg-0 align-items-center d-flex ms-0 ms-md-0 ms-lg-2">
                        @auth
                            <li class="nav-item dropdown mt-2 mt-md-2 mt-lg-0">
                                <a class="dropdown-toggle text-acc box-search scroll-color" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-user fa-lg"></i>
                                </a>
                                <ul class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->is_revisor)
                                        <li class="nav-item">
                                            <a class="dropdown-item position-relative text-acc p-revisor "
                                                aria-current="page" href="{{ route('revisor_index') }}">
                                                {{ __('ui.zona revisore') }} <span
                                                    class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-danger">{{ App\Models\Announcement::toBeRevisionedCount() }}
                                                    <span class="visually-hidden">{{__('ui.messaggio non letto')}}</span>
                                                </span>
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    {{-- Logout --}}

                                    <li>
                                        <a class="dropdown-item text-acc " href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('ui.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @else
                            <li class="nav-item mx-2">
                                <a href="{{ route('register') }}" class="nav-link text-acc">{{ __('ui.registrati') }}</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="{{ route('login') }}" class="nav-link text-acc">{{ __('ui.accedi') }}</a>
                            </li>
                        @endauth
                    </ul>

                </div>
                <div class="my-2 ms-0 ms-md-0 ms-lg-4">
                    {{-- Search button --}}
                    <form method="GET" action="{{ route('search_announcements') }}" class="d-flex box-search scroll-color">
                        <input type="search" name="searched"
                            class="form-control p-0 form-search box-search scroll-color placeholder-custom"
                            placeholder="{{ __('ui.ricerca') }}" aria-label="Search">

                        <button class="btn p-0 me-2 box-search text-acc scroll-color" type="submit"><i
                                class="fa-solid fa-magnifying-glass fa-lg box-search scroll-color"></i></button>
                    </form>
                </div>


            </div>
        </div>
    </nav>
    @if (session('access'))
        <div class="alert alert-danger"><i class="fa-solid fa-triangle-exclamation fa-lg"></i> {{ session('access') }}
        <button type="button" class="float-end btn-close" data-bs-dismiss="alert" aria-label="Chiudi avviso"></button></div>
    @endif
</div>
