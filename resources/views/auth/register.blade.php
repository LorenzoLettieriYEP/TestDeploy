<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-1">Registrati</h1>
            </div>
            <div class="col-6">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address:</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente:</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password:</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Ripeti Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>