<nav class="navbar navbar-expand-lg bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a href="/logout" class="dropdown-item" onclick="event.preventDefault();getElementById('form-logout').submit();"></a>Logout</li>
                            <form method="POST" action="{{route('logout')}}" id="form-logout" class="d-none">@csrf</form>
                        </ul>
                    </li>
                @else

                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link">Registrati!</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">Accedi</a>
                    </li>

                @endauth

            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
