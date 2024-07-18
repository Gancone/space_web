<x-main>
    <p>nome: {{ $user->name}}</p>
    <p>email: {{ $user->email}}</p>
    <a href="{{route('make.revisor', compact('user'))}}">Rendilo revisore</a>
</x-main>