<x-main>
    <div class="col-12 col-md-6 mb-3">
        @if ($article->images->count()>0)
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach ($article->images as $key => $image )
                <div class="carousel-item @if ($loop->first) active  @endif">
                    <img src="{{ Storage::url($image->path)}}" class="d-block w-100"
                        alt="Immagine {{ $key +1}} di {{ $article->title}}">
                </div>

                @endforeach
            </div>
            @if ($article->images->count() > 1)
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            @endif
        </div>
        @else
        <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente">
        @endif
        <h2 class="text-center">{{ $article->title }}</h2>

        <div class="d-flex justify-content-center">
            <h3 class="text-center">{{ $article->price}}</h3>
            <h5 class="text-center">{{ $article->description}}</h5>
        </div>

    </div>
</x-main>