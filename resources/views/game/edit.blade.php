<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-1">Modifica il tuo Gioco</h1>
            </div>
            <div class="col-6">
                <form method="POST" action="{{route('game_update', compact('game'))}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Titolo Gioco:</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{$game->name}}">
                    </div>

                    <select name="category" class="form-select mb-3" aria-label="Scegli Categoria">
                        <option selected>Scegli Categoria</option>
                        <option @if($game->category == 'Azione') selected @endif value="Azione">Azione</option>
                        <option @if($game->category == 'Picchiaduro') selected @endif value="Picchiaduro">Picchiaduro</option>
                        <option @if($game->category == 'GDR') selected @endif  value="GDR">GDR</option>
                        <option @if($game->category == 'Sport') selected @endif value="Sport">Sport</option>
                        <option @if($game->category == 'Strategia') selected @endif value="Strategia">Strategia</option>
                        <option @if($game->category == 'Platform') selected @endif value="Platform">Platform</option>
                    </select>

                    <div class="form-floating">
                        <textarea name="description" class="form-control mb-3" placeholder="Descrizione gioco" id="floatingTextarea2" style="height: 300px">{{$game->description}}</textarea>
                        <label for="floatingTextarea2">Descrizione</label>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Copertina:</label>
                        <input required name="img" type="file" class="form-control" id="img">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>