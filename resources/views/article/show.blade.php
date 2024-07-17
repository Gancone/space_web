<x-main>
    <div class="col-12 col-md-6 mb-3">
        <h2 class="text-center">{{ $article->title }}</h2>

        <div class="d-flex justify-content-center">
            <h3 class="text-center">{{ $article->price}}</h3>
            <h5 class="text-center">{{ $article->description}}</h5>
        </div>

    </div>
</x-main>