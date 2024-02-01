<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h1 class="text-center display-1">Tutti i giochi!</h1>
            </div>
            @foreach($games as $game)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($game->img)}}" class="card-img-top" alt="..." height="300">
                    <div class="card-body">
                    <h5 class="card-title">{{$game->name}}</h5>
                    <p class="card-text">{{$game->category}}</p>
                    <a href="{{route('game_show', compact('game'))}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</x-layout>