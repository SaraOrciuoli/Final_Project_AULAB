<x-layout>

    <div class="wrapper">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row row-form animation-fade">

                <div class="col-12 col-md-6 img-side"></div>

                <div class="col-12 col-md-6 float-end d-flex align-items-center justify-content-center position-relative">
                    <div class="input-box">
                        <h4 class="title-form text-lightDark">Crea account</h4>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                        
                            <div class="box-form">
                                <input type="email" class="form-control form-control-custom input-custom input-form" id="userEmail" name="email" aria-describedby="emailHelp">
                                <label for="userEmail" class="form-label">Email</label>
                            </div>
                        
                            <div class="box-form my-4">
                                <input type="password" class="form-control form-control-custom input-custom input-form" id="userPassword" name="password">
                                <label for="userPassword" class="form-label">Password</label>
                            </div>
                        
                            <div class="form-check my-4">
                                <input type="checkbox" class="form-check-input" id="userRemember" name="remember">
                                <label for="userRemember" class="form-check-label text-lightDark">Resta connesso</label>
                            </div>
                        
                            <div>
                                <button type="submit" class="btn btn-card-announcement">Accedi!</button>
                                <a href="{{route('register')}}" class="btn-register">Non hai un account? Registrati!</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>