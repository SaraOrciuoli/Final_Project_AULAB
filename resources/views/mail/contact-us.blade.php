<x-layout>
    <div class="bg-acc">
        <div class="container d-flex justify-content-center align-items-center min-vh-100 p-9">
            <div class="row row-form animation-fade h-100">
                <div class="col-12 col-md-6 img-side-contact p-5 p-md-3">
                    @if (session('message'))
                        <div class="alert alert-success"><i class="fa-solid fa-circle-check fa-lg"></i> {{ session('message') }}
                        <button type="button" class="float-end btn-close" data-bs-dismiss="alert" aria-label="Chiudi avviso"></button></div>
                    @endif
                    <ul class="d-flex justify-content-between justify-content-md-evenly h-100 flex-md-column p-0 align-items-center align-items-md-start">
                        <li>
                            <a href="https://twitter.com/?lang=it" target="_blank" class="box-contact"><i class="fa-brands fa-twitter fa-xl icon-footer"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank" class="box-contact"><i class="fa-brands fa-facebook fa-xl icon-footer"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank" class="box-contact"><i class="fa-brands fa-linkedin fa-xl icon-footer"></i></a>
                        </li>
                        <li>
                            <a href="https://web.whatsapp.com/" target="_blank" class="box-contact"><i class="fa-brands fa-whatsapp fa-xl icon-footer"></i></a>
                        </li>
                    </ul>
                </div>
                @livewire('mail-form')
            </div>
        </div>
    </div>
</x-layout>