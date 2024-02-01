<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-1">Crea il tuo Gioco</h1>
            </div>
            <div class="col-6">
                <form method="POST" action="{{route('game_store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Titolo Gioco:</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>

                    <select name="category" class="form-select mb-3" aria-label="Scegli Categoria">
                        <option selected>Scegli Categoria</option>
                        <option value="Azione">Azione</option>
                        <option value="Picchiaduro">Picchiaduro</option>
                        <option value="GDR">GDR</option>
                        <option value="Sport">Sport</option>
                        <option value="Strategia">Strategia</option>
                        <option value="Platform">Platform</option>
                    </select>

                    <div class="form-floating">
                        <textarea name="description" class="form-control mb-3" placeholder="Descrizione gioco" id="floatingTextarea2" style="height: 300px"></textarea>
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