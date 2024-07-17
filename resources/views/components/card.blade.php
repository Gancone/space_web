<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card mt-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->description}}.</p>
                    <p class="card-text">{{$article->price}}.</p>
                    <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Clicca qui</a>
                    @if($article->category)
                    <a
                        href="{{route('byCategory', ['category'=> $article->category->id])}}">{{$article->category->name}}</a>
                    @else
                    <p>Categoria non disponibile</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>