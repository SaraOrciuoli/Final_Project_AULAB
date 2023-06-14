<x-layout>

<<<<<<< HEAD
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
=======
    <div class="wrapper">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row row-form animation-fade">

                <div class="col-12 col-md-6 img-side"></div>

                <div class="col-12 col-md-6 float-end d-flex align-items-center justify-content-center position-relative">
                    <div class="input-box">
                        <h4 class="title-form text-lightDark">Crea account</h4>
                        <form method="POST" action="{{route('register')}}">
                            @csrf
        
                            <div class="box-form my-4">
                                <input type="text" class="form-control form-control-custom input-custom input-form" id="name" name="name">
                                <label for="name" class="form-label">Nome Utente</label>
                            </div>
        
                            <div class="box-form my-4">
                                <input type="email" class="form-control form-control-custom input-custom" id="userEmail" name="email" aria-describedby="emailHelp">
                                <label for="userEmail" class="form-label">Email</label>
                            </div>
        
                            <div class="box-form my-4">
                                <input type="password" class="form-control form-control-custom input-custom" id="userPassword" name="password">
                                <label for="userPassword" class="form-label">Password</label>
                            </div>
        
                            <div class="box-form my-4">
                                <input type="password" class="form-control form-control-custom input-custom" id="passwordConfirmation" name="password_confirmation">
                                <label for="passwordConfirmation" class="form-label">Conferma Password</label>
                            </div>
        
                            <div>
                                <button type="submit" class="btn btn-card-announcement my-1">Registrati!</button>
                                <a href="{{route('login')}}" class="btn-register">Hai già un account? Accedi!</a>
                            </div>
                        </form>
                    </div>
                </div>
>>>>>>> 00a4d2fa0b0872833cffce022eca4bdaf10d6567

            </div>
        </div>
    </div>
</x-layout>
