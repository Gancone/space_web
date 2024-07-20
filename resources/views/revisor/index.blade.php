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
                @if ($article_to_check->images->count())
                @foreach ($article_to_check->images as $key=> $image )
                <div class="col-6 col-md-4 mb-4 text-center">
                    <img src="{{Storage::url($image->path)}}" class="img-fluid"
                        alt="Immagine {{$key +1}} dell'articolo {{$article_to_check->title}}">
                </div>

                @endforeach
                @else

                @for ($i=0; $i < 6; $i++) <div class="col-6 col-md-4 mb-4 text-center">
                    <img src="https://picsum.photos/300" alt="segnaposto" class="img-fluid">
            </div>
            @endfor
            @endif

            <div class="d-flex flex-column justify-content-between">
                <div class="col-md-4">
                    <h1>{{ $article_to_check->title }}</h1>
                    <h3>Autore:{{ $article_to_check->user->name }}</h3>
                    <h3>{{ $article_to_check->price }}€</h3>
                    {{-- <h3>{{ $article_to_check->category->name }}</h3> --}} {{-- non funziona US 2 --}}
                    <h4>{{ $article_to_check->description }}</h4>
                </div>
                <div class="col-md-4">
                    <form action="{{route('reject', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger">Rifiuta</button>
                    </form>

                    <form action="{{route('accept', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success">Accetta</button>
                    </form>
                </div>
                @if (session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-5 text-center alert-success">
                        {{session('message')}}
                    </div>
                </div>
                @endif
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

    </div>

    </div>
</x-main>