<x-main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <h2>Revisor Dashboard</h2>
            </div>
        </div>

        {{-- Controllo se esiste un articolo da revisionare --}}
        @if ($article_to_check)
        <div class="row justify-content-center pt-3">
            {{-- Se ci sono immagini associate all'articolo --}}
            @if ($article_to_check->images->count())
            @foreach ($article_to_check->images as $key => $image)
            <div class="col-6 col-md-4 mb-4 text-center">
                <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow-sm"
                    alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}" loading="lazy" {{--
                    Attributo per il lazy loading delle immagini --}}>
            </div>
            @endforeach
            @else
            {{-- Se non ci sono immagini, usa segnaposto --}}
            @for ($i = 0; $i < 6; $i++) <div class="col-6 col-md-4 mb-4 text-center">
                <img src="https://picsum.photos/300" alt="Segnaposto" class="img-fluid rounded shadow-sm"
                    loading="lazy">
        </div>
        @endfor
        @endif

        {{-- Dettagli dell'articolo --}}
        <div class="d-flex flex-column justify-content-between">
            <div class="col-md-4">
                <h1 class="display-4">{{ $article_to_check->title }}</h1>
                <h3>Autore: <span class="font-weight-bold">{{ $article_to_check->user->name }}</span></h3>
                <h3>Prezzo: <span class="font-weight-bold">{{ $article_to_check->price }}€</span></h3>
                {{-- Categorie, verifica se funziona --}}
                @if(isset($article_to_check->category))
                <h3>Categoria: {{ $article_to_check->category->name }}</h3>
                @endif
                <h4 class="mt-3">{{ $article_to_check->description }}</h4>
            </div>

            {{-- Bottoni di azione --}}
            <div class="col-md-4 mt-4">
                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST"
                    class="d-inline-block mr-2">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger btn-lg">Rifiuta</button>
                </form>

                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST"
                    class="d-inline-block">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success btn-lg">Accetta</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Messaggio di sessione --}}
    @if (session()->has('message'))
    <div class="row justify-content-center mt-3">
        <div class="col-5 text-center alert alert-success">
            {{ session('message') }}
        </div>
    </div>
    @endif
    @else
    {{-- Se non ci sono articoli da revisionare --}}
    <div class="row justify-content-center mt-5">
        <div class="col-12 text-center">
            <h1 class="display-5">Nessun articolo da revisionare</h1>
            <a href="{{ route('homepage') }}" class="btn btn-primary btn-lg mt-4">Ritorna alla home</a>
        </div>
    </div>
    @endif
    </div>
</x-main>