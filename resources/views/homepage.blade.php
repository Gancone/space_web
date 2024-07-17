<x-main>
    @auth
    <div class="d-flex justify-content-center mt-3">
        <a class="btn btn-dark mx-2" href="{{route('article.create')}}">Crea un articolo</a>
        <a class="btn btn-dark" href="{{route('article.index')}}">Articoli</a>

    </div>
    @endauth

    @forelse ($articles as $article )
    <x-card :article="$article" />

    @empty
    <h3 class="text-center">Non sono ancora stati creati articoli</h3>
    @endforelse

</x-main>