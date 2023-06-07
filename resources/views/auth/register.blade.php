<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Registrati!</h1>
                <form method="POST" action="{{route('register')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" name="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="passwordConfirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="passwordConfirmation" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati!</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
