<x-main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                Revisor Dashboard
            </div>
        </div>
        @if ($article_to_check)

        <div class="row justify-content-center pt-3">
            <div class="col-md-8">
                @for ($i=0; $i < 6; $i++) <div class="col-6 col-md-4 mb-4 text-center">
            </div>

            @endfor
            <div class="d-flex flex-column justify-content-between">
                <div>
                    <h1>{{ $article_to_check->title }}</h1>
                    <h3>Autore:{{ $article_to_check->user->name }}</h3>
                    <h3>{{ $article_to_check->price }}€</h3>
                    {{-- <h3>{{ $article_to_check->category->name }}</h3> --}} {{-- non funziona US 2 --}}
                    <h4>{{ $article_to_check->description }}</h4>
                </div>
                <div>
                    <form action="" method="POST">
                        @csrf
                        <button class="btn btn-danger">Rifiuta</button>
                    </form>
                    <form action="" method="POST">
                        @csrf
                        <button class="btn btn-success">Accetta</button>
                    </form>
                </div>

            </div>
        </div>
        @else
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Nessun articolo da revisionare</h1>
                <a href="{{route('homepage')}}">Ritorna alla home</a>
            </div>
        </div>
    </div>

    @endif
    </div>
</x-main>