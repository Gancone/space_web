<x-main>
    @auth
    <a class="btn btn-dark" href="{{route('article.create')}}">Crea un articolo</a>
    @endauth
</x-main>