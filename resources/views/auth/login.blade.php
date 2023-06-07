<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Accedi</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" name="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="userRemember" name="remember">
                        <label for="userRemember" class="form-check-label">Resta connesso</label>
                    </div>


                    <button type="submit" class="btn btn-primary">Registrati!</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
