<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>{{__('ui.registrati')}}!</h1>
                <form method="POST" action="{{route('register')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('ui.nome utente')}}</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="userEmail" class="form-label">{{__('ui.email')}}</label>
                        <input type="email" class="form-control" id="userEmail" name="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="userPassword" class="form-label">{{__('ui.password')}}</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="passwordConfirmation" class="form-label">{{__('ui.conferma password')}}</label>
                        <input type="password" class="form-control" id="passwordConfirmation" name="password_confirmation">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-card-announcement my-1">{{__('ui.registrati')}}!</button>
                        <a href="{{route('login')}}" class="form-footer">{{__('ui.Hai già un account? Accedi!')}}</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
