<x-layout>
    <div class="bg-acc">
        <div class="container d-flex justify-content-center align-items-center min-vh-100 p-9">
            <div class="row row-form animation-fade h-100">

                <div class="col-12 col-md-6 img-side"></div>

                <div class="col-12 col-md-6 float-end d-flex align-items-center justify-content-center position-relative p-md-5">
                    <div class="input-box">
                        <h4 class="title-form text-lightDark mt-5 mt-md-0">{{__('ui.contattaci')}}</h4>
                        <form method="POST" action="{{ route('send') }}">
                            @csrf
                        
                            <div class="box-form my-4">
                                <input type="text" class="form-control form-control-custom input-custom input-form"
                                    id="name" name="user">
                                <label for="name" class="form-label">{{ __('ui.nome utente') }}</label>
                            </div>
                        
                            <div class="box-form my-4">
                                <input type="email" class="form-control form-control-custom input-custom" id="userEmail"
                                    name="email" aria-describedby="emailHelp">
                                <label for="userEmail" class="form-label">{{ __('ui.email') }}</label>
                            </div>
                        
                        
                            <div class="box-form my-4">
                                <textarea class="form-control form-control-custom input-custom" name="body" id="" cols="30"
                                    rows="10"></textarea>
                                <label for="userEmail" class="form-label">{{ __('ui.scrivi un messaggio') }}</label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-card-announcement my-1">{{ __('ui.invia') }}</button>
                            </div>
                        
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>