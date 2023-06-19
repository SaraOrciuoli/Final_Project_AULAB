<x-layout>

    <div class="container-fluid bg-annunci">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-11 col-md-8 col-lg-5 text-center text-white">
                <h1>Accedi</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos eaque earum aliquam quos? Facilis officia est ad itaque dolore, quos, aut dolores pariatur non ducimus doloremque! Ullam, sit iure.</p>
            </div>
        </div>
    </div>

    <div class="bg-acc">
        <div class="container d-flex justify-content-center align-items-center p-5">
            <div class="row row-form animation-fade h-form-login">

                <div class="col-12 col-md-6 img-side"></div>

                <div class="col-12 col-md-6 float-end d-flex align-items-center justify-content-center position-relative">
                    <div class="input-box">
                        <h4 class="title-form text-lightDark mt-5 mt-md-0">{{__('ui.accedi')}}</h4>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
        
                            <div class="box-form my-4">
                                <input type="email" class="form-control form-control-custom input-custom" id="userEmail" name="email" aria-describedby="emailHelp">
                                <label for="userEmail" class="form-label">{{__('ui.email')}}</label>
                            </div>
        
                            <div class="box-form my-4">
                                <input type="password" class="form-control form-control-custom input-custom" id="userPassword" name="password">
                                <label for="userPassword" class="form-label">{{__('ui.password')}}</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="userRemember" name="remember">
                                <label for="userRemember" class="form-check-label">{{__('ui.resta connesso')}}</label>
                            </div>
        
                            <div>
                                <button type="submit" class="btn btn-card-announcement my-3 my-md-1">{{__('ui.accedi')}}</button>
                                <a href="{{route('register')}}" class="btn-register">{{__('ui.non hai un account?')}}</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
