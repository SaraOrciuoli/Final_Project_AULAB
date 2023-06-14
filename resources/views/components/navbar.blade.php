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
                        <a class="nav-link text-acc" aria-current="page"
                            href="{{ route('homepage') }}">{{ __('ui.home') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-acc" aria-current="page"
                            href="{{ route('announcements') }}">{{ __('ui.tutti gli annunci') }}</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-acc" aria-current="page"
                                href="{{ route('create_announcement') }}">{{ __('ui.aggiungi annuncio') }}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link  dropdown-toggle text-acc" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-acc" href="#">{{ __('ui.profilo') }}</a></li>
                                @if (Auth::user()->is_revisor)
                                    <li class="nav-item">
                                        <a class="dropdown-item position-relative text-acc p-revisor" aria-current="page"
                                            href="{{ route('revisor_index') }}">
                                            {{ __('ui.zona revisore') }} <span
                                                class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-danger">{{ App\Models\Announcement::toBeRevisionedCount() }}
                                                <span class="visually-hidden">messaggio non letto</span>
                                            </span>
                                        </a>
                                    </li>
                                @endif
                                {{-- Logout --}}
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="me-2" id="logoutForm">
                                        @csrf
            
                                        <a class="dropdown-item text-acc" id="logout">{{ __('ui.logout') }}</a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-acc">{{ __('ui.registrati') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-acc">{{ __('ui.accedi') }}</a>
                        </li>
                    @endauth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-acc" id="categoriesDropdown" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('ui.categorie') }}
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

                    <input type="search" name="searched" class="form-control me-2"
                        placeholder="{{ __('ui.ricerca') }}" aria-label="Search">
                    <button class="btn d-none d-md-block text-acc btn-search my-btn"
                        type="submit">{{ __('ui.ricerca') }}</button>
                    </form>
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
