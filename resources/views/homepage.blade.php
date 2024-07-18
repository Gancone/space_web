<x-main>
    {{-- @dd($articles) --}}
    @if (session()->has('errorMessage'))
    <div class="alert text-center">
        {{session('errorMessage')}}
    </div>
    @endif

    @if (session()->has('message'))
    <div class="alert text-center">
        {{session('message')}}
    </div>
    @endif

    @auth
    <div class="d-flex justify-content-center mt-3">
        <a class="btn btn-dark mx-2" href="{{route('create.article')}}">Crea un articolo</a>
        <a class="btn btn-dark" href="{{route('article.index')}}">Articoli</a>

        @if (Auth::user()->is_revisor)
        <a class="btn btn-dark mx-2" href="{{route('revisor.index')}}">Zona revisore
            <span>{{\App\Models\Article::toBeRevisedCount() }}</span>
        </a>
        @endif

    </div>
    @endauth

    @forelse ($articles as $article )
    <div class="col-12 col-md-3">

        <x-card :article="$article" />
    </div>

    @empty
    <h3 class="text-center">Non sono ancora stati creati articoli</h3>
    @endforelse

</x-main>