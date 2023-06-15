<x-layout>

    <div class="wrapper">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row row-form animation-fade">

                <div class="col-12 col-md-6 img-side"></div>

                <div class="col-12 col-md-6 float-end d-flex align-items-center justify-content-center position-relative">
                    <div class="input-box">
                        <h4 class="title-form text-lightDark">{{__('ui.crea account')}}</h4>
                        <form method="POST" action="{{route('register')}}">
                            @csrf
        
                            <div class="box-form my-4">
                                <input type="text" class="form-control form-control-custom input-custom input-form" id="name" name="name">
                                <label for="name" class="form-label">{{__('ui.nome utente')}}</label>
                            </div>
        
                            <div class="box-form my-4">
                                <input type="email" class="form-control form-control-custom input-custom" id="userEmail" name="email" aria-describedby="emailHelp">
                                <label for="userEmail" class="form-label">{{__('ui.email')}}</label>
                            </div>
        
                            <div class="box-form my-4">
                                <input type="password" class="form-control form-control-custom input-custom" id="userPassword" name="password">
                                <label for="userPassword" class="form-label">{{__('ui.password')}}</label>
                            </div>
        
                            <div class="box-form my-4">
                                <input type="password" class="form-control form-control-custom input-custom" id="passwordConfirmation" name="password_confirmation">
                                <label for="passwordConfirmation" class="form-label">{{__('ui.conferma password')}}</label>
                            </div>
        
                            <div>
                                <button type="submit" class="btn btn-card-announcement my-1">{{__('ui.registrati')}}!</button>
                                <a href="{{route('login')}}" class="btn-register">{{__('ui.Hai già un account? Accedi!')}}</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
