<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center">Dettaglio Gioco</h1>
            </div>
            <div class="col-6">
                <h3 class="display-3">{{$game->name}}</h3>
                <h5 class="display-5">{{$game->category}}</h5>
                <p>{{$game->description}}</p>
                <a href="{{route('game_edit', compact('game'))}}" class="btn btn-warning">Modifica Gioco</a>
                <form method="POST" action="{{route('game_delete', compact('game'))}}">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">Elimina Gioco</button>
                </form>
            </div>
            <div class="col-6">
                <img src="{{Storage::url($game->img)}}" alt="" height="600">
            </div>
        </div>
    </div>
</x-layout>