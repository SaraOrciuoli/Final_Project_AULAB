<x-layout>
    <div class="wrapper">
        <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 ">
            <div class="row row-form animation-fade">
                <div class="col-12 col-md-6">
                    <h4 class="title-form text-lightDark">Contattaci</h4>
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
</x-layout>
