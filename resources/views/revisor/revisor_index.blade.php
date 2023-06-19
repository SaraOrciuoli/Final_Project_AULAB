<x-layout>

    <div class="container-fluid bg-revisor">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6 text-center text-white">
                <h1>{{ $announcement_to_check ? __('ui.annuncio da rivisionare') : __('ui.non ci sono annunci da revisionare') }}
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos eaque earum aliquam quos?
                    Facilis officia est ad itaque dolore, quos, aut dolores pariatur non ducimus doloremque! Ullam, sit
                    iure.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 d-flex flex-column justify-content-center align-items-center bg-acc">
        <div class="row w-75 justify-content-center bg-sec shadow rounded p-5">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    @if (isset($announcement_to_check) && $announcement_to_check->images )
                        <div class="carousel-inner">
                            @foreach ($announcement_to_check->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ $image->getUrl(400, 300) }}" class="p-3 " alt="img">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-chevron-left fa-2xl text-acc" aria-hidden="true"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <i class="fa-solid fa-chevron-right fa-2xl text-acc" aria-hidden="true"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h5 class="card-title">{{ $announcement_to_check->title }}</h5>
                    <p class="card-title my-2">{{ $announcement_to_check->description }}</p>
                    <small class="card-footer mb-2">Pubblicato il:
                        {{ $announcement_to_check->created_at->format('d/m/Y') }} -
                        Autore: {{ $announcement_to_check->user->name ?? '' }}</small>
                </div>
            </div>
            <div class="col-6 p-3">
                <div>
                    <div class="mb-4">
                        <h5>Tags</h5>
                        <div class="p-2">
                            @if ($image->labels)
                                @foreach ($image->labels as $label)
                                    <p class="d-inline">{{ $label }},</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div>
                        <h5>Revisione immagini</h5>
                        <p>Adulti:<span class="{{ $image->adult }}"></span></p>
                        <p>Satira:<span class="{{ $image->spoof }}"></span></p>
                        <p>Medicina:<span class="{{ $image->medical }}"></span></p>
                        <p>Violenza:<span class="{{ $image->violence }}"></span></p>
                        <p>Contento Esplicito:<span class="{{ $image->racy }}"></span></p>
                    </div>
                </div>
                <div class="d-flex mt-5">
                    <form method="POST"
                        action="{{ route('revisor_accept_announcement', ['announcement' => $announcement_to_check]) }}">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-success shadow">Accetta Annuncio</button>
                    </form>
                    <form method="POST"
                        action="{{ route('revisor_reject_announcement', ['announcement' => $announcement_to_check]) }}"
                        class="mx-4">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-danger shadow">Rifiuta Annuncio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5">
                <h2>Articoli Revisionati</h2>
            </div>
            @foreach ($announcement_checked as $announcement)
                <div class="row my-3 shadow-custom rounded bg-acc">
                    <div class="col-5">
                        <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                            @if ($announcement->images)
                                <div class="carousel-inner">
                                    @foreach ($announcement->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ $image->getUrl(400, 300) }}" class="p-3 "
                                                    alt="img">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                                    data-bs-slide="prev">
                                    <i class="fa-solid fa-chevron-left fa-2xl text-lightDark" aria-hidden="true"></i>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                                    data-bs-slide="next">
                                    <i class="fa-solid fa-chevron-right fa-2xl text-lightDark" aria-hidden="true"></i>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    </div>
                    <div class="col-7  h-100">
                        <div class="row justify-content-between h-75">
                            <div class="col-3 pt-2">
                                <div class="d-flex flex-column justify-content-evenly h-100">
                                    <h5>Nome:</h5>
                                    <p class="fw-light">{{ $announcement->title }}</p>
                                </div>
                            </div>
                            <div class="col-3 pt-2">
                                <div class="d-flex flex-column justify-content-evenly h-100">
                                    <h5>Descrizione:</h5>
                                    <p class="fw-light">{{ $announcement->description }}</p>
                                </div>
                            </div>
                            <div class="col-4 pt-3">
                                <div class="d-flex flex-column justify-content-evenly h-100">
                                    <h5>Data e Autore:</h5>
                                    <p class="fw-light">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}
                                        - Autore: {{ $announcement->user->name ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row h-25">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <form method="POST"
                                    action="{{ route('revisor_undo_announcement', ['announcement' => $announcement]) }}"
                                    class="mx-4">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-danger shadow me-5">Annulla
                                        Operazione</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $announcement_checked->links() }}
        </div>
    </div>



</x-layout>
