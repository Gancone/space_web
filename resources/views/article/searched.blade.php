<x-main>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1>Risulati per la ricerca <span>{{$query}}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center text-center">
            @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article" />
            </div>

            @empty
            <div class="col-12">
                <h3>Nessun articolo corrisponde alla tua ricerca</h3>
            </div>

            @endforelse
        </div>

    </div>
    <div class="d-flex justify-content-center">
        {{$articles->links()}}
    </div>
</x-main>