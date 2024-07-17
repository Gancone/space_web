<x-main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Articoli di categoria {{ $category->name }}</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">

            @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article" />
            </div>

            @empty
            <div class="col-12">
                <h3 class="text-center">Non ci sono ancora articoli</h3>
                @auth
                <a href="{{route('article.create')}}" class="btn">Pubblica un articolo</a>
                @endauth
            </div>


            @endforelse

        </div>
    </div>
</x-main>