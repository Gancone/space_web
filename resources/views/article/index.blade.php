<x-main>

    <div class="row justify-content-center align-items-center">
        @forelse ($articles as $article)
        <div class="col-12 col-md-3">
            <x-card :article="$article" />
        </div>

        @empty
        <div class="col-12">
            <h3 class="text-center">Non ci sono ancora articoli</h3>

        </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-main>