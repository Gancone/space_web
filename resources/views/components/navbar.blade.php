<div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Expand at md</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Articoli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            {{-- FILTRO PER CATEGORIA --}}
                            @foreach ($categories as $category)

                            <li><a class="dropdown-item"
                                    href="{{route('article.byCategory', ['category'=> $category])}}">{{$category->name}}</a>
                            </li>
                            @if (!$loop->last)

                            <hr class="dropdown-divider">

                            @endif

                            @endforeach
                            {{-- FINE FILTRO PER CATEGORIA --}}
                        </ul>
                    </li>
                </ul>
                @guest
                <a class="btn btn-success" href="{{route('register')}}">Registrati</a>
                <a class="btn btn-info mx-2" href="{{route('login')}}">Login</a>
                @endguest
                @auth
                <a class="" href="{{route('article.create')}}">Crea Articolo</a>
                <a class="mx-3" href="{{route('article.index')}}">Articoli</a>
                @endauth
                <form role="search">
                    <input class="form-control mt-3" type="search" placeholder="Search" aria-label="Search">
                </form>

                @auth

                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-danger ms-2 mt-3">Logout</button>
                </form>

                @endauth
            </div>
        </div>
    </nav>
</div>