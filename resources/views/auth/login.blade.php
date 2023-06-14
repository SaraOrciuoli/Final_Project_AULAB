<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>{{__('ui.accedi')}}</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="userEmail" class="form-label">{{__('ui.email')}}</label>
                        <input type="email" class="form-control" id="userEmail" name="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="userPassword" class="form-label">{{__('ui.password')}}</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="userRemember" name="remember">
                        <label for="userRemember" class="form-check-label">{{__('ui.resta connesso')}}</label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-card-announcement">{{__('ui.accedi')}}!</button>
                        <a href="{{route('register')}}" class="form-footer">{{__('ui.Non hai ancora un account? Registrati!')}}</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>